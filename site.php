<?php
define('FORM_BLOCK_SENDER_EMAIL','views@alterviews.com');
define('EMAIL_DEFAULT_FROM_ADDRESS','views@alterviews.com');
define('ENABLE_APPLICATION_EVENTS', true);
define('PERMISSIONS_MODEL', 'advanced');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'alpha');
define('ENABLE_NEWSFLOW_OVERLAY', false);
define('ENABLE_APP_NEWS', false);
define('DB_SERVER', 'c5memo.db.8458944.hostedresource.com');
define('DB_USERNAME', 'c5memo');
define('DB_PASSWORD', 'Cand0ver');
define('DB_DATABASE', 'av');
//-- define('BASE_URL', 'http://localhost:8888'); --//
//-- define('DIR_REL', '/av'); --//
define('BASE_URL_DEFAULT', 'http://www.alterviews.com');
define('BASE_URL_POSSIBILITIES', 'http://localhost:8888');
define('PASSWORD_SALT', 'xkjtKlm6i1q6xR0Cb329Ozn5jvcY1SmIHTcGKj1N4LXoLpbL66mFsgA6yVGxIOO1');
define('AVATAR_NONE','/alterviews/images/avatar_silhouette.png');
?>
<?php   //-- BLOCKTYPES PERMISSIONS PACKAGE BOOTSTRAP LOAD CODE BEGIN --//
if(!defined('BLOCKTYPES_PERMISSIONS_BOOTSTRAP_CORRECTLOAD')){
	define('BLOCKTYPES_PERMISSIONS_BOOTSTRAP_CORRECTLOAD', true);
	if (file_exists('/packages/blocktypes_permissions/boot.php')){
		include_once('/packages/blocktypes_permissions/boot.php');
	}
}
//-- BLOCKTYPES PERMISSIONS PACKAGE BOOTSTRAP LOAD CODE END --//?>