<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'Testimonials.class.php');
require_once('upload_controller.php');


$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;
$file_path					=DOC_ROOT."/upload_images/Country_flag/";
$file_path_thumb			=DOC_ROOT."/upload_images/Country_flag/thumb/"; 

$file_p						='';
$up_image 					='';

switch($mode)
{
	
	case 'newtesy':
		$txt_testy_name				=	isset($_POST['txt_testy_name'])?$_POST['txt_testy_name']:'';
		$txt_tesy_writer			=	isset($_POST['txt_tesy_writer'])?$_POST['txt_tesy_writer']:'';
		$testy_name				=	isset($_POST['testy_name'])?$_POST['testy_name']:'';
		$txt_testy_name=addslashes($txt_testy_name);
		$txt_tesy_writer=addslashes($txt_tesy_writer);
		$testy_name	=addslashes($testy_name);

		//$added_date 				=   date('Y-m-d');
		$updated_date 				=   date('Y-m-d');
		
		
	if($txt_testy_name =='' || $testy_name=='')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_testy.php?msg=2');</script>";
	else{
		$isExists = true;//Country::ExistsCountry($country_name);
		if($isExists==true)
		{
			
			$insert = Testimonials::Addtesy($txt_testy_name,$txt_tesy_writer,$testy_name);
			if($insert==true)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../testimonials.php?msg=7');</script>";
				elseif($edit==false)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_testy.php?msg=8');</script>";
							
		}
		elseif($isExists==false)
		{						
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_testy.php?msg=4');</script>";
		}
	}
	break;

	case 'edittesy':
		$tesy_id					=	isset($_REQUEST['hdn_testy_id'])?$_REQUEST['hdn_testy_id']:'';
		$txt_testy_name				=	isset($_POST['txt_testy_name'])?$_POST['txt_testy_name']:'';
		$txt_tesy_writer			=	isset($_POST['txt_tesy_writer'])?$_POST['txt_tesy_writer']:'';
		$testy_name				=	isset($_POST['testy_name'])?$_POST['testy_name']:'';
		$txt_testy_name=addslashes($txt_testy_name);
		$txt_tesy_writer=addslashes($txt_tesy_writer);
		$testy_name	=addslashes($testy_name);

		//$added_date 				=   date('Y-m-d');
		$updated_date 				=   date('Y-m-d');
		
		
	if($txt_testy_name =='')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edittesty.php?testy_id=".$tesy_id."&msg=2');</script>";
	else{
		$isExists = true;//Country::ExistsCountry($country_name);
		if($isExists==true)
		{
			
			$edit = Testimonials::Edittesy($tesy_id,$txt_testy_name,$txt_tesy_writer,$testy_name);
			if($edit==true)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../testimonials.php?msg=7');</script>";
				elseif($edit==false)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edittesty.php?testy_id=".$tesy_id."&msg=8');</script>";
							
		}
		elseif($isExists==false)
		{						
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edittesty.php?testy_id=".$tesy_id."&msg=4');</script>";
		}
	}
	break;

	case 'editnetwotk':
		$txt_mem				=	isset($_POST['txt_mem'])?$_POST['txt_mem']:'';
		$txt_coop				=	isset($_POST['txt_coop'])?$_POST['txt_coop']:'';
		$txt_asset				=	isset($_POST['txt_asset'])?$_POST['txt_asset']:'';
		$txt_volunteers			=	isset($_POST['txt_volunteers'])?$_POST['txt_volunteers']:'';
		$txt_employee			=	isset($_POST['txt_employee'])?$_POST['txt_employee']:'';

		//$added_date 				=   date('Y-m-d');
		$updated_date 				=   date('Y-m-d');
		
		
	if($txt_mem =='' || $txt_coop=='' || $txt_asset=='' || $txt_volunteers=='' )
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../network.php?msg=19');</script>";
	else{
		$isExists = true;//Country::ExistsCountry($country_name);
		if($isExists==true)
		{
			
			$edit = Testimonials::Editnetwork($txt_mem,$txt_coop,$txt_asset,$txt_volunteers,$txt_employee);
			if($edit==true)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../network.php?msg=17');</script>";
				elseif($edit==false)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../network.php?msg=18');</script>";
							
		}
		elseif($isExists==false)
		{						
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../network.php?msg=4');</script>";
		}
	}
	break;

	case 'addpartners':
	
	$partner_name				=	isset( $_POST['txt_partner_name'])?$_POST['txt_partner_name']:'';
	$partner_url				=	isset( $_POST['txt_partner_url'])?$_POST['txt_partner_url']:'';
	$partner_logo				=	isset( $_FILES['up_partner_logo'])?$_FILES['up_partner_logo']:$country_flag;	

	$added_date 				=   date('Y-m-d');
	$updated_date 				=   date('Y-m-d');
	
	$file_path					= "../../assets/img/team/";
	$file_path_thumb			= "../../upload_images/Country_flag/thumb/"; 
	
	$file_name					= 'up_partner_logo';
	$page						= "partners.php";
	
	//echo $_FILES['up_country_flag']['type']."<br>"; 
	
		 
	if($partner_url=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_partner.php?msg=20');</script>";	
	}
	elseif($partner_logo =='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_partner.php?msg=21');</script>";	
	}
	else
	{
		if($_FILES['up_partner_logo']['name'] !=''){
				$up_image = File_upload:: Image_upload('',$file_path,$file_path_thumb,$partner_logo,$file_name,$page,$file_p);
				}
			//echo $country_name; exit;
			$regResult = Testimonials::New_partner($partner_name,$partner_url,$up_image);
			
			if($regResult==true)
			{
			    
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../partners.php?msg=22');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_partner.php?msg=23');</script>";
			}
		
	}
	break;

	case 'editpartners':

	$partner_id					=	isset($_REQUEST['hdn_partner_id'])?$_REQUEST['hdn_partner_id']:'';
	$partner_name				=	isset( $_POST['txt_partner_name'])?$_POST['txt_partner_name']:'';
	$partner_url				=	isset( $_POST['txt_partner_url'])?$_POST['txt_partner_url']:'';
	$partner_logo				=	isset( $_FILES['up_partner_logo'])?$_FILES['up_partner_logo']:$partner_logo;
	$c_logo						=	isset($_POST['hdn_partner_logo'])?$_POST['hdn_partner_logo']:'';	

	$added_date 				=   date('Y-m-d');
	$updated_date 				=   date('Y-m-d');
	
	$file_path					= "../../assets/img/team/";
	$file_path_thumb			= "../../upload_images/Country_flag/thumb/"; 
	
	$file_name					= 'up_partner_logo';
	$page						= "partners.php";
	
	//echo $_FILES['up_country_flag']['type']."<br>"; 
		 
	if($partner_url=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_partner.php?msg=21');</script>";	
	}
	else
	{
		if($_FILES['up_partner_logo']['name'] =='')
			{
				$up_image = $c_logo;
			}
			else
			{
				$up_image = File_upload:: Image_upload($hdn_partner_id,$file_path,$file_path_thumb,$partner_logo,$file_name,$page,$c_logo);
			}
			$regResult = Testimonials::Edit_partner($partner_id,$partner_name,$partner_url,$up_image);
			
			if($regResult==true)
			{
			    
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../partners.php?msg=24&partner_id=".$partner_id."');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_partner.php?msg=23');</script>";
			}
		
	}
	break;

	case 'delete':
	
	$testy_id	=	isset( $_GET['testy_id'])?$_GET['testy_id']:$testy_id;
	
	$deleteResults = Testimonials::Deletetesty($testy_id); 
	
	if($deleteResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../testimonials.php?msg=9');</script>";
	elseif($deleteResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../testimonials.php?msg=10');</script>";
	
	break;

	case 'deletepartner':
	
	$partner_id	=	isset( $_GET['partner_id'])?$_GET['partner_id']:$partner_id;
	
	$deleteResults = Testimonials::Deletepartner($partner_id); 
	
	if($deleteResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../partners.php?msg=26');</script>";
	elseif($deleteResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../partners.php?msg=25');</script>";
	
	break;
	
}	
?>