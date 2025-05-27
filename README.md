# NAC网络访问控制

## freeRadius+mysql+daloradius

### 启动
```
docker-compose up -d
```
- 启动后需导入sql
```shell
mysql -u radius -p radius < 02-daloradius.sql
```
- 创建日志目录
```
mkdir -p ./logs/other/apache2/daloradius/operators ./logs/other/apache2/daloradius/users ./logs/daloradius
```

### 访问
- http://ip:26800
- 用户名密码: administrator radius

## freeRadius服务配置相关
### 参考
- https://github.com/lirantal/daloradius/wiki/Installing-daloRADIUS
- https://hub.docker.com/r/freeradius/freeradius-server 

### 修改关键配置
- 修改mysql连接相关信息：./etc/mods-available/sql
- 使可用: ln -s etc/mods-available/sql etc/mods-enabled/sql
- 关闭radius中的mysql ssl认证: sed -Ei '/^[\t\s#]*tls\s+\{/, /[\t\s#]*\}/ s/^/#/' etc/freeradius/mods-available/sql
```
#另外，请确保以下两个选项取消注释并按如下方式指定：
read_clients = yes
client_table = "nas"
```

- 添加 RADIUS 认证的共享密钥和允许认证的客户端网段:
vim ./etc/freeradius/clients.conf 
```shell
client dockernet {
        #ipaddr = 172.30.0.0/16
        ipaddr = *
        secret = eZU6sc2HArRn
}

```

### 用户与权限
- 添加用户:
```
  INSERT INTO radcheck (username, attribute, op, value) VALUES ('alice', 'Cleartext-Password', ':=', 'Daq6DMQHAo7p');
```
- 测试radius服务状态
```shell
  radtest alice Daq6DMQHAo7p 127.0.0.1 0 eZU6sc2HArRn
```

### 初始化sql
从radius服务中获取:
- postgres: /etc/freeradius/mods-config/sql/main/postgresql/schema.sql
- mysql: /etc/freeradius/mods-config/sql/main/mysql/schema.sql
此处选择mysql，因此使用mysql相关初始化文件，docker-compose.yaml已配置

## daloradius服务配置相关
创建daloradius表，也是最后一步，需要手动运行
```
mysql -u radius -p radius < 02-daloradius.sql
```
- 以上除这一步需手动执行sql，其他均已修改，可根据提示自定义修改

## daloradius镜像构建
```
docker build -t daloradius:v1.4 .
```
## mac地址认证方案
- 白名单认证（当前）: 通过修改etc/freeradius/users
```
#默认即为白名单模式
#DEFAULT  Auth-Type := Accept
```
- guest VLAN + ACL 控制: 需关闭白名单模式
```

```
- 打标 VLAN（给白名单设备分配业务网，非白名单分配访客网）配合交换机做隔离
