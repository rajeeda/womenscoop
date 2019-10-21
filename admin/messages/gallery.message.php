<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	
	
	case '100':
	$display_msg = "Please Select Catagary image";
	break;

	case '101':
	$display_msg = "Enter Image Categary Name ";
	break;	
	
	case '102':
	$display_msg = "Successfuly Updated";
	break;	
	
	case '103':
	$display_msg = "Cannot Update";
	break;
	
	case '104':
	$display_msg = "Please Select Catagary image";
	break;
	
	case '105':
	$display_msg = "Image details Successfuly Updated";
	break;
	
	case '106':
	$display_msg = "Cant  Update Image";
	break;
	
	case '107':
	$display_msg = "Image Delete Successfuly";
	break;
	
	case '108':
	$display_msg = "Cannot  Delete Image";
	break;

}
echo $display_msg;
?>