<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please select member type";
	break;
	
	case '2':
	$display_msg = "Please enter member name";
	break;
	
	case '3':
	$display_msg = "Please Select your country";
	break;
		
	case '4':
	$display_msg = "Please enter your e-mail address";
	break;
	
	case '5':
	$display_msg = "Member already exists";
	break;

	case '6':
	$display_msg = "New member created";
	break;

	case '7':
	$display_msg = "Error creating new Member";
	break;	
	
	case '8':
		$display_msg = "Please enter Street1 name";
	break;	
	
	case '9':
		$display_msg = "Please enter Street2 name";
	break;	
	
	case '10':
		$display_msg = "Enter your city";
	break;	
	
	case '11':
		$display_msg = "Enter your province";
	break;	
	
	case '12':
		$display_msg = "Enter your postal code";
	break;	
	
	case '13':
		$display_msg = "Enter your phone no";
	break;
	
	case '14':
		$display_msg ="Successfully insert member contact details";
	break;	
	
	case '15':
		$display_msg ="Error insert in new member contact details";
	break;
	
	case '16':
		$display_msg ="Select title";
	break;
	
	case '17_a':
		$display_msg ="Select Board Of Director catagory number";
	break;
	
	case '18':
		$display_msg ="Enter Board Of Director catagory name";
	break;
	
	case '19':
		$display_msg ="Successfully Added staff member";
	break;
	
	case '20':
		$display_msg ="Error Add staff member";
	break;
	
	case '21':
	$display_msg = "Member email address already exists";
	break;
	
	case '22':
	$display_msg = "Successfully updated member details";
	break;
	
	case '23':
	$display_msg = "Error update member details";
	break;
	
	case '24':
	$display_msg = "Successfully updated staff member details";
	break;
	
	case '25':
	$display_msg = "Error update staff member details";
	break;
	
	case '26':
	$display_msg = "Press entry deleted";
	break;	
	
	case '27':
	$display_msg = "Error deleting press entry";
	break;
	
	case '28':
	$display_msg = "Error uploding member Logo";
	break;
	
	case '29':
	$display_msg = "Please Insert Contact person Name";
	break;
	
	case '30':
	$display_msg = "Contact person details Successfuly Inserted";
	break;
	
	case '31':
	$display_msg = "Error Inserting Contact memeber details";
	break;
	
	case '32':
	$display_msg = "Please Select Title";
	break;
	
	case '33':
	$display_msg = "Please Insert Contact person Name";
	break;
	
	case '34':
	$display_msg = "Please Insert Regulator Name";
	break;
	
	case '35':
	$display_msg = "Regulator details Successfuly Inserted";
	break;
	
	case '36':
	$display_msg = "Error Inserting Regulator details";
	break;
	
	case '37':
	$display_msg = "Please Insert Contact person Name";
	break;
	
	case '38':
	$display_msg = "Deleted Contact Person details";
	break;
	
	case '39':
	$display_msg = "Cannot Delete Contact Person details";
	break;
	
	case '40':
	$display_msg = "Successfully Updated Contact Person details";
	break;
	
	case '41':
	$display_msg = "Cannot Update Contact Person details";
	break;
	
	/*case '8':
	$display_msg = "User profile updated";
	break;	
	
	case '9':
	$display_msg = "Error updating user profile";
	break;	
	
	case '10':
	$display_msg = "User deleted";
	break;	
	
	case '11':
	$display_msg = "Error deleting user";
	break;	
	
	/*case '14':
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