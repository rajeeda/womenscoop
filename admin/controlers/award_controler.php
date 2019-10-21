<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'Award.class.php');
require_once('upload_controller.php');


$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;
$file_path					=DOC_ROOT."/upload_images/Country_flag/";
$file_path_thumb			=DOC_ROOT."/upload_images/Country_flag/thumb/"; 

$file_p						='';
$up_image 					='';

switch($mode)
{
	
	case 'addaward':

	$awd_year					=	isset($_POST['awd_year'])?$_POST['awd_year']:'';
	$country_name				=	isset($_POST['txt_country_name'])?$_POST['txt_country_name']:'';
	$txt_catagory_name			=	isset($_POST['txt_catagory_name'])?$_POST['txt_catagory_name']:'';
	$txt_awd_name				=	isset($_POST['txt_awd_name'])?$_POST['txt_awd_name']:'';
	$active						=	isset($_POST['active'])?$_POST['active']:'';

		//$added_date 				=   date('Y-m-d');
	$Add_date 				=   date('Y-m-d');
	
		 
	if($txt_awd_name=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_award.php?msg=1');</script>";	
	}
	else
	{
			$regResult = Award::NewAward($awd_year,$country_name,$txt_catagory_name,$txt_awd_name,$active,$Add_date);
			
			if($regResult==true)
			{ 
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../award.php?msg=5');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_award.php?msg=6');</script>";
			}
		
	}
	break;

	case 'editaward':
		$award_id					=	isset($_REQUEST['hdn_awd_id'])?$_REQUEST['hdn_awd_id']:'';
		$awd_year					=	isset($_POST['awd_year'])?$_POST['awd_year']:'';
		$country_name				=	isset($_POST['txt_country_name'])?$_POST['txt_country_name']:'';
		$txt_catagory_name			=	isset($_POST['txt_catagory_name'])?$_POST['txt_catagory_name']:'';
		$txt_awd_name				=	isset($_POST['txt_awd_name'])?$_POST['txt_awd_name']:'';
		$active						=	isset($_POST['active'])?$_POST['active']:'';

		//$added_date 				=   date('Y-m-d');
		$updated_date 				=   date('Y-m-d');
		
		
	if($txt_awd_name =='')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_award.php?award_id=".$award_id."&msg=2');</script>";
	else{
		$isExists = true;//Country::ExistsCountry($country_name);
		if($isExists==true)
		{
			
			$edit = Award::EditAward($award_id,$awd_year,$country_name,$txt_catagory_name,$txt_awd_name,$active,$updated_date);
			if($edit==true)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../award.php?msg=7');</script>";
				elseif($edit==false)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_award.php.php?award_id=".$award_id."&msg=8');</script>";
							
		}
		elseif($isExists==false)
		{						
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_award.php.php?award_id=".$award_id."&msg=4');</script>";
		}
	}
	break;

	case 'delete':
	
	$award_id	=	isset( $_GET['award_id'])?$_GET['award_id']:$award_id;
	
	$deleteResults = Award::Deleteaward($award_id); 
	
	if($deleteResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../award.php?msg=9');</script>";
	elseif($deleteResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../award.php?msg=10');</script>";
	
	break;
	
	case 'editostructure':
		$country_id					='1';
		$os_name					=	isset($_POST['os_name'])?$_POST['os_name']:'';
		$os_flag				 	=	isset($_FILES['up_os_flag'])?$_FILES['up_os_flag']:$os_flag;	
		$c_flag						=	isset($_POST['hdn_os_flag'])?$_POST['hdn_os_flag']:'';

		//$added_date 				=   date('Y-m-d');
		$updated_date 				=   date('Y-m-d');
		
		$file_name					= 'up_os_flag';
		$page						= "o_structure.php";
		$file_path					=DOC_ROOT."/assets/img/causes/";
		$file_path_thumb			=DOC_ROOT."/upload_images/Country_flag/thumb/"; 
			
		
	if($os_name =='')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../o_structure.php?msg=2');</script>";
	else{
		$isExists = true;//Country::ExistsCountry($country_name);
		if($isExists==true)
		{
			if($_FILES['up_os_flag']['name'] =='')
			{
				$up_image = $c_flag;
			}
			else
			{
				$up_image = File_upload::Image_upload($country_id,$file_path,$file_path_thumb,$os_flag,$file_name,$page,$c_flag);
			}
			if($up_image){
				$edit = Award::Editos($os_name,$up_image,$updated_date);
			if($edit==true)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../o_structure.php?msg=17');</script>";
				elseif($edit==false)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../o_structure.php?msg=8');</script>";
					
			}
					
		}
		elseif($isExists==false)
		{						
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../o_structure.php?msg=4');</script>";
		}
	}
	break;
	
}	
?>