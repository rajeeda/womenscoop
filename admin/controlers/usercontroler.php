<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'user.class.php');

$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;

switch( $mode)
{
	
	case 'rgister':

	$email		=	isset( $_POST['email'])?$_POST['email']:$email;
	$username	=	isset( $_POST['username'])?$_POST['username']:$username;
	$passwd		=	isset( $_POST['pass'])?$_POST['pass']:$passwd;
	$re_pass	=	isset( $_POST['re_pass'])?$_POST['re_pass']:$re_pass;
	$active		=	isset( $_POST['active'])?$_POST['active']:$active;
	
	$pass = md5($passwd);
	//echo $username; exit;
	if($email=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../newuser.php?msg=1');</script>";	
	}
	elseif($username=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../newuser.php?msg=11');</script>";	
	}
	elseif($pass=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../newuser.php?msg=2');</script>";	
	}
	elseif($passwd!=$re_pass)
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../newuser.php?msg=3');</script>";
	}
	else
	{
		$isExists = User::ExistsUser($email);
		if($isExists==true)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../newuser.php?msg=4');</script>";		
		}
		elseif($isExists==false)
		{
			$regResult = User::NewUser($username,$pass,$email,$active);
			if($regResult==true)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../user_manager.php?msg=5');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../newuser.php?msg=6');</script>";
			}
		}
	}
	break;
	
	case 'update':
	
	$user_id	=	isset( $_POST['user_id'])?$_POST['user_id']:$user_id; 
	$passwd		=	isset( $_POST['pass'])?$_POST['pass']:$passwd;
	$re_pass	=	isset( $_POST['re_pass'])?$_POST['re_pass']:$re_pass;
	$username		=	isset( $_POST['username'])?$_POST['username']:$username;
	$active		=	isset( $_POST['active'])?$_POST['active']:$active; 
	
	$pass = md5($passwd);
	if($username=='')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edituser.php?msg=11&uid=".$user_id."');</script>";
	elseif($pass=='')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edituser.php?msg=2&uid=".$user_id."');</script>";
	elseif($passwd !=$re_pass)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edituser.php?msg=3&uid=".$user_id."');</script>";
	else
	$edit = User::EditProfile($pass,$username,$active,$user_id);
	if($edit==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../user_manager.php?msg=7');</script>";
	elseif($edit==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../user_manager.php?msg=8');</script>";
	
	break;
	
	case 'delete':
	
	$uid	=	isset( $_GET['userid'])?$_GET['userid']:$uid;
	$deleteResults = User::DeleteUser($uid); 
	
	if($deleteResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../user_manager.php?msg=9');</script>";
	elseif($deleteResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../user_manager.php?msg=10');</script>";
	
	break;
	
}	
?>