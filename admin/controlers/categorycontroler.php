<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'category.class.php');

$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;

switch( $mode)
{
	
	case 'addcat':

	$category		=	isset( $_POST['category'])?$_POST['category']:$category;
	$description	=	isset( $_POST['description'])?$_POST['description']:$description;	
	$active			=	isset( $_POST['active'])?$_POST['active']:$active;
	$description=addslashes($description);
	if($category=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../newcategory.php?msg=1');</script>";	
	}
	elseif($description=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../newcategory.php?msg=2');</script>";	
	}	
	else
	{
		$isExists = Category::ExistsCategory($category);
		if($isExists==true)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../newcategory.php?msg=4');</script>";		
		}
		elseif($isExists==false)
		{
			$regResult = Category::NewCategory($category,$description,$active);
			if($regResult==true)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../category_manager.php?msg=5');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../category_manager.php?msg=6');</script>";
			}
		}
	}
	break;
	
	case 'update':
	
	$category_Id	=	isset( $_POST['category_Id'])?$_POST['category_Id']:$category_Id; 	
	$category		=	isset( $_POST['category'])?$_POST['category']:$category;
	$description	=	isset( $_POST['description'])?$_POST['description']:$description;	
	$active			=	isset( $_POST['active'])?$_POST['active']:$active;	
	$description=addslashes($description);

	
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
	
	$category_Id	=	isset( $_GET['category_Id'])?$_GET['category_Id']:$catid;
	$deleteResults = Category::DeleteCategory($category_Id); 
	
	if($deleteResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../category_manager.php?msg=9');</script>";
	elseif($deleteResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../category_manager.php?msg=10');</script>";
	
	break;
	
}	
?>