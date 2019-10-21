<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once('../classes/accu_forum.class.php');

$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;

switch($mode)
{
	
	case 'edit_question':

	$question_id		=	isset( $_POST['hdn_q_id'])?$_POST['hdn_q_id']:$question_id;
	$question			=	isset( $_POST['txt_forum_title'])?$_POST['txt_forum_title']:$question;	
	$short_message		=	isset( $_POST['txa_short_message'])?$_POST['txa_short_message']:$short_message;
	$message			=	isset( $_POST['question_msg'])?$_POST['question_msg']:$message;
	$name				=	isset( $_POST['txt_name'])?$_POST['txt_name']:$name;
	$email				=	isset( $_POST['txt_email'])?$_POST['txt_email']:$email;
	$country			=	isset( $_POST['cmb_countryName'])?$_POST['cmb_countryName']:$country;
	
	if($question == '')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_forum_question.php?msg=3&qid=".$question_id."');</script>";	
	}
	elseif($message == '')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_forum_question.php?msg=4&qid=".$question_id."');</script>";	
	}	
	else
	{
		/*$isExists = Accu_Forum :: ExistsQuestion($question);
		if($isExists == true)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_forum_question.php?msg=5&qid=".$question_id."');</script>";		
		}
		elseif($isExists==false)
		{*/
			$regResult = Accu_Forum :: EditQuestion($question_id,$question,$short_message,$message);
			if($regResult==true)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_question.php?msg=6');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_forum_question.php?msg=7&qid=".$question_id."');</script>";
			}
		//}
	}
	break;
	
	case 'edit_post':

	$post_id			=	isset( $_POST['hdn_post_id'])?$_POST['hdn_post_id']:$post_id;
	$post_title			=	isset( $_POST['txt_post_title'])?$_POST['txt_post_title']:$post_title;	
	$message			=	isset( $_POST['post'])?$_POST['post']:$message;
	$name				=	isset( $_POST['txt_name'])?$_POST['txt_name']:$name;
	$email				=	isset( $_POST['txt_mail'])?$_POST['txt_mail']:$email;
	$country			=	isset( $_POST['cmb_countryName'])?$_POST['cmb_countryName']:$country;
	
	if($post_title == '')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_forum_posts.php?msg=9&pid=".$post_id."');</script>";	
	}
	elseif($message == '')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_forum_posts.php?msg=10&pid=".$post_id."');</script>";	
	}	
	else
	{
		/*$isExists = Accu_Forum :: ExistsQuestion($question);
		if($isExists == true)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_forum_question.php?msg=5&qid=".$question_id."');</script>";		
		}
		elseif($isExists==false)
		{*/
			$regResult = Accu_Forum :: EditPost($post_id,$post_title,$message,$name,$country,$email);
			if($regResult==true)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_posts.php?msg=11');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_forum_posts.php?msg=12&pid=".$post_id."');</script>";
			}
		//}
	}
	break;
	
	
	case 'update':
	
	$category_Id	=	isset( $_POST['category_Id'])?$_POST['category_Id']:$category_Id; 	
	$category		=	isset( $_POST['category'])?$_POST['category']:$category;
	$description	=	isset( $_POST['description'])?$_POST['description']:$description;	
	$active			=	isset( $_POST['active'])?$_POST['active']:$active;	
	

	
	if($category =='')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../editcategory.php?msg=2&uid=".$category_id."');</script>";
	elseif($description == '')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../editcategory.php?msg=3&uid=".$category_id."');</script>";
	else
		$isExists = Category::ExistsCategoryEdit($category,$category_Id);
		if($isExists==true)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../newcategory.php?msg=4');</script>";		
		}
		elseif($isExists==false)
		{						
			$edit = Category::EditCategory($category,$description,$active,$category_Id);
			if($edit==true)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../category_manager.php?msg=7');</script>";
				elseif($edit==false)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../category_manager.php?msg=8');</script>";
		}
	
	break;
	
	
	
	case 'delete':
	
	$question_id	=	isset( $_GET['qid'])?$_GET['qid']:$question_id;
	$deleteResults = Accu_Forum :: Deletequestion($question_id); 
	
	if($deleteResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_question.php?msg=1');</script>";
	elseif($deleteResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_question.php?msg=2');</script>";
	
	break;
	
	case 'deletepost':
	
	$post_id	=	isset( $_GET['pid'])?$_GET['pid']:$post_id;
	$deleteResults = Accu_Forum :: DeletePost($post_id); 
	
	if($deleteResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_posts.php?msg=7');</script>";
	elseif($deleteResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_posts.php?msg=8');</script>";
	
	break;
	
	case 'publish':
	
	$question_id	=	isset( $_GET['qid'])?$_GET['qid']:$question_id;
	$status			=	isset( $_GET['ststus'])?$_GET['ststus']:$status;
	$deleteResults = Accu_Forum :: UpdateQuestionStstus($question_id,$status); 
	
	if($deleteResults==true && $status ==1)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_question.php?msg=13');</script>";
	elseif($deleteResults==true && $status ==0)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_question.php?msg=14');</script>";
	
	break;
	
	case 'publishpost':
	
	$post_id	=	isset( $_GET['pid'])?$_GET['pid']:$post_id;
	$status			=	isset( $_GET['ststus'])?$_GET['ststus']:$status;
	$deleteResults = Accu_Forum :: UpdatePostStstus($post_id,$status); 
	
	if($deleteResults==true && $status == 1)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_posts.php?msg=15');</script>";
	elseif($deleteResults==true && $status == 0)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_posts.php?msg=16');</script>";
	
	break;
}	
?>