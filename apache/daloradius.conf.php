<?php
/*
 *********************************************************************************************************
 * daloRADIUS - RADIUS Web Platform
 * Copyright (C) 2007 - Liran Tal <liran@lirantal.com> All Rights Reserved.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 *********************************************************************************************************
 *
 * Description:          daloRADIUS Configuration File
 *
 * Modification Date:    Mon Mar 13 15:55:00 CET 2023
 *
 *********************************************************************************************************
 */

$configValues['FREERADIUS_VERSION'] = '3';
$configValues['CONFIG_DB_ENGINE'] = 'mysqli';
$configValues['CONFIG_DB_HOST'] = 'mysql';
$configValues['CONFIG_DB_PORT'] = '3306';
$configValues['CONFIG_DB_USER'] = 'radius';
$configValues['CONFIG_DB_PASS'] = 'eZU6sc2HArRn';
$configValues['CONFIG_DB_NAME'] = 'radius';
$configValues['CONFIG_DB_TBL_RADCHECK'] = 'radcheck';
$configValues['CONFIG_DB_TBL_RADREPLY'] = 'radreply';
$configValues['CONFIG_DB_TBL_RADGROUPREPLY'] = 'radgroupreply';
$configValues['CONFIG_DB_TBL_RADGROUPCHECK'] = 'radgroupcheck';
$configValues['CONFIG_DB_TBL_RADUSERGROUP'] = 'radusergroup';
$configValues['CONFIG_DB_TBL_RADNAS'] = 'nas';
$configValues['CONFIG_DB_TBL_RADHG'] = 'radhuntgroup';
$configValues['CONFIG_DB_TBL_RADPOSTAUTH'] = 'radpostauth';
$configValues['CONFIG_DB_TBL_RADACCT'] = 'radacct';
$configValues['CONFIG_DB_TBL_RADIPPOOL'] = 'radippool';
$configValues['CONFIG_DB_TBL_DALOOPERATORS'] = 'operators';
$configValues['CONFIG_DB_TBL_DALOOPERATORS_ACL'] = 'operators_acl';
$configValues['CONFIG_DB_TBL_DALOOPERATORS_ACL_FILES'] = 'operators_acl_files';
$configValues['CONFIG_DB_TBL_DALORATES'] = 'rates';
$configValues['CONFIG_DB_TBL_DALOHOTSPOTS'] = 'hotspots';
$configValues['CONFIG_DB_TBL_DALOUSERINFO'] = 'userinfo';
$configValues['CONFIG_DB_TBL_DALOUSERBILLINFO'] = 'userbillinfo';
$configValues['CONFIG_DB_TBL_DALODICTIONARY'] = 'dictionary';
$configValues['CONFIG_DB_TBL_DALOREALMS'] = 'realms';
$configValues['CONFIG_DB_TBL_DALOPROXYS'] = 'proxys';
$configValues['CONFIG_DB_TBL_DALOBILLINGPAYPAL'] = 'billing_paypal';
$configValues['CONFIG_DB_TBL_DALOBILLINGMERCHANT'] = 'billing_merchant';
$configValues['CONFIG_DB_TBL_DALOBILLINGPLANS'] = 'billing_plans';
$configValues['CONFIG_DB_TBL_DALOBILLINGRATES'] = 'billing_rates';
$configValues['CONFIG_DB_TBL_DALOBILLINGHISTORY'] = 'billing_history';
$configValues['CONFIG_DB_TBL_DALOBATCHHISTORY'] = 'batch_history';
$configValues['CONFIG_DB_TBL_DALOBILLINGPLANSPROFILES'] = 'billing_plans_profiles';
$configValues['CONFIG_DB_TBL_DALOBILLINGINVOICE'] = 'invoice';
$configValues['CONFIG_DB_TBL_DALOBILLINGINVOICEITEMS'] = 'invoice_items';
$configValues['CONFIG_DB_TBL_DALOBILLINGINVOICESTATUS'] = 'invoice_status';
$configValues['CONFIG_DB_TBL_DALOBILLINGINVOICETYPE'] = 'invoice_type';
$configValues['CONFIG_DB_TBL_DALOPAYMENTS'] = 'payment';
$configValues['CONFIG_DB_TBL_DALOPAYMENTTYPES'] = 'payment_type';
$configValues['CONFIG_DB_TBL_DALONODE'] = 'node';
$configValues['CONFIG_DB_TBL_DALOMESSAGES'] = 'messages';
$configValues['CONFIG_FILE_RADIUS_PROXY'] = '/etc/freeradius/3.0/proxy.conf';
$configValues['CONFIG_PATH_RADIUS_DICT'] = '';
$configValues['CONFIG_PATH_DALO_VARIABLE_DATA'] = '/var/www/daloradius/var';
$configValues['CONFIG_PATH_DALO_TEMPLATES_DIR'] = '/var/www/daloradius/app/common/templates';
$configValues['CONFIG_DB_PASSWORD_ENCRYPTION'] = 'yes';
$configValues['CONFIG_LANG'] = 'en';
$configValues['CONFIG_LOG_PAGES'] = 'no';
$configValues['CONFIG_LOG_ACTIONS'] = 'no';
$configValues['CONFIG_LOG_QUERIES'] = 'no';
$configValues['CONFIG_DEBUG_SQL'] = 'no';
$configValues['CONFIG_DEBUG_SQL_ONPAGE'] = 'no';
$configValues['CONFIG_LOG_FILE'] = '/var/www/daloradius/var/log/daloradius.log';
$configValues['CONFIG_SYSLOG_FILE'] = '/var/log/syslog';
$configValues['CONFIG_RADIUSLOG_FILE'] = '/var/log/freeradius/radius.log';
$configValues['CONFIG_BOOTLOG_FILE'] = '/var/log/boot.log';
$configValues['CONFIG_IFACE_PASSWORD_HIDDEN'] = 'no';
$configValues['CONFIG_IFACE_TABLES_LISTING'] = '25';
$configValues['CONFIG_IFACE_TABLES_LISTING_NUM'] = 'yes';
$configValues['CONFIG_IFACE_AUTO_COMPLETE'] = 'yes';
$configValues['CONFIG_MAINT_TEST_USER_RADIUSSERVER'] = '127.0.0.1';
$configValues['CONFIG_MAINT_TEST_USER_RADIUSPORT'] = '1812';
$configValues['CONFIG_MAINT_TEST_USER_NASPORT'] = '0';
$configValues['CONFIG_MAINT_TEST_USER_RADIUSSECRET'] = 'testing123';
$configValues['CONFIG_USER_ALLOWEDRANDOMCHARS'] = 'abcdefghijkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789';
$configValues['CONFIG_MAIL_SMTPADDR'] = '127.0.0.1';
$configValues['CONFIG_MAIL_SMTPPORT'] = '25';
$configValues['CONFIG_MAIL_SMTPAUTH'] = '';
$configValues['CONFIG_MAIL_SMTPFROM'] = 'root@daloradius.xdsl.by';
$configValues['CONFIG_MAIL_ENABLED'] = 'no';
$configValues['CONFIG_MAIL_SMTP_SECURITY'] = 'tls';
$configValues['CONFIG_MAIL_SMTP_SENDER_NAME'] = 'daloRADIUS Mailer';
$configValues['CONFIG_MAIL_SMTP_SUBJECT_PREFIX'] = '[daloRADIUS]';
$configValues['CONFIG_MAIL_SMTP_USERNAME'] = '';
$configValues['CONFIG_MAIL_SMTP_PASSWORD'] = '';
$configValues['CONFIG_DASHBOARD_DALO_SECRETKEY'] = 'sillykey';
$configValues['CONFIG_DASHBOARD_DALO_DEBUG'] = '1';
$configValues['CONFIG_DASHBOARD_DALO_DELAYSOFT'] = '5';
$configValues['CONFIG_DASHBOARD_DALO_DELAYHARD'] = '15';
$configValues['CONFIG_DB_PASSWORD_MAX_LENGTH'] = '14';
$configValues['CONFIG_DB_PASSWORD_MIN_LENGTH'] = '8';
$configValues['CONFIG_FIX_STALE_ENABLED'] = 'no';
$configValues['CONFIG_FIX_STALE_INTERVAL'] = '60';
$configValues['CONFIG_FIX_STALE_GRACE'] = '30';
$configValues['CONFIG_NODE_STATUS_MONITOR_ENABLED'] = 'no';
$configValues['CONFIG_NODE_STATUS_MONITOR_HARD_DELAY'] = '15';
$configValues['CONFIG_USER_TRAFFIC_MONITOR_ENABLED'] = 'no';
$configValues['CONFIG_USER_TRAFFIC_MONITOR_HARDLIMIT'] = '1073741824';
$configValues['CONFIG_USER_TRAFFIC_MONITOR_SOFTLIMIT'] = '536870912';
$configValues['CONFIG_USER_VPN_SERVER'] = 'vpn.company.com';



// invoice templates - optional
$configValues['CONFIG_INVOICE_TEMPLATE'] = 'invoice_template.html';
$configValues['CONFIG_INVOICE_ITEM_TEMPLATE'] = 'invoice_item_template.html';

/*
// Locations Configuration directives
// Locations directives are support for accessing different databases from the daloRADIUS Login console
// adjust the locations below for databases you are running (if you are running more than one).
// You could configure invoice templates for each location - optional.
$configValues['CONFIG_LOCATIONS'] = array(
    "Location Example 1" => array(
                                    "Engine"   => "mysql",
                                    "Username" => "root",
                                    "Password" => "",
                                    "Database" => "radius",
                                    "Hostname" => "127.0.0.1",
                                    "Port"     => "3306",
                                    "CONFIG_INVOICE_TEMPLATE" => "invoice_template_location_1.html",
                                    "CONFIG_INVOICE_ITEM_TEMPLATE" => "invoice_item_template_location_1.html"
                                 ),

    "Location Example 2" => array(
                                    "Engine"   => "mysql",
                                    "Username" => "db_usertest",
                                    "Password" => "db_passtest",
                                    "Database" => "test_db1",
                                    "Hostname" => "localhost",
                                    "Port"     => "3306"
                                 )
);
*/
