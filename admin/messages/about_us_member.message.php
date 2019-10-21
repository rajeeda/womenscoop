<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please select member level type or enter new one.";
	break;
	
	case '2':
	$display_msg = "Successfully added new member position.";
	break;
	
	case '3':
	$display_msg = "Error inserting new member position.";
	break;
		
	case '4':
	$display_msg = "Error inserting new member details.";
	break;

	case '5':
	$display_msg = "New member Successfully added.";
	break;

	case '6':
	$display_msg = "Successfully updated member position.";
	break;	
	
	case '7':
	$display_msg = "Error updating member position.";
	break;
	
	case '8':
	$display_msg = "You can't rename this this member type.";
	break;	
	
	case '9':
	$display_msg = "Successfully rename member position.";
	break;
	
	case '10':
	$display_msg = "Error rename member position.";
	break;
	
	case '11':
	$display_msg = "Successfully updated member basic data.";
	break;
	
	case '12':
	$display_msg = "Error updating member basic data.";
	break;
	
	case '13':
	$display_msg = "Successfully updated member security data.";
	break;
	
	case '14':
	$display_msg = "Error update member security data.";
	break;
	
	case '15':
	$display_msg = "Supplied password is incorrect.";
	break;
	
	case '16':
	$display_msg = "Successfully delete member.";
	break;
	
	case '18':
	$display_msg = "Error deleting member.";
	break;
	
	case '17':
	$display_msg = "Image Uploading Error";
	break;	
	
	

}
echo $display_msg;
?>