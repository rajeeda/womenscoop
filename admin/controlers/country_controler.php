<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'country.class.php');
require_once('upload_controller.php');


$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;
$file_path					=DOC_ROOT."/upload_images/Country_flag/";
$file_path_thumb			=DOC_ROOT."/upload_images/Country_flag/thumb/"; 

$file_p						='';
$up_image 					='';

switch($mode)
{
	
	case 'addcountry':

	$country_name				=	isset( $_POST['txt_country_name'])?$_POST['txt_country_name']:'';
	$country_flag				=	isset( $_FILES['up_country_flag'])?$_FILES['up_country_flag']:$country_flag;	

	$added_date 				=   date('Y-m-d');
	$updated_date 				=   date('Y-m-d');
	
	//$file_path					= "../../upload_images/Country_flag/";
	//$file_path_thumb			= "../../upload_images/Country_flag/thumb/"; 
	
	$file_name					= 'up_country_flag';
	$page						= "new_country.php";
	
	//echo $_FILES['up_country_flag']['type']."<br>"; 
	
		 
	if($country_name=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_country.php?msg=1');</script>";	
	}
	elseif($country_flag =='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_country.php?msg=17');</script>";	
	}
	else
	{
		$isExists = Country::ExistsCountry($country_name);
		if($isExists==true)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_country.php?msg=4');</script>";		
		}
		elseif($isExists==false)
		{
			if($_FILES['up_country_flag']['name'] !=''){
				$up_image = File_upload :: Image_upload('',$file_path,$file_path_thumb,$country_flag,$file_name,$page,$file_p);
				}
			//echo $country_name; exit;
			$regResult = Country::New_Country($country_name,$up_image,$added_date,$updated_date);
			
			if($regResult==true)
			{
			 
				$country_data = Country :: ExistsCountry($country_name);
				$country_id = $country_data['country_id'];			
                    
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../add_country_profile.php?msg=5&countryid=".$country_id."');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_country.php?msg=6');</script>";
			}
		}
	}
	break;
	
	case 'addprofile':
	
		$country_id					=	isset( $_POST['country_id'])?$_POST['country_id']:$country_id;
		$population_milion			=	isset( $_POST['txt_population_milion'])?$_POST['txt_population_milion']:$population_milion;
		$population_growth_per_year	=	isset( $_POST['txt_population_growth_per_year'])?$_POST['txt_population_growth_per_year']:$population_growth_per_year;
		$gdp_bilion					=	isset( $_POST['txt_gdp_bilion'])?$_POST['txt_gdp_bilion']:$gdp_bilion;
		$gni						=	isset( $_POST['txt_gni'])?$_POST['txt_gni']:$gni;
		$exchange_rate				=	isset( $_POST['txt_exchange_rate'])?$_POST['txt_exchange_rate']:$exchange_rate;
		$cu_present					=	isset( $_POST['txt_cu_present'])?$_POST['txt_cu_present']:$cu_present;
	
		$added_date 				=   date('Y-m-d');
		$updated_date 				=   date('Y-m-d');

	
	//$country_flag = $_FILES['up_country_flag'];
 	//echo $country_flag."xcxc"; exit;
		 
		if($country_id=='')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../add_country_profile.php?msg=13');</script>";	
		}
		else
		{
			$isExists = Country::GetCountry_Profile($country_id);
			if($isExists==true)
			{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../add_country_profile.php?msg=14');</script>";		
			}
			elseif($isExists==false)
			{
			//echo $country_name; exit;
				$regResult = Country::New_Country_Profile($country_id,$population_milion,$population_growth_per_year,$gdp_bilion,$gni,$exchange_rate,$cu_present,$added_date,$updated_date);
			
				if($regResult==true)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../country.php?msg=11');</script>";	
	
				}
				elseif($regResult==false)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../add_country_profile.php?msg=12');</script>";
				}
			}
		}
	
	break;
	
	case 'editcountry':
		$country_id					=	isset($_REQUEST['hdn_country_id'])?$_REQUEST['hdn_country_id']:'';
		$country_name				=	isset($_POST['txt_country_name'])?$_POST['txt_country_name']:'';
		$country_flag				=	isset($_FILES['up_country_flag'])?$_FILES['up_country_flag']:$country_flag;	
		$c_flag						=	isset($_POST['hdn_country_flag'])?$_POST['hdn_country_flag']:'';

		//$added_date 				=   date('Y-m-d');
		$updated_date 				=   date('Y-m-d');
		
		$file_name					= 'up_country_flag';
		$page						= "edit_country.php";
		
			
		
	if($country_name =='')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_country.php?msg=2&country_id=".$country_id."');</script>";
	else{
		$isExists = true;//Country::ExistsCountry($country_name);
		if($isExists==true)
		{
			if($_FILES['up_country_flag']['name'] =='')
			{
				$up_image = $c_flag;
			}
			else
			{
				$up_image = File_upload:: Image_upload($country_id,$file_path,$file_path_thumb,$country_flag,$file_name,$page,$c_flag);
			}
			$edit = Country::EditCountry($country_id,$country_name,$up_image,$updated_date);
			if($edit==true)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_country_profile.php?msg=7&country_id=".$country_id."');</script>";
				elseif($edit==false)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_country.php?msg=8&country_id=".$country_id."');</script>";
							
		}
		elseif($isExists==false)
		{						
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_country.php?msg=4&country_id=".$country_id."');</script>";
		}
	}
	break;
	
	case 'editprofile':
		$country_id					=	isset($_REQUEST['hdn_country_id'])?$_REQUEST['hdn_country_id']:'';
		$population_milion			=	isset( $_POST['txt_population_milion'])?$_POST['txt_population_milion']:$population_milion;
		$population_growth_per_year	=	isset( $_POST['txt_population_growth_per_year'])?$_POST['txt_population_growth_per_year']:$population_growth_per_year;
		$gdp_bilion					=	isset( $_POST['txt_gdp_bilion'])?$_POST['txt_gdp_bilion']:$gdp_bilion;
		$gni						=	isset( $_POST['txt_gni'])?$_POST['txt_gni']:$gni;
		$exchange_rate				=	isset( $_POST['txt_exchange_rate'])?$_POST['txt_exchange_rate']:$exchange_rate;
		$cu_present					=	isset( $_POST['txt_cu_present'])?$_POST['txt_cu_present']:$cu_present;
	
		$added_date 				=   date('Y-m-d');
		$updated_date 				=   date('Y-m-d');

	
	if($country_id =='')
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_country_profile.php?msg=2');</script>";
	else
		$isExists = Country::ISProfileExists($country_id);
		if($isExists==true)
		{
			
			$edit = Country::EditCountryProfile($country_id,$population_milion,$population_growth_per_year,$gdp_bilion,$gni,$exchange_rate,$cu_present,$updated_date);
			if($edit==true)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../country.php?msg=7');</script>";
				elseif($edit==false)
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_country_profile.php?msg=8&country_id=".$country_id."');</script>";
		
		}
		elseif($isExists==false)
		{						
			$regResult = Country::New_Country_Profile($country_id,$population_milion,$population_growth_per_year,$gdp_bilion,$gni,$exchange_rate,$cu_present,$added_date,$updated_date);
			
				if($regResult==true)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_country_profile.php?msg=11&country_id=".$country_id."');</script>";	
	
				}
				elseif($regResult==false)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_country_profile.php?msg=12&country_id=".$country_id."');</script>";
				}
		}
	
	break;
	
	
	case 'delete':
	
	$country_Id	=	isset( $_GET['countryid'])?$_GET['countryid']:$country_Id;
	$flag_name  = Country::GetCountry_data($country_Id);
	if($flag_name['country_flag'] !=''){
	$imgremove  = File_upload :: RemoveImage($file_path,$file_path_thumb,$flag_name['country_flag']);
	}
	$deleteResults = Country::DeleteCountry($country_Id); 
	
	if($deleteResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../country.php?msg=9');</script>";
	elseif($deleteResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../country.php?msg=10');</script>";
	
	break;
	
	
}	
?>