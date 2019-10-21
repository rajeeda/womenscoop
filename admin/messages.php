<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	case '1':
	$display_msg = "Invalid User Name or Password";
	break;
	
	case '2':
	$display_msg = "Please login to the system";
	break;
	
	case '3':
	$display_msg = "Please Enter Username and Password";
	break;
	
	case '4':
	$display_msg = "Please Enter a Password";
	break;
	
	case '5':
	$display_msg = "Re-enter Password is Wrong";
	break;
	
	case '6':
	$display_msg = "Unable to change password";
	break;
	
	case '7':
	$display_msg = "Profile Updated";
	break;

	case '8':
	$display_msg = "Page Updated";
	break;

	case '9':
	$display_msg = "Error Updating Page";
	break;		
	
	case '10':
	$display_msg = "News Item Updated";
	break;	
	
	case '11':
	$display_msg = "Error Updating News";
	break;	
	
	case '12':
	$display_msg = "News Deleted";
	break;	
	
	case '13':
	$display_msg = "Error Deleting News";
	break;	
	
	case '14':
	$display_msg = "New News Entry Created";
	break;	
	
	case '15':
	$display_msg = "Error Creating New News Entry";
	break;	
	
	case '16':
	$display_msg = "Title cannot be blank";
	break;	
	
	case '17':
	$display_msg = "Summery cannot be blank";
	break;	
	
	case '18':
	$display_msg = "Description cannot be blank";
	break;	
	
	case '19':
	$display_msg = "Content cannot be black";
	break;	
	
	case '20':
	$display_msg = "Newsletter Updated";
	break;	
	
	case '21':
	$display_msg = "Error Updating Newsletter";
	break;	
	
	case '22':
	$display_msg = "Newsletter Sent";
	break;	
		
	case '23':
	$display_msg = "Error Sending Newsletter";
	break;	
	
	case '24':
	$display_msg = "New Agenda Entry Created";
	break;	
	
	case '25':
	$display_msg = "Error Creating New Agenda Entry";
	break;	
	
	case '26':
	$display_msg = "Agenda Deleted";
	break;	
	
	case '27':
	$display_msg = "Error Deleting Agenda";
	break;	
	
	case '28':
	$display_msg = "Agenda Item Updated";
	break;	
	
	case '29':
	$display_msg = "Error Updating Agenda";
	break;	

}
echo $display_msg;
?>