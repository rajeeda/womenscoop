<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please enter an event name";
	break;
	
	case '2':
	$display_msg = "Please enter event start date";
	break;
	
	case '3':
	$display_msg = "Country name required, Please select country";
	break;
		
	case '4':
	$display_msg = "Event already exists";
	break;

	case '5':
	$display_msg = "New event created";
	break;

	case '6':
	$display_msg = "Error creating new event";
	break;		
	
	case '7':
	$display_msg = "Event profile updated";
	break;	
	
	case '8':
	$display_msg = "Error updating event profile";
	break;	
	
	case '9':
	$display_msg = "Event deleted";
	break;	
	
	case '10':
	$display_msg = "Error deleting event";
	break;	
	
	case '11':
	$display_msg = "Add Event To Home Page";
	break;	
	
	case '12':
	$display_msg = "Cannot Add Event to Home Page";
	break;	
	
	case '13':
	$display_msg = "Added Event Attachment";
	break;	
	
	case '14':
	$display_msg = "Cannot Add Event Attachment";
	break;	
	
	case '15':
	$display_msg = "Attachment Deleted Successfully";
	break;	
	
	case '16':
	$display_msg = "Cannot Delete Attachment";
	break;	
	case '28':
	$display_msg = "Error uploding member Logo";
	break;

}
echo $display_msg;
?>