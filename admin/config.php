<?php
// HTTP
define('HTTP_SERVER', 'http://' . $_SERVER['SERVER_NAME'].'/');

// HTTPS
define('HTTPS_SERVER', 'http://' . $_SERVER['SERVER_NAME'].'/');

// DIR
define('DIR_APPLICATION', '/app/catalog/');
define('DIR_SYSTEM', '/app/system/');
define('DIR_LANGUAGE', '/app/catalog/language/');
define('DIR_TEMPLATE', '/app/catalog/view/theme/');
define('DIR_CONFIG', '/app/system/config/');
define('DIR_IMAGE', '/app/image/');
define('DIR_CACHE', '/app/storage/cache/');
define('DIR_DOWNLOAD', '/app/storage/download/');
define('DIR_LOGS', '/app/storage/logs/');
define('DIR_MODIFICATION', '/app/storage/modification/');
define('DIR_UPLOAD', '/app/storage/upload/');

// DB
$db = parse_url($_ENV["CLEARDB_DATABASE_URL"]); 
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', $db["host"]);
define('DB_USERNAME', $db["user"]);
define('DB_PASSWORD', $db["pass"]);
define('DB_DATABASE', trim($db["path"],"/"));
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');