<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'Award.class.php');
require_once('upload_controller.php');
require_once(ADMIN_PATH.'classes/Core_val.class.php');


$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;
$file_path					=DOC_ROOT."/upload_images/Country_flag/";
$file_path_thumb			=DOC_ROOT."/upload_images/Country_flag/thumb/"; 

$file_p						='';
$up_image 					='';

switch($mode)
{
	
	case 'addvalue':

	$title						=	isset($_POST['core_title'])?$_POST['core_title']:'';
	$description				=	isset($_POST['core_name'])?$_POST['core_name']:'';
	$title=addslashes($title);
	$description=addslashes($description);

		//$added_date 				=   date('Y-m-d');
	$add_date 				=   date('Y-m-d');
		
		
	if($description =='' || $title=='')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_core_val.php?core_id=".$core_id."&msg=1');</script>";
	else{
		$isExists = true;//Country::ExistsCountry($country_name);
		if($isExists==true)
		{
			
			$edit = Core_val::AddcoreVal($title,$description,$add_date);
			if($edit==true)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../core_value.php?msg=2');</script>";
				elseif($edit==false)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_core_val.php.php?core_id=".$core_id."&msg=3');</script>";
							
		}
		elseif($isExists==false)
		{						
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_core_val.php?core_id=".$core_id."&msg=4');</script>";
		}
	}
	break;

	case 'editvalue':
		$core_id					=	isset($_REQUEST['hdn_core_id'])?$_REQUEST['hdn_core_id']:'';
		$title						=	isset($_POST['core_title'])?$_POST['core_title']:'';
		$description				=	isset($_POST['core_name'])?$_POST['core_name']:'';
		 $title=addslashes($title);
		  $description=addslashes($description);

		//$added_date 				=   date('Y-m-d');
		$updated_date 				=   date('Y-m-d');
		
		
	if($description =='' || $title=='')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_core_val.php?core_id=".$core_id."&msg=1');</script>";
	else{
		$isExists = true;//Country::ExistsCountry($country_name);
		if($isExists==true)
		{
			
			$edit = Core_val::EditcoreVal($core_id,$title,$description,$updated_date);
			if($edit==true)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../core_value.php?msg=5');</script>";
				elseif($edit==false)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_core_val.php.php?core_id=".$core_id."&msg=6');</script>";
							
		}
		elseif($isExists==false)
		{						
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_core_val.php?core_id=".$core_id."&msg=4');</script>";
		}
	}
	break;

	case 'editimg':
		$img_id			 			=	isset($_REQUEST['hdn_img_id'])?$_REQUEST['hdn_img_id']:'';
		$up_img1					=	isset($_FILES['up_img1'])?$_FILES['up_img1']:$up_img1;	
		$c_img1						=	isset($_POST['hdn_img1'])?$_POST['hdn_img1']:'';
		$up_img2					=	isset($_FILES['up_img2'])?$_FILES['up_img2']:$up_img2;	
		$c_img2						=	isset($_POST['hdn_img2'])?$_POST['hdn_img2']:'';
		$up_img3					=	isset($_FILES['up_img3'])?$_FILES['up_img3']:$up_img3;	
		$c_img3						=	isset($_POST['hdn_img3'])?$_POST['hdn_img3']:'';

		//$added_date 				=   date('Y-m-d');
		$updated_date 				=   date('Y-m-d');
		
		$file_name1					= 'up_img1';
		$file_name2					= 'up_img2';
		$file_name3					= 'up_img3';
		$page						= "edit_country.php";
		$file_path					=DOC_ROOT."/assets/img/faq/";
		$file_path_thumb			=DOC_ROOT."/assets/img/faq/thumb/";
		
			
		if($_FILES['up_img1']['name'] =='')
			{
				$up_image1 = $c_img1;
			}
			else
			{
				$up_image1 = File_upload:: Image_upload($img_id,$file_path,$file_path_thumb,$up_img1,$file_name1,$page,$c_img1);
			}
			if($_FILES['up_img2']['name'] =='')
			{
				$up_image2 = $c_img2;
			}
			else
			{
				$up_image2 = File_upload:: Image_upload($img_id,$file_path,$file_path_thumb,$up_img2,$file_name2,$page,$c_img2);
			}
			if($_FILES['up_img3']['name'] =='')
			{
				$up_image3 = $c_img3;
			}
			else
			{
				$up_image3 = File_upload:: Image_upload($img_id,$file_path,$file_path_thumb,$up_img3,$file_name3,$page,$c_img3);
			}
			$edit =Core_val::Editcore_img($img_id,$up_image1,$up_image2,$up_image3,$updated_date);
			if($edit==true)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../core_value.php?msg=9&img_id=".$img_id."');</script>";
				elseif($edit==false)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../core_value.php?msg=10&img_id=".$img_id."');</script>";
	
	break;

	case 'delete':
	
	$core_id	=	isset( $_GET['core_id'])?$_GET['core_id']:$core_id;
	
	$deleteResults = Core_val::Deletecoreval($core_id); 
	
	if($deleteResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../core_value.php?msg=12');</script>";
	elseif($deleteResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../core_value.php?msg=13');</script>";
	
	break;
	
	
}	
?>