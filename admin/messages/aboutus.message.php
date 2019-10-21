<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please Enter a Memeber Title.";
	break;
	
	case '2':
	$display_msg = "Please Enter Member Name.";
	break;
	
	case '3':
	$display_msg = "Please Enter a Post.";
	break;
		
	case '4':
	$display_msg = "successfully new about us data inserted.";
	break;

	case '5':
	$display_msg = "Error Inserting new about us data.";
	break;

	case '6':
	$display_msg = "Error Update about us data.";
	break;		
	
	case '7':
	$display_msg = "About us page updated.";
	break;	
	
	case '8':
	$display_msg = "Error updating About us details.";
	break;	
	
	case '9':
	$display_msg = "Successfully deleted.";
	break;	
	
	case '10':
	$display_msg = "Error deleting About us details.";
	break;	
	
	case '11':
	$display_msg = "Please Enter category.";
	break;

	case '12':
	$display_msg = "Please Enter possition.";
	break;

	case '17':
	$display_msg = "Image Uploading Error.";
	break;
	
	case '28':
	$display_msg = "Error uploding Image.";
	break;

}
echo $display_msg;
?>