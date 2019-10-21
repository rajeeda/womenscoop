<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please enter a credit union solution";
	break;
	
	case '2':
	$display_msg = "Please enter a solution description";
	break;
	
	case '3':
	$display_msg = "Re-enter password is wrong";
	break;
		
	case '4':
	$display_msg = "User already exists";
	break;

	case '5':
	$display_msg = "New Solution created";
	break;

	case '6':
	$display_msg = "Error creating new Solution";
	break;		
	
	case '7':
	$display_msg = "CU Solution updated";
	break;	
	
	case '8':
	$display_msg = "Error updating CU Solution";
	break;	
	
	case '9':
	$display_msg = "CU Solution deleted";
	break;	
	
	case '10':
	$display_msg = "Error deleting CU Solution";
	break;	
	
	case '11':
	$display_msg = "Enter Attachment Title";
	break;	
	
	case '12':
	$display_msg = "Attached filed Successfully Inserted";
	break;	
	
	case '13':
	$display_msg = "Error Attach Files";
	break;	
	
	case '10':
	$display_msg = "Error deleting CU Solution";
	break;	
	
	
	case '28':
	$display_msg = "Error uploding member Logo";
	break; 
	
	case '17':
	$display_msg = "Error uploding image";
	break; 

}
echo $display_msg;
?>