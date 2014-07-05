<?php

$config = parse_ini_file(__DIR__ .'/../wp-config.ini', true);

define('DB_NAME',            $config['db']['DB_NAME']);
define('DB_USER',            $config['db']['DB_USER']);
define('DB_PASSWORD',        $config['db']['DB_PASSWORD']);
define('DB_HOST',            $config['db']['DB_HOST']);
define('DB_CHARSET',         $config['db']['DB_CHARSET']);
define('DB_COLLATE',         $config['db']['DB_COLLATE']);
define('SAVEQUERIES',        $config['db']['SAVEQUERIES']);

define('WP_CONTENT_DIR',     $config['wp']['WP_CONTENT_DIR']);
define('WP_CONTENT_URL',     $config['wp']['WP_CONTENT_URL']);
define('UPLOADS',            $config['wp']['UPLOADS']);
define('WPLANG',             $config['wp']['WPLANG']);
define('WP_DEBUG',           $config['wp']['WP_DEBUG']);
define('WP_HOME',            $config['wp']['WP_HOME']);
define('WP_SITEURL',         $config['wp']['WP_SITEURL']);
define('FORCE_SSL_ADMIN',    $config['wp']['FORCE_SSL_ADMIN']);
define('FORCE_SSL_LOGIN',    $config['wp']['FORCE_SSL_LOGIN']);
define('DISALLOW_FILE_MODS', $config['wp']['DISALLOW_FILE_MODS']);
define('ABSPATH',            $config['wp']['ABSPATH']);

define('AUTH_KEY',           $config['keys']['AUTH_KEY']);
define('SECURE_AUTH_KEY',    $config['keys']['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY',      $config['keys']['LOGGED_IN_KEY']);
define('NONCE_KEY',          $config['keys']['NONCE_KEY']);
define('AUTH_SALT',          $config['keys']['AUTH_SALT']);
define('SECURE_AUTH_SALT',   $config['keys']['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT',     $config['keys']['LOGGED_IN_SALT']);
define('NONCE_SALT',         $config['keys']['NONCE_SALT']);

define('SITE_ENV',           $config['site']['ENV']);

if ($config['wp']['FORCE_SSL_LOGIN']) {
  $_SERVER['HTTPS']='on';
}

$table_prefix  = $config['db']['TABLE_PREFIX'];

require_once( ABSPATH . 'wp-settings.php' );
