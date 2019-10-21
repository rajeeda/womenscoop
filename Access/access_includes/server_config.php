<?php
@session_start(); 

/* Database configuration */
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','');
define('DB_DB','photoshopdb');
define('DB_TYPE','mysql');

/*define doc root */
define('DOC_ROOT', '/home/iduwara/public_html/photoshop/');
define('HTTP_ROOT', 'http://www.onlinedesignstudio.net/photoshop/');
define('CLASS_PATH', DOC_ROOT.'backoffice/classes/');
define('ADMIN_PATH', DOC_ROOT.'backoffice/admin/');
define('ADMIN_MESSAGES', DOC_ROOT.'backoffice/admin/messages/');
define('ADMIN_CLASS_PATH', DOC_ROOT.'backoffice/admin/classes/');
define('CONTROLERS_PATH', DOC_ROOT.'controlers/');
define('ADMIN_CONTROLERS_PATH', DOC_ROOT.'backoffice/admin/controlers/');
define('ADMIN_TPL_PATH', DOC_ROOT.'backoffice/admin/tpl/');

/* ADODB configuration */
define("ADODB_DIR", DOC_ROOT.'backoffice/libs/adodb/');
require_once(ADODB_DIR.'adodb.inc.php');
?>