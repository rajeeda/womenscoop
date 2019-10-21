<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please enter a Testimonial Name information";
	break;
	
	case '2':
	$display_msg = "Please enter a Testimonial details correctly";
	break;
	
	case '3':
	$display_msg = "Re-enter Testimonial ......";
	break;
		
	case '4':
	$display_msg = "Testimonial Name already exists";
	break;

	case '5':
	$display_msg = "New Testimonial Added";
	break;

	case '6':
	$display_msg = "Creating new Testimonial";
	break;		
	
	case '7':
	$display_msg = "Testimonial information updated";
	break;	
	
	case '8':
	$display_msg = "Error while updating information";
	break;	
	
	case '9':
	$display_msg = "Testimonial information deleted";
	break;	
	
	case '10':
	$display_msg = "Error deleting category";
	break;	
	
	case '11':
	$display_msg = "New Testimonial Added";
	break;
	
	case '12':
	$display_msg = "Error creating new Testimonial ";
	break;		
	
	case '13':
	$display_msg = "Error Loading Testimonial ID";
	break;
	
	case '14':
	$display_msg = "Testimonial Profile Details Already exists";
	break;
	
	case '15':
	$display_msg = "Testimonial information updated";
	break;
	
	case '16':
	$display_msg = "Try again with less size of images. Image may be no more than 800 x 800 pixels";
	break;
	
	case '17':
	$display_msg = "Information updated";
	break;

	case '18':
	$display_msg = "Error in updating";
	break;

	case '19':
	$display_msg = "Please enter network information";
	break;

	case '20':
	$display_msg = "Please enter development partner URL";
	break;
	
	case '21':
	$display_msg = "Please enter development partner Logo";
	break;
	
	case '22':
	$display_msg = "successfully added new partner";
	break;
	
	case '23':
	$display_msg = "Error in adding details";
	break;
	
	case '24':
	$display_msg = "Information updated";
	break;

	case '25':
	$display_msg = "Error in deleting";
	break;

	case '26':
	$display_msg = "successfully deleted";
	break;
	

}
echo $display_msg;
?>