<?php

@session_start(); 

/* Database configuration */
define('DB_HOST','localhost');
define('DB_USER','aaccu_aaccuco');
define('DB_PWD','aaccu_aaccuco332211');
define('DB_DB','aaccu_aaccuco');
define('DB_TYPE','mysqli');

/* 'DOC_ROOT' */
define('DOC_ROOT', '/home/ubuntu/aaccu/tst/');

/*'HTTP_ROOT' */
define('HTTP_ROOT', 'http://aaccu-dev.crplk.com/Access/');

/* ADODB configuration */
define("ADODB_DIR", DOC_ROOT.'libs/adodb/');
require_once(ADODB_DIR.'adodb.inc.php');
define('$PHP_SELF',$_SERVER['PHP_SELF']);
?>
