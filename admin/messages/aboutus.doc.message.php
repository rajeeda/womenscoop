<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please select Document category  or enter new one.";
	break;
	
	case '2':
	$display_msg = "Already exists Document category.";
	break;
	
	case '3':
	$display_msg = "Enter Document Title.";
	break;
		
	case '4':
	$display_msg = "Can't be empty document field.";
	break;

	case '5':
	$display_msg = "Your Document category selection invalied.";
	break;

	case '6':
	$display_msg = "Problems in document category creating.";
	break;	
	
	case '7':
	$display_msg = "Error inserting Document data.";
	break;
	
	case '8':
	$display_msg = "Successfully Insert Document.";
	break;	
	
	case '9':
	$display_msg = "There are no Such document category.";
	break;
	
	case '10':
	$display_msg = "You are not rename relavent document category.";
	break;
	
	case '11':
	$display_msg = "Error update Document category data.";
	break;
		
	case '12':
	$display_msg = "Successfully update Document data.";
	break;
	
	case '13':
	$display_msg = "Error update Document data.";
	break;
	
	case '14_q':
	$display_msg = "Error update member security data.";
	break;
	
	case '15':
	$display_msg = "Error deleting Document data.";
	break;
	
	case '16':
	$display_msg = "Successfully delete Document data.";
	break;	
	
	
	case '17':
	$display_msg = "Image Uploading Error";
	break;
}
echo $display_msg;
?>