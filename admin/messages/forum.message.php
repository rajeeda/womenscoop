<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	case '1':
	$display_msg = "Question Delete Success";
	break;
	
	case '2':
	$display_msg = "Cannot Delete this Question";
	break;
	
	case '3':
	$display_msg = "Please Enter Question Title";
	break;
	
	case '4':
	$display_msg = "Please Enter a Question Description";
	break;
	
	case '5':
	$display_msg = "Question is Already Exists";
	break;
	
	case '6':
	$display_msg = "Question Successfully Update";
	break;
	
	case '7':
	$display_msg = "Delete Post Successfuly";
	break;

	case '8':
	$display_msg = "Cannot Delete This Post";
	break;

	case '9':
	$display_msg = "Please Enter a Post Title";
	break;		
	
	case '10':
	$display_msg = "Please Enter a post Description";
	break;	
	
	case '11':
	$display_msg = "Post Details Successfuly Updated";
	break;	
	
	case '12':
	$display_msg = "Cannot Update Post Details";
	break;	
	
	case '13':
	$display_msg = "Question Publish Successfuly";
	break;	
	
	case '14':
	$display_msg = "Question Unpublish Successfuly";
	break;	
	
	case '15':
	$display_msg = "Post Publish Successfuly";
	break;	
	
	case '16':
	$display_msg = "Post Unpublish Successfuly";
	break;	

}
echo $display_msg;
?>