<?php
session_start(); 

/* Database configuration */
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','');
define('DB_DB','aaccu_aaccuco');
define('DB_TYPE','mysql');

/*define doc root */
//define('DOC_ROOT', 'D:/Program Files/Apache Software Foundation/Apache2.2/htdocs/Accu_last/Accu_hosting/');
//define('HTTP_ROOT', 'http://localhost/Accu_last/Accu_hosting/');

define('DOC_ROOT', 'C:/xampp/htdocs/aaccu');
define('HTTP_ROOT', 'http://localhost/aaccu');
define('CLASS_PATH', DOC_ROOT.'/classes/');
define('ADMIN_PATH', DOC_ROOT.'/admin/');
define('ADMIN_MESSAGES', DOC_ROOT.'/admin/messages/');
define('ADMIN_CLASS_PATH', DOC_ROOT.'/admin/classes/');
define('CONTROLERS_PATH', DOC_ROOT.'controlers/');
define('ADMIN_CONTROLERS_PATH', DOC_ROOT.'/admin/controlers/');
define('ADMIN_TPL_PATH', DOC_ROOT.'/admin/tpl/');

/* ADODB configuration */
//define("ADODB_DIR", DOC_ROOT.'libs/adodb/');
//require_once(ADODB_DIR.'adodb.inc.php');
define('$PHP_SELF',$_SERVER['PHP_SELF']);

// Colombo, Sri Lanka, Asia
//date.timezone = "Asia/Colombo"
date_default_timezone_set('Asia/Bangkok');
