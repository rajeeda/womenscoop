<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'admin.class.php');

$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;

switch( $mode)
{
	case 'login' :
	
	$user	=	isset( $_POST['user'])?$_POST['user']:$user;
	$pass	=	isset( $_POST['pass'])?$_POST['pass']:$pass;
	$pass	=md5($pass);
	if(($user=='') || ($pass==''))
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../index.php?msg=3');</script>";
	}
	
	$authorised = Admin::AuthenticateAdmin($user,$pass);
	if($authorised==true)
	{
		$_SESSION['adminid'] = $authorised['adminId'];
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../signindefault.php');</script>";	
	}
	elseif($authorised==false)
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../index.php?msg=1');</script>";	
	}
	
	break;
	
	case 'logout':
	
	if(isset($_SESSION['adminid']))
	{
		session_unset();
		session_destroy();
		//echo "logout".$_SESSION['adminid']."123456";exit;
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../index.php');</script>";	
	}
	
	break;
	
	case 'edit':
	
	$pass		=	isset( $_POST['pass'])?$_POST['pass']:$pass;
	$re_pass	=	isset( $_POST['re_pass'])?$_POST['re_pass']:$re_pass;
	$email		=	isset( $_POST['email'])?$_POST['email']:$pass;
	
	if($pass=='')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../myaccount.php?msg=4');</script>";
	elseif($pass!=$re_pass)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../myaccount.php?msg=5');</script>";
	else
	$edit = Admin::editProfile($pass,$email,$_SESSION['adminid']);
	if($edit==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../myaccount.php?msg=6');</script>";
	elseif($edit==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../signindefault.php?msg=7');</script>";
	
	break;
	
}//end switch
?>
