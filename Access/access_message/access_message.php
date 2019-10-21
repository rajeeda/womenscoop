<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please select option.";
	break;
	
	case '2':
	$display_msg = "Error Insert of option data   ";
	break;
	
	case '3':
	$display_msg = "Successfully Insert of option data.";
	break;
		
	case '4':
	$display_msg = "Error registering Credit Union.";
	break;
	
	case '5':
	$display_msg = "Do not match user name and password.";
	break;
	
	case '6':
	$display_msg = "Please logging to system.";
	break;

	case '7':
 	$display_msg = "Successfully registering Credit Union.";
	break;
	
	case '8':
 	$display_msg = "Your Credit Union already exist.";
 	break;
	
	case '9':
 	$display_msg = "Select relevant CU name and year.";
 	break;
	
	case '10':
 	$display_msg = "Please enter admin username and password.";
 	break;
	
	case '11':
 	$display_msg = "Select relevant CU name and year.";
 	break;
	
	case '12':
  	$display_msg = "Please enter password.";
  	break;
  
}
echo $display_msg;
?>