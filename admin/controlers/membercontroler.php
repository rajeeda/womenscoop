<?php

$contact_array=array();
//require_once('../classes/fileupload-class.php');

require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'member.class.php');
require_once('upload_controller.php');

$mode	=	isset($_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset($_POST['mode'])?$_POST['mode']:$mode;
$file_path				= "../../upload_images/member_logos/";
$file_path_thumb		= "../../upload_images/member_logos/thumb/";
$file_p		='';

switch( $mode)
{
	
	case 'rgister_basic':

	$member_type		=	isset( $_POST['cmb_member_type'])?$_POST['cmb_member_type']:'';
	$member_name		=	isset( $_POST['txt_member_name'])?$_POST['txt_member_name']:'';
	$member_abbrevation	=	isset( $_POST['txt_member_abbrevation'])?$_POST['txt_member_abbrevation']:'';
	$member_Logo	    =	isset( $_FILES['up_member_signature'])?$_FILES['up_member_signature']:'';
	$countryName		=	isset( $_POST['cmb_countryName'])?$_POST['cmb_countryName']:'';
	$URL				=	isset( $_POST['txt_URL'])?$_POST['txt_URL']:'';
	$email				=	isset( $_POST['txt_email'])?$_POST['txt_email']:'';
	$registered_date    =	date('Y-m-d');
	$active				=	isset( $_POST['cmb_active'])?$_POST['cmb_active']:'';
	$file_name			=	'up_member_signature';
	
	
	if($member_type=='Select')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_member_basic_details.php?msg=1');</script>";	
	}
	elseif($member_name=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_member_basic_details.php?msg=2&member_type=$member_type');</script>";	
	}		
	elseif($countryName==0)
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_member_basic_details.php?msg=3&member_type=$member_type&member_name=$member_name');</script>";
	}
	/*elseif($email=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_member_basic_details.php?msg=4&member_type=$member_type&member_name=$member_name');</script>";
	}
	*/
	else
	{	
		$isExists = Member::ExistsUser($email);
		if($isExists==true)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_member_basic_details.php?msg=5&member_type=$member_type&member_name=$member_name');</script>";		
		}
		elseif($isExists==false)
		{
			if($_FILES['up_member_signature']['name'] !='')
			{
				$up_image = File_upload::Image_upload('',$file_path,$file_path_thumb,$member_Logo,$file_name,"new_member_basic_details.php",$file_p);
			}
				
			$regResult = Member::New_member_basic($member_type,$member_name,$member_abbrevation,$up_image,$countryName,$URL,$email,$registered_date,$active);
			if($regResult==true)
			{			
				$result=Member::Get_member_id($member_name);
				$member_id=$result['member_id'];			
			
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_member_contact_details.php?msg=6&member_id=$member_id');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_member_basic_details.php?msg=7');</script>";
			}
		}	
	}

	break;
	
	case 'rgister_contact':
	
    	$member_id		=isset($_POST['hdn_member_id'])?$_POST['hdn_member_id']:'';
		$Street1		=isset($_POST['txt_Street1'])?$_POST['txt_Street1']:'';
		$Street2		=isset($_POST['txt_Street2'])?$_POST['txt_Street2']:'';
		$City			=isset($_POST['txt_City'])?$_POST['txt_City']:'';
		$Province		=isset($_POST['txt_Province'])?$_POST['txt_Province']:'';
		$Postal_Code 	=isset($_POST['txt_Postal_Code'])?$_POST['txt_Postal_Code']:'';
		$Phone_No		=isset($_POST['txt_Phone_No'])?$_POST['txt_Phone_No']:'';
		$Fax_No			=isset($_POST['txt_Fax_No'])?$_POST['txt_Fax_No']:'';
		$memaddress		=$Street1.",".$Street2.",".$City;
		$updated_date	=date('Y-m-d');
	
	
	
	$contact_array=array($Street1,$Street2,$City,$Province,$memaddress,$Postal_Code,$Phone_No,$Fax_No);
	//echo $contact_array[0]; exit;
	if($Street1=='')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
				document.location.replace('../new_member_contact_details.php?contact_array=$contact_array&msg=8&member_id=$member_id')
			</script>";
	}
	/*elseif($Street2=='')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
					document.location.replace('../new_member_contact_details.php?msg=9&contact_array=$contact_array&member_id=$member_id')    
			 </script>";
	}
	elseif($City=='')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
					document.location.replace('../new_member_contact_details.php?msg=10&contact_array=$contact_array&member_id=$member_id')    
			 </script>";
	}
	elseif($Province=='')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
					document.location.replace('../new_member_contact_details.php?msg=11&member_id=$member_id')    
			 </script>";
	}
	elseif($Postal_Code=='')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
					document.location.replace('../new_member_contact_details.php?msg=12&member_id=$member_id')    
			 </script>";
	}
	elseif($Phone_No=='')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
					document.location.replace('../new_member_contact_details.php?msg=13&member_id=$member_id')    
			 </script>";
	}*/
		else
		{	
			
			$reg_contact_Result=Member::New_member_contact($member_id,$Street1,$Street2,$City,$Province,$Postal_Code,$Phone_No,$Fax_No,$updated_date);
			if($reg_contact_Result==true)
			{
			    echo "<script language=\"javascript\" type=\"text/javascript\"> 
							document.location.replace('../new_member_contactPerson.php?msg=14&member_id=$member_id')</script> ";
	
			}
			elseif($reg_contact_Result==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_member_contact_details.php?msg=15&&member_id=$member_id');</script>";
			}
		}		
	break;
	
	// Add contact Person details
	
	case 'add_contactperson':
	
    	$member_id		=isset($_POST['hdn_member_id'])?$_POST['hdn_member_id']:'';
		$title			=isset($_POST['cmb_title'])?$_POST['cmb_title']:'';
		$name			=isset($_POST['txt_name'])?$_POST['txt_name']:'';
		$post			= isset($_POST['txt_post'])?$_POST['txt_post']:'';
		$address		=isset($_POST['txt_address'])?$_POST['txt_address']:'';
		$telephone		=isset($_POST['txt_telephone'])?$_POST['txt_telephone']:'';
		$fax			=isset($_POST['txt_Postal_fax'])?$_POST['txt_Postal_fax']:'';
		$email 			=isset($_POST['txt_email'])?$_POST['txt_email']:'';
		$url			=isset($_POST['txt_url'])?$_POST['txt_url']:'';
		$add_date		=date('Y-m-d');
		$address=addslashes($address);
	
	
	
	if($title=='select')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_member_contactPerson.php?msg=32&member_id=$member_id');  </script> ";
		}
	elseif($name == '')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
				document.location.replace('../new_member_contactPerson.php?msg=33&member_id=$member_id');
			</script>";
	}
	else
	{	
			
			$add_contact_prson = Member::New_contact_person($member_id,$title,$name,$post,$address,$telephone,$fax,$email,$url,$add_date);
			if($add_contact_prson == true)
			{
			    echo "<script language=\"javascript\" type=\"text/javascript\"> 
							document.location.replace('../new_member_contactPerson.php?msg=30&&member_id=$member_id')</script> ";
	
			}
			elseif($add_contact_prson == false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_member_contactPerson.php?msg=31&member_id=$member_id');</script>";
			}
	}		
	break;
	
	// Add Regulator Details 
	
	case 'add_regulator':
	
    	$member_id		=isset($_POST['hdn_member_id'])?$_POST['hdn_member_id']:'';
		$title			=isset($_POST['cmb_title'])?$_POST['cmb_title']:'';
		$reg_name		=isset($_POST['txt_reg_name'])?$_POST['txt_reg_name']:'';
		$reg_desc		=isset($_POST['txt_reg_des'])?$_POST['txt_reg_des']:'';
		$reg_add		=isset($_POST['txt_add'])?$_POST['txt_add']:'';
		$add_date		=date('Y-m-d');
	
	
	
	
	if($title=='select')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_regulater.php?msg=32&member_id=$member_id');  </script> ";
		}
	elseif($reg_name == '')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
				document.location.replace('../new_regulater.php?msg=34&member_id=$member_id');
			</script>";
	}
	else
	{	
			
			$add_regulator = Member::New_Regluter($member_id,$title,$reg_name,$reg_desc,$reg_add,$add_date);
			if($add_regulator == true)
			{
			    echo "<script language=\"javascript\" type=\"text/javascript\"> 
							document.location.replace('../new_regulater.php?msg=35&&member_id=$member_id')</script> ";
	
			}
			elseif($add_regulator == false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_regulater.php?msg=36&member_id=$member_id');</script>";
			}
	}		
	break;
	
	
	
	
	case 'add_staff':
	
		$member_id	=isset($_POST['hdn_member_id'])?$_POST['hdn_member_id']:'';
		$title		=isset($_POST['cmb_title'])?$_POST['cmb_title']:'';
		$name		=isset($_POST['txt_name'])?$_POST['txt_name']:'';
		$position_no=isset($_POST['cmb_position_no'])?$_POST['cmb_position_no']:'';
		$Position	=isset($_POST['txt_Position'])?$_POST['txt_Position']:'';
		
		if($title=='Select')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../member_staff.php?msg=16&member_id=$member_id');  </script> ";
		}
		elseif($name=='')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../member_staff.php?msg=2&member_id=$member_id');  </script> ";
		}
		elseif($position_no=='select')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../member_staff.php?msg=17_a&member_id=$member_id');</script>";
		}
		elseif($Position=='')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../member_staff.php?msg=18&member_id=$member_id');</script>";
			}
			else
			{
					$result=Member::member_staff($member_id,$title,$name,$position_no,$Position);
					if($result==true)
					{
						echo "<script language=\"javascript\" type=\"text/javascript\"> 
							document.location.replace('../member_staff.php?msg=19&member_id=$member_id')</script> ";
					}
					elseif($result==false)
					{
						echo "<script language=\"javascript\" type=\"text/javascript\"> 
							document.location.replace('../member_staff.php?msg=20&member_id=$member_id')</script> ";
					}
			}	
	
	break;
	
	
	/*case 'add_ajax_staff':
	
		$member_id	=isset($_POST['hdn_member_id'])?$_POST['hdn_member_id']:$_GET['member_id'];
		$title		=isset($_POST['cmb_title'])?$_POST['cmb_title']:'';
		$name		=isset($_POST['txt_name'])?$_POST['txt_name']:'';
		$position_no=isset($_POST['cmb_position_no'])?$_POST['cmb_position_no']:'';
		$Position	=isset($_POST['txt_Position'])?$_POST['txt_Position']:'';
		
		if($title=='Select')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../Staff_member_ajax.php?msg=16&member_id=$member_id');  </script> ";
		}
		elseif($name=='')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../Staff_member_ajax.php?msg=2&member_id=$member_id');  </script> ";
		}
		elseif($position_no=='select')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../Staff_member_ajax.php?msg=17_a&member_id=$member_id');</script>";
		}
		elseif($Position=='')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../Staff_member_ajax.php?msg=18&member_id=$member_id');</script>";
			}
			else
			{
					$result=Member::member_staff($member_id,$title,$name,$position_no,$Position);
					if($result==true)
					{
						echo "<script language=\"javascript\" type=\"text/javascript\"> 
							document.location.replace('../Staff_member_ajax.php?msg=19&member_id=$member_id')</script> ";
					}
					elseif($result==false)
					{
						echo "<script language=\"javascript\" type=\"text/javascript\"> 
							document.location.replace('../Staff_member_ajax.php?msg=20&member_id=$member_id')</script> ";
					}
			}	
	
	break;*/
	
	
	case 'update_basic':
		
		
	$member_id          =	isset($_POST['hdn_member_id'])?$_POST['hdn_member_id']:$_GET['member_id'];
	$member_type		=	isset( $_POST['cmb_member_type'])?$_POST['cmb_member_type']:'';
	$member_name		=	isset( $_POST['txt_member_name'])?$_POST['txt_member_name']:'';
	$member_abbrevation	=	isset( $_POST['txt_member_abbrevation'])?$_POST['txt_member_abbrevation']:'';
    $member_Logo	    =	isset( $_FILES['up_member_logo'])?$_FILES['up_member_logo']:$member_Logo;
	$countryName		=	isset( $_POST['cmb_countryName'])?$_POST['cmb_countryName']:'';
	$URL				=	isset( $_POST['txt_URL'])?$_POST['txt_URL']:'';
	$email				=	isset( $_POST['txt_email'])?$_POST['txt_email']:'';
	$updated_date		=	date('Y-m-d');
	$active				=	isset( $_POST['cmb_active'])?$_POST['cmb_active']:'';
	$hdn_member_logo    =   isset($_POST['hdn_member_logo'])?$_POST['hdn_member_logo']:'';
	$file_name			=	'up_member_logo';
	
	if($_FILES['up_member_logo']['name'] =='')
	{
		$up_image = $hdn_member_logo;
	}
	else
	{
		$up_image = File_upload :: Image_upload($member_id,$file_path,$file_path_thumb,$member_Logo,$file_name,"edit_member_basic_details.php",$hdn_member_logo);
	}
	
	if($member_name=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_basic_details.php?msg=2&member_id=$member_id');</script>";	
	}
	else
	/*if($email=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_basic_details.php?msg=4&member_id=$member_id');</script>";
	}	
	else*/
	{	

		$regResult = Member::update_member_basic($member_id,$member_type,$member_name,$member_abbrevation,$up_image,$countryName,$URL,$email,$updated_date,$active);
			if($regResult==true)
			{						
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_contact_details.php?msg=22&member_id=$member_id');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_basic_details.php.php?msg=23&member_id=$member_id');</script>";
			}
	}

	break;


	case 'update_contact':
	
	$member_id		=isset($_POST['hdn_member_id'])?$_POST['hdn_member_id']:'';
	$Street1		=isset($_POST['txt_Street1'])?$_POST['txt_Street1']:'';
	$Street2		=isset($_POST['txt_Street2'])?$_POST['txt_Street2']:'';
	$City			=isset($_POST['txt_City'])?$_POST['txt_City']:'';
	$Province		=isset($_POST['txt_Province'])?$_POST['txt_Province']:'';
	$Postal_Code 	=isset($_POST['txt_Postal_Code'])?$_POST['txt_Postal_Code']:'';
	$Phone_No		=isset($_POST['txt_Phone_No'])?$_POST['txt_Phone_No']:'';
	$Fax_No			=isset($_POST['txt_Fax_No'])?$_POST['txt_Fax_No']:'';

	
	$contact_array=array($Street1,$Street2,$City,$Province,$Postal_Code,$Phone_No,$Fax_No);
	
	if($Street1=='')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">				document.location.replace('../edit_member_contact_details.php?msg=8&member_id=$member_id')
			</script>";
	}
	/*elseif($Street2=='')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">					document.location.replace('../edit_member_contact_details.php?msg=9&member_id=$member_id')    
			 </script>";
	}
	elseif($City=='')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
					document.location.replace('../edit_member_contact_details.php?msg=10&member_id=$member_id')    
			 </script>";
	}
	elseif($Province=='')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
					document.location.replace('../edit_member_contact_details.php?msg=11&member_id=$member_id')    
			 </script>";
	}
	elseif($Postal_Code=='')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
					document.location.replace('../edit_member_contact_details.php?msg=12&member_id=$member_id')    
			 </script>";
	}
	elseif($Phone_No=='')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
					document.location.replace('../edit_member_contact_details.php?msg=13&member_id=$member_id')    
			 </script>";
	}*/
		else
		{	
			
			$reg_contact_Result=Member::update_member_contact($member_id,$Street1,$Street2,$City,$Province,$Postal_Code,$Phone_No,$Fax_No);
			if($reg_contact_Result==true)
			{
			    echo "<script language=\"javascript\" type=\"text/javascript\"> 
							document.location.replace('../edit_member_contactPerson.php?msg=14&member_id=$member_id')</script> ";
	
			}
			elseif($reg_contact_Result==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_contact_details.php?msg=15&member_id=$member_id');</script>";
			}
		}		
	break;
	
	
	//Update Contact member Details 
	
	case 'update_contact_memeber':
	
    	$member_id			=isset($_POST['hdn_member_id'])?$_POST['hdn_member_id']:'';
		$contact_member_id 	= isset($_POST['hdn_member_contact_id'])?$_POST['hdn_member_contact_id']:'';
		$title				=isset($_POST['cmb_title'])?$_POST['cmb_title']:'';
		$name				=isset($_POST['txt_name'])?$_POST['txt_name']:'';
		$post				= isset($_POST['txt_post'])?$_POST['txt_post']:'';
		$address			=isset($_POST['txt_address'])?$_POST['txt_address']:'';
		$telephone			=isset($_POST['txt_telephone'])?$_POST['txt_telephone']:'';
		$fax				=isset($_POST['txt_fax'])?$_POST['txt_fax']:'';
		$email 				=isset($_POST['txt_email'])?$_POST['txt_email']:'';
		$url				=isset($_POST['txt_url'])?$_POST['txt_url']:'';
		$update_date		=date('Y-m-d');
	
	
	//echo $contact_member_id; exit;
	//$contact_array=array($Street1,$Street2,$City,$Province,$Postal_Code,$Phone_No,$Fax_No);
	
	if($title=='select')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_contactPerson.php?msg=32&member_id=".$member_id."');  </script> ";
		}
	elseif($name == '')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
				document.location.replace('../edit_member_contactPerson.php?msg=33&member_id=".$member_id."');
			</script>";
	}
	else
	{	
			if($contact_member_id =='0')
			{
			$add_contact_prson = Member::New_contact_person($member_id,$title,$name,$post,$address,$telephone,$fax,$email,$url,$update_date);
			}
			else
			{
			$add_contact_prson = Member::Update_contact_person($contact_member_id,$title,$name,$post,$address,$telephone,$fax,$email,$url,$update_date);
			}
			if($add_contact_prson == true)
			{
			    echo "<script language=\"javascript\" type=\"text/javascript\"> 
							document.location.replace('../edit_member_contactPerson.php?msg=30&&member_id=".$member_id."')</script> ";
	
			}
			elseif($add_contact_prson == false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_contactPerson.php?msg=31&member_id=".$member_id."');</script>";
			}
	}		
	break;
	
	// update Reglutor
	case 'edit_regulator':
	
    	$member_id		=isset($_POST['hdn_member_id'])?$_POST['hdn_member_id']:'';
		$regulator_id 	= isset($_POST['hdn_regulator_id'])?$_POST['hdn_regulator_id']:'';
		$title			=isset($_POST['cmb_title'])?$_POST['cmb_title']:'';
		$reg_name		=isset($_POST['txt_reg_name'])?$_POST['txt_reg_name']:'';
		$reg_desc		=isset($_POST['txt_reg_des'])?$_POST['txt_reg_des']:'';
		$reg_add		=isset($_POST['txt_add'])?$_POST['txt_add']:'';
		$add_date		=date('Y-m-d');
	
	
	
	//$contact_array=array($Street1,$Street2,$City,$Province,$Postal_Code,$Phone_No,$Fax_No);
	
	if($title=='select')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_regulater.php?msg=32&member_id=$member_id');  </script> ";
		}
	elseif($reg_name == '')
	{
		echo"<script language=\"javascript\" type=\"text/javascript\">
				document.location.replace('../edit_regulater.php?msg=34&member_id=$member_id');
			</script>";
	}
	else
	{	
			if($regulator_id == '0')
			{
			$add_regulator = Member::New_Regluter($member_id,$title,$reg_name,$reg_desc,$reg_add,$add_date);
			}
			else
			{
			$add_regulator = Member::update_Regluter($regulator_id,$title,$reg_name,$reg_desc,$reg_add,$add_date);
			}
			if($add_regulator == true)
			{
			    echo "<script language=\"javascript\" type=\"text/javascript\"> 
							document.location.replace('../edit_regulater.php?msg=35&&member_id=".$member_id."')</script> ";
	
			}
			elseif($add_regulator == false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_regulater.php?msg=36&member_id=".$member_id."');</script>";
			}
	}		
	break;
	
	
	//document.location.replace('../edit_member_staff_Ajax.php?msg=14&member_id=$member_id')
	
	case 'update_staff':
	
	
	    if($_POST['cmb_name']=='new_member')
		{
			$member_id	=isset($_POST['hdn_member_id'])?$_POST['hdn_member_id']:$_GET['member_id'];
			$title		=isset($_POST['cmb_title'])?$_POST['cmb_title']:'';
			$name		=isset($_POST['txt_name'])?$_POST['txt_name']:'';
			$position_no=isset($_POST['cmb_position_no'])?$_POST['cmb_position_no']:'';
			$Position	=isset($_POST['txt_Position'])?$_POST['txt_Position']:'';
			
			if($title=='Select')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_staff_Ajax.php?msg=16&member_id=$member_id');  </script> ";
			}
			elseif($name=='')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_staff_Ajax.php?msg=2&member_id=$member_id');  </script> ";
			}
			elseif($position_no=='select')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_staff_Ajax.php?msg=17_a&member_id=$member_id');</script>";
			}
			elseif($Position=='')
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_staff_Ajax.php?msg=18&member_id=$member_id');</script>";
				}
				else
				{
						$result=Member::member_staff($member_id,$title,$name,$position_no,$Position);
						if($result==true)
						{
							echo "<script language=\"javascript\" type=\"text/javascript\"> 
								document.location.replace('../edit_member_staff_Ajax.php?msg=19&member_id=$member_id')</script> ";
						}
						elseif($result==false)
						{
							echo "<script language=\"javascript\" type=\"text/javascript\"> 
								document.location.replace('../edit_member_staff_Ajax.php?msg=20&member_id=$member_id')</script> ";
						}
				}	
		}
		else
		{
			$member_id	=isset($_POST['hdn_member_id'])?$_POST['hdn_member_id']:$_GET['member_id'];
			$staff_id	=isset($_POST['hdn_staff_id'])?$_POST['hdn_staff_id']:$_GET['staff_id'];
			$title		=isset($_POST['cmb_title'])?$_POST['cmb_title']:'';
			$name		=isset($_POST['txt_name'])?$_POST['txt_name']:'';
			$position_no=isset($_POST['cmb_position_no'])?$_POST['cmb_position_no']:'';
			$Position	=isset($_POST['txt_Position'])?$_POST['txt_Position']:'';
			
	
			if($name=='')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_staff_Ajax.php?msg=2&member_id=$member_id&staff_id=$staff_id');  </script> ";
			}
			if($Position=='')
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_staff_Ajax.php?msg=18&member_id=$member_id&staff_id=$staff_id');</script>";
				}
				else
				{
						$result=Member::update_member_staff($member_id,$staff_id,$title,$name,$position_no,$Position);
						if($result==true)
						{
							echo "<script language=\"javascript\" type=\"text/javascript\"> 
								document.location.replace('../edit_member_staff_Ajax.php?msg=24&member_id=$member_id&staff_id=$staff_id')</script> ";
						}
						elseif($result==false)
						{
							echo "<script language=\"javascript\" type=\"text/javascript\"> 
								document.location.replace('../edit_member_staff_Ajax.php?msg=25&member_id=$member_id&staff_id=$staff_id')</script> ";
						}
				}	
		
		}//end else
	break;
	
	
	
	case 'delete':
	
     	$member_id	=	isset( $_GET['memberid'])?$_GET['memberid']:$member_id;
		$flag_name  = Member :: GetMember($member_id);
		if($flag_name['member_sign'] != ''){
		$imgremove  = File_upload :: RemoveImage($file_path,$file_path_thumb,$flag_name['member_sign']);
		}
		
		$deleteResults = Member::DeleteMember($member_id);
		
		if($deleteResults==true)
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../member.php?msg=26');</script>";
		elseif($deleteResults==false)
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../member.php?msg=27');</script>";
	
	break;
	
	case 'delete_staff_member';
		$member_id	=	isset( $_GET['member_id'])?$_GET['member_id']:$member_id;
		$staff_id	=	isset( $_GET['staff_id'])?$_GET['staff_id']:$member_id;
		$deleteResults = Member::Delete_Staff_Member($member_id,$staff_id); 
		
		if($deleteResults==true)
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_staff_Ajax.php?msg=26&member_id=$member_id&staff_id=$staff_id');</script>";
		elseif($deleteResults==false)
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_staff_Ajax.php?msg=27&member_id=$member_id&staff_id=$staff_id');</script>";
	break;
	
	case 'deletecontactperson';
		$contact_person_id	=	isset( $_GET['contactpersonid'])?$_GET['contactpersonid']:$contact_person_id;
		$member	= Member :: getmember_Id($contact_person_id);
		$membetr_id = $member['member_id'];
		$deleteResults = Member::Delete_contact_Person($contact_person_id); 
		
		if($deleteResults==true)
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_contactPerson.php?msg=38&member_id=".$membetr_id."');</script>";
		elseif($deleteResults==false)
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_member_contactPerson.php?msg=39&member_id=".$membetr_id."');</script>";
	break;
	
	case 'deleteregulator';
		$regulator_id	=	isset( $_GET['regulatorid'])?$_GET['regulatorid']:$regulator_id;
		$regulater		= Member :: getregulatemem_Id($regulator_id);
		$membetr_id 	= $regulater['member_id'];
		$deleteResults = Member::Delete_regulator($regulator_id); 
		
		if($deleteResults==true)
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_regulater.php?msg=38&member_id=".$membetr_id."');</script>";
		elseif($deleteResults==false)
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_regulater.php?msg=39&member_id=".$membetr_id."');</script>";
	break;
	
	
}	
?>