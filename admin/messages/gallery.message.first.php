<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please Select Image";
	break;
	
	case '2':
	$display_msg = "Please Select Image Catagary";
	break;
	
	case '3':
	$display_msg = "Re-enter password is wrong";
	break;
		
	case '4':
	$display_msg = "User already exists";
	break;

	case '5':
	$display_msg = "Image Insert Successfully ";
	break;

	case '6':
	$display_msg = "Error Inserting Image";
	break;		
	
	/*case '7':
	$display_msg = "Enter Image Categary Name ";
	break;	
	
	case '8':
	$display_msg = "Successfuly Updated";
	break;	
	
	case '9':
	$display_msg = "Cannot Update";
	break;	*/
	
	case '10':
	$display_msg = "Error deleting user";
	break;	
	
	case '17':
	$display_msg = "Error Uploading Image";
	break;	
	
}
echo $display_msg;
?>