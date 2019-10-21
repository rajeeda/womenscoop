<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'board_member_folder.class.php');
require_once('upload_controller.php');

$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;

$file_path					= "../../upload_images/Publication/";
$file_path_thumb			= "../../upload_images/Publication/thumb/";

$file_p						='';
$up_image 					='';

switch($mode)
{
	
	case 'addpub_type':

	$pub_type_name				=	isset($_POST['public_cat_type'])?$_POST['public_cat_type']:$pub_type_name;
	$pub_desc					=	isset($_POST['pub_desc'])?$_POST['pub_desc']:$pub_desc;
	$pub_type_image				=	isset($_FILES['pub_cat_image'])?$_FILES['pub_cat_image']:$pub_type_image;
	$pub_act					=	isset($_POST['cmb_act'])?$_POST['cmb_act']:$pub_act;
	$dd_date					=	date('Y-m-d');
	$update_date				=	date('Y-m-d');
	$file_name					= 	'pub_cat_image';
	$page						= 	"new_board_member_folder.php";
	 
	 
	if($pub_type_name=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_board_member_folder.php?msg=1');</script>";	
	}
	elseif($pub_desc == '')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_board_member_folder.php?msg=2');</script>";
	}
	else
	{
		$isExists = BoardMemberFolder::ExistsPub_type($pub_type_name);
		if($isExists==true)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_board_member_folder.php?msg=4');</script>";
		}
		elseif($isExists==false)
		{
			
			if($_FILES['pub_cat_image']['name'] !=''){
			$up_image = File_upload :: Image_upload('',$file_path,$file_path_thumb,$pub_type_image,$file_name,$page,$file_p);
			}
			$regResult = BoardMemberFolder::Add_new_pub_type($pub_type_name,$pub_desc,$up_image,$pub_act,$dd_date,$update_date);
			
			if($regResult==true)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../bord_member_folder.php?msg=5');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_board_member_folder.php?msg=6');</script>";
			}
		}
	}
	break;
	
	
	
	
	case 'edit_pub_type':
	
		$pub_cat_id					=	isset($_POST['hdn_pub_type_id'])?$_POST['hdn_pub_type_id']:$pub_cat_id;
		$pub_type_name				=	isset($_POST['public_cat_type'])?$_POST['public_cat_type']:$pub_type_name;
		$pub_desc					=	isset($_POST['pub_desc'])?$_POST['pub_desc']:$pub_desc;
		$pub_type_image				=	isset($_FILES['pub_cat_image'])?$_FILES['pub_cat_image']:$pub_type_image;
		$pub_act					=	isset($_POST['cmb_act'])?$_POST['cmb_act']:$pub_act;
		$pub_img					=	isset($_POST['hdn_pub_type_img'])?$_POST['hdn_pub_type_img']:$pub_img;
		$dd_date					=	date('Y-m-d');
		$update_date				=	date('Y-m-d');
		$file_name					= 	'pub_cat_image';
		$page						= 	"edit_board_member_folder.php";

		$file_p	 					=	$pub_img;

		if($pub_type_name=='')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_board_member_folder.php?msg=1');</script>";	
		}
		elseif($pub_desc == '')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_board_member_folder.php?msg=2');</script>";
		}
		else
		{
			//$isExists = BoardMemberFolder::ExistsPub_type($pub_type_name);
			$isExists = false;	
			if($isExists==true)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_board_member_folder.php?msg=4');</script>";
			}
			elseif($isExists==false)
			{
				if($_FILES['pub_cat_image']['name'] !=''){
					$up_image = File_upload :: Image_upload($pub_cat_id,$file_path,$file_path_thumb,$pub_type_image,$file_name,$page,$file_p); 
					}
				else
				{
					$up_image = $pub_img; 
				}
				$regResult = BoardMemberFolder::Update_pub_type($pub_cat_id,$pub_type_name,$pub_desc,$up_image,$pub_act,$dd_date,$update_date);
			
				if($regResult==true)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../bord_member_folder.php?msg=5');</script>";	
		
				}
				elseif($regResult==false)
				{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_board_member_folder.php?msg=6');</script>";
				}
			}
		}
	break;
	
	case 'delete':
	
	$pub_cat_id	=	isset( $_GET['pubtypeid'])?$_GET['pubtypeid']:$pub_cat_id;
	
	$flag_name  = BoardMemberFolder :: GetPublicationtype($pub_cat_id);
	if($flag_name['pub_cat_image'] !=''){
	$imgremove  = File_upload :: RemoveImage($file_path,$file_path_thumb,$flag_name['pub_cat_image']);
	}
	
	$deleteResults = BoardMemberFolder::DeletepublicationType($pub_cat_id); 
	
	if($deleteResults==true)
	{
		//$up_image = File_upload :: RemoveUpImages($path,$file_p,$path_tumb);
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../bord_member_folder.php?msg=7');</script>";
	}
	elseif($deleteResults==false)
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../bord_member_folder.php?msg=8');</script>";
	}
	break;
	
	
	
	
}	
?>