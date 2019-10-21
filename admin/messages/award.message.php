<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please enter a Award Name information";
	break;
	
	case '2':
	$display_msg = "Please enter a award name";
	break;
	
	case '3':
	$display_msg = "Re-enter Award ......";
	break;
		
	case '4':
	$display_msg = "Award Name already exists";
	break;

	case '5':
	$display_msg = "New Award Added";
	break;

	case '6':
	$display_msg = "Creating new Award";
	break;		
	
	case '7':
	$display_msg = "Award information updated";
	break;	
	
	case '8':
	$display_msg = "Error while updating information";
	break;	
	
	case '9':
	$display_msg = "Award Information deleted";
	break;	
	
	case '10':
	$display_msg = "Error deleting category";
	break;	
	
	case '11':
	$display_msg = "New Award Added";
	break;
	
	case '12':
	$display_msg = "Error creating new Award ";
	break;		
	
	case '13':
	$display_msg = "Error Loading Award ID";
	break;
	
	case '14':
	$display_msg = "Award Profile Details Already exists";
	break;
	
	case '15':
	$display_msg = "Award information updated";
	break;
	
	case '16':
	$display_msg = "Try again with less size of images. Image may be no more than 800 x 800 pixels";
	break;
	
	case '17':
	$display_msg = "Information updated";
	break;
	

}
echo $display_msg;
?>