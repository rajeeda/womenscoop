<?php
@session_start(); 

/* Database configuration */
define('DB_HOST','10.6.186.73');
define('DB_USER','accu_coop');
define('DB_PWD','Accu123*');
define('DB_DB','accu_coop');
//define('DB_DB','accu_db');
define('DB_TYPE','mysql');

/*define doc root */
//define('DOC_ROOT', 'G:/Program Files/Apache Software Foundation/Apache2.2/htdocs/Accu_last/');
//define('HTTP_ROOT', 'http://localhost/Accu/');

define('DOC_ROOT', '/home/content/r/a/j/rajeeda/html/Accu/');
define('HTTP_ROOT', 'http://localhost/Accu/');
define('CLASS_PATH', DOC_ROOT.'classes/');
define('ADMIN_PATH', DOC_ROOT.'admin/');
define('ADMIN_MESSAGES', DOC_ROOT.'admin/messages/');
define('ADMIN_CLASS_PATH', DOC_ROOT.'admin/classes/');
define('CONTROLERS_PATH', DOC_ROOT.'controlers/');
define('ADMIN_CONTROLERS_PATH', DOC_ROOT.'admin/controlers/');
define('ADMIN_TPL_PATH', DOC_ROOT.'admin/tpl/');

/* ADODB configuration */
define("ADODB_DIR", DOC_ROOT.'libs/adodb/');
require_once(ADODB_DIR.'adodb.inc.php');

?>
