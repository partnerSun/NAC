FROM docker.eehub.cyou/library/debian:12.11


RUN sed -i 's|deb.debian.org|mirrors.aliyun.com|g' /etc/apt/sources.list.d/debian.sources
RUN apt update

# install daloRadius: https://github.com/lirantal/daloradius/wiki/Installing-daloRADIUS
RUN apt update && apt --no-install-recommends install -y apache2 php libapache2-mod-php \
    php-mysql php-zip php-mbstring php-common php-curl \
    php-gd php-db php-mail php-mail-mime \
    mariadb-client freeradius-utils rsyslog git net-tools nano \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y tzdata && \
    ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime && \
    echo "Asia/Shanghai" > /etc/timezone && \
    dpkg-reconfigure -f noninteractive tzdata \
    && apt clean && rm -rf /var/lib/apt/lists/*

# 设置工作目录
WORKDIR /var/www

# 克隆 daloradius 源码（建议指定稳定 tag）
RUN git clone --depth=1 --branch master https://github.com/lirantal/daloradius.git 
RUN mkdir -p /var/log/apache2/daloradius/{operators,users}

ENV DALORADIUS_USERS_PORT=80 \
    DALORADIUS_OPERATORS_PORT=8000 \
    DALORADIUS_ROOT_DIRECTORY=/var/www/daloradius \
    DALORADIUS_SERVER_ADMIN=admin@daloradius.local
    
ADD ./apache/envvars /tmp/envvars
RUN cat /tmp/envvars >> /etc/apache2/envvars

ADD ./apache/ports.conf /etc/apache2/ports.conf
ADD ./apache/operators.conf /etc/apache2/sites-available/operators.conf
ADD ./apache/users.conf /etc/apache2/sites-available/users.conf



RUN cd /var/www/daloradius/app/common/includes \
    && cp daloradius.conf.php.sample daloradius.conf.php \
    && chown www-data:www-data daloradius.conf.php \
    && chmod 664 daloradius.conf.php \
    && chown www-data:www-data /var/www/daloradius/contrib/scripts/dalo-crontab

RUN mkdir -p /var/log/apache2/daloradius/users/ /var/log/apache2/daloradius/operators \
    && cd /var/www/daloradius/ \
    && mkdir -p var/{log,backup} \
    && chown -R www-data:www-data var \
    && chmod -R 775 var


RUN a2dissite 000-default.conf && a2ensite operators.conf users.conf

EXPOSE 80 8000

CMD ["apache2ctl", "-D", "FOREGROUND"]



