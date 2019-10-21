<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please enter Publication Type Name";
	break;
	
	case '2':
	$display_msg = "Please enter a Publication Type description";
	break;
	
	case '3':
	$display_msg = "Re-enter Catagory Name ......";
	break;
		
	case '4':
	$display_msg = "Publication Catagory already exists";
	break;

	case '5':
	$display_msg = "New Publication Type Successfully Entered";
	break;

	case '6':
	$display_msg = "Error Inserting new Publication Type";
	break;	
	
	case '7':
	$display_msg = "Delete  Publication Type";
	break;
	
	case '8':
	$display_msg = "Cnnot Delete Publication Type";
	break;
	
	case '17':
	$display_msg = "Image Uploading Error";
	break;		
	
	/*
	
	case '7':
	$display_msg = "Category information updated";
	break;	
	
	case '8':
	$display_msg = "Error updating category information";
	break;	
	
	case '9':
	$display_msg = "Category deleted";
	break;	
	
	case '10':
	$display_msg = "Error deleting category";
	break;	
	
	case '14':
	$display_msg = "New news entry created";
	break;	
	
	case '15':
	$display_msg = "Error creating new news entry";
	break;	
	
	case '16':
	$display_msg = "Title cannot be blank";
	break;	
	
	case '17':
	$display_msg = "Summery cannot be blank";
	break;	
	
	case '18':
	$display_msg = "Description cannot be blank";
	break;	
	
	case '19':
	$display_msg = "Content cannot be black";
	break;	
	
	case '20':
	$display_msg = "Newsletter Updated";
	break;	
	
	case '21':
	$display_msg = "Error Updating Newsletter";
	break;	
	
	case '22':
	$display_msg = "Newsletter Sent";
	break;	
		
	case '23':
	$display_msg = "Error Sending Newsletter";
	break;	
	
	case '24':
	$display_msg = "New agenda entry created";
	break;	
	
	case '25':
	$display_msg = "Error creating new agenda entry";
	break;	
	
	case '26':
	$display_msg = "Agenda entry deleted";
	break;	
	
	case '27':
	$display_msg = "Error deleting agenda entry";
	break;	
	
	case '28':
	$display_msg = "Agenda entry updated";
	break;	
	
	case '29':
	$display_msg = "Error updating agenda entry";
	break;	
	
	case '30':
	$display_msg = "Press content cannot be blank";
	break;
	
	case '31':
	$display_msg = "Press Updated";
	break;
	
	case '32':
	$display_msg = "Error Updating Press";
	break;
	
	case '33':
	$display_msg = "Campaign content cannot be blank";
	break;
	
	case '34':
	$display_msg = "Campaign Updated";
	break;
	
	case '35':
	$display_msg = "Error Updating Campaign";
	break;
	
	case '36':
	$display_msg = "User Name or Password cannot be blank";
	break;
	
	case '37':
	$display_msg = "User Name already exists. Please enter some other user name.";
	break;
	
	case '38':
	$display_msg = "New user created";
	break;
	
	case '39':
	$display_msg = "Error creating new user";
	break;
	
	case '40':
	$display_msg = "User profile updated";
	break;
	
	case '41':
	$display_msg = "Error updating user profile";
	break;
	
	case '42':
	$display_msg = "User Deleted";
	break;
	
	case '43':
	$display_msg = "Error deleting user";
	break;
	
	case '44':
	$display_msg = "New campaign entry created";
	break;	
	
	case '45':
	$display_msg = "Error creating new campaign entry";
	break;
	
	case '46':
	$display_msg = "Campaign entry updated";
	break;	
	
	case '47':
	$display_msg = "Error updating campaign entry";
	break;
	
	case '48':
	$display_msg = "Campaign entry deleted";
	break;	
	
	case '49':
	$display_msg = "Error deleting campaign entry";
	break;	
	
	case '50':
	$display_msg = "New press entry created";
	break;	
	
	case '51':
	$display_msg = "Error creating new press entry";
	break;
	
	case '52':
	$display_msg = "Press entry updated";
	break;	
	
	case '53':
	$display_msg = "Error updating press entry";
	break;
	
	case '54':
	$display_msg = "Press entry deleted";
	break;	
	
	case '55':
	$display_msg = "Error deleting press entry";
	break;*/

}
echo $display_msg;
?>