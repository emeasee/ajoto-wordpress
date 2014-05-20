<?php
/* Production */
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
if (getenv('DB_PORT')) {
  define('DB_HOST', getenv('DB_HOST').':'.getenv('DB_PORT'));
} else {
  define('DB_HOST', 'localhost');
}

define('WP_HOME',(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://".$_SERVER['HTTP_HOST'] : "http://".$_SERVER['HTTP_HOST']);
define('WP_SITEURL', WP_HOME.'/wp');

define('FORCE_SSL_ADMIN', true);
define('FORCE_SSL_LOGIN', true);
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
        $_SERVER['HTTPS']='on';


ini_set('display_errors', 0);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);