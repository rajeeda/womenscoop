<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please enter an News Title";
	break;
	
	case '2':
	$display_msg = "Please enter news Description";
	break;
	
	case '3':
	$display_msg = "Please Enter a news Date";
	break;
		
	case '4':
	$display_msg = "Event already exists";
	break;

	case '5':
	$display_msg = "Successfully Insert New NEWS ";
	break;

	case '6':
	$display_msg = "Error Inserting new News";
	break;		
	
	case '7':
	$display_msg = "News updated";
	break;	
	
	case '8':
	$display_msg = "Error updating News";
	break;	
	
	case '9':
	$display_msg = "News deleted";
	break;	
	
	case '10':
	$display_msg = "Error deleting News";
	break;	
	
	case '11':
	$display_msg = "Add News To Home Page";
	break;	
	
	case '12':
	$display_msg = "Cannot Add News Home Page";
	break;
	
	case '13':
	$display_msg = "Attachmet Uploaded";
	break;
	
	case '14':
	$display_msg = "ERROR Uploading Attachment";
	break;
		
	case '15':
	$display_msg = "Delete news Attachment";
	break;
	
	case '16':
	$display_msg = "Cannot delete Attachment";
	break;
	
	
	case '28':
	$display_msg = "Error uploding member Logo";
	break;
	
	

}
echo $display_msg;
?>