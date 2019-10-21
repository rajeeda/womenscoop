<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please enter a description and title";
	break;
	
	case '2':
	$display_msg = "Core value details added";
	break;
	
	case '3':
	$display_msg = "Error in adding core values";
	break;
		
	case '4':
	$display_msg = "Name already exists";
	break;

	case '5':
	$display_msg = "Core Value details updated";
	break;

	case '6':
	$display_msg = "Error while updating information";
	break;		
	
	case '7':
	$display_msg = "Award information updated";
	break;	
	
	case '8':
	$display_msg = "Error while updating information";
	break;	
	
	case '9':
	$display_msg = "Image updated";
	break;	
	
	case '10':
	$display_msg = "Image update failed";
	break;	
	
	case '11':
	$display_msg = "New Award Added";
	break;
	
	case '12':
	$display_msg = "Core value deleted";
	break;		
	
	case '13':
	$display_msg = "Error while deleting information";
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