<?php
	require_once('../config/config.php');
	require_once(CLASS_PATH.'db.class.php');
	require_once('../classes/about_us_member.class.php');
	
	
	
	$mode=isset($_GET['mode'])?$_GET['mode']:'';
	$t	 =isset($_GET['t'])?$_GET['t']:'';
	
	switch($mode)
	{
			case 'type_reg':
				$cmb_type		=isset($_POST['cmb_type'])?$_POST['cmb_type']:'';
				$txt_type 		=isset($_POST['txt_type'])?$_POST['txt_type']:'';
				$txt_discription=isset($_POST['txt_discription'])?$_POST['txt_discription']:'';
				
				if($cmb_type=="Select" && $txt_type=="")
				{
					echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_member_type.php?msg=1');</script>";
				}
				elseif($cmb_type!="Select" && $txt_type=="")
				{
				    $type=$cmb_type;
					echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_member.php?type_id=$type');</script>";
				}
				elseif($cmb_type=="Select" && $txt_type!="")
				{
					$type=$txt_type;
					$result=user_level::insert_user_type($type,$txt_discription);
					if($result==true)
					{
						$result01=user_level::get_user_type_id($type);
						$type=$result01['user_level_id'];
						echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_member.php?msg=2&type_id=$type');</script>";
					}
					else
					{
						echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_member_type.php?msg=3');</script>";
					}
				}
			break;
			
			case 'member_reg':
				$hdn_level_id	=isset($_POST['hdn_level_id'])?$_POST['hdn_level_id']:'';
				$txt_first_name =isset($_POST['txt_first_name'])?$_POST['txt_first_name']:'';
				$txt_last_name	=isset($_POST['txt_last_name'])?$_POST['txt_last_name']:'';	
				$txt_email		=isset($_POST['txt_email'])?$_POST['txt_email']:'';
				$txt_tpNo		=isset($_POST['txt_tpNo'])?$_POST['txt_tpNo']:'';
				$txt_fax		=isset($_POST['txt_fax'])?$_POST['txt_fax']:'';
				$txt_user_name	=isset($_POST['txt_user_name'])?$_POST['txt_user_name']:'';
				$txt_pass		=isset($_POST['txt_pass'])?$_POST['txt_pass']:'';
				$add_date		=date('Y-m-d');
				$update_date	=date('Y-m-d');
				
				$result02=user_level::insert_member_data($hdn_level_id,$txt_first_name,$txt_last_name,$txt_email,$txt_tpNo,$txt_fax,$txt_user_name,$txt_pass,$add_date,$update_date);
				
				if($result02==true)
				{
					echo "<script type=\"text/javascript\">document.location.replace('../about_us_member.php?msg=5');</script>";
				}
				if($result02==false)
				{
					echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_member.php?msg=4');</script>";
				}
				
			break;
			
			case'edit_type_reg':
				$cmb_type		=isset($_POST['cmb_type'])?$_POST['cmb_type']:'';
				$txt_type 		=isset($_POST['txt_type'])?$_POST['txt_type']:'';
				$txt_discription=isset($_POST['txt_discription'])?$_POST['txt_discription']:'';
				$u_id		 	=isset($_POST['hdn_u_id'])?$_POST['hdn_u_id']:'';
				$u_le_id		=isset($_POST['hdn_u_le_id'])?$_POST['hdn_u_le_id']:'';
				
				if($cmb_type=="Select" && $txt_type=="")
				{
					echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_member_type.php?msg=1');</script>";
				}
				elseif($cmb_type!="Select" && $txt_type=="")
				{				    
					$type=$cmb_type;
					$result03=user_level::update_user_data($type,$txt_discription,$u_id);
					if($result03==true)
					{
						echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_member.php?msg=6&u_le_id=$type&u_id=$u_id');</script>";
					}
					else
					{
						echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_member_type.php?msg=7&u_le_id=$type&u_id=$u_id');</script>";
					}
				}
				
				elseif($cmb_type!=$u_le_id && $txt_type!="")
				{					
					echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_member_type.php?msg=8&u_le_id=$u_le_id$type&u_id=$u_id');</script>";
					
				}
				
				elseif($cmb_type==$u_le_id && $txt_type!="")
				{
					$type=$u_le_id;
					$result04=user_level::update_user_type($type,$txt_type,$txt_discription);
					if($result04==true)
					{
						echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_member.php?msg=9&u_le_id=$type&u_id=$u_id');</script>";
					}
					else
					{
						echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_member_type.php?msg=10&u_le_id=$type&u_id=$u_id');</script>";
					}
				}					
				
			break;
			
			case 'edit_member_reg':
				$t				=isset($_GET['t'])?$_GET['t']:'';
				$u_id		 	=isset($_POST['hdn_u_id'])?$_POST['hdn_u_id']:'';
				$u_le_id		=isset($_POST['hdn_u_le_id'])?$_POST['hdn_u_le_id']:'';
				//$hdn_level_id	=isset($_POST['hdn_level_id'])?$_POST['hdn_level_id']:'';
				$txt_first_name =isset($_POST['txt_first_name'])?$_POST['txt_first_name']:'';
				$txt_last_name	=isset($_POST['txt_last_name'])?$_POST['txt_last_name']:'';	
				$txt_email		=isset($_POST['txt_email'])?$_POST['txt_email']:'';
				$txt_tpNo		=isset($_POST['txt_tpNo'])?$_POST['txt_tpNo']:'';
				$txt_fax		=isset($_POST['txt_fax'])?$_POST['txt_fax']:'';
				$txt_old_pass2	=isset($_POST['txt_old_pass'])?$_POST['txt_old_pass']:'';
				$txt_old_pass1	=isset($_POST['hdn_pass'])?$_POST['hdn_pass']:'';
				
				$update_date	=date('Y-m-d');
					
				
				
				if($txt_old_pass2=="")
				{						
						
					$result06=user_level::update_user_member_data_basic($u_id,$u_le_id,$txt_first_name,$txt_last_name,$txt_email,$txt_tpNo,$txt_fax,$update_date);
				  if($result06==true)	
				  {
					  echo "<script type=\"text/javascript\">document.location.replace('../about_us_member.php?msg=11');</script>";
				  }
				  if($result06==false)
				  {
					  echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_member.php?msg=12&u_le_id=$u_le_id&u_id=$u_id');</script>";
				  }
				}
				if($txt_old_pass2!="")
				{
					if(md5($txt_old_pass2)==$txt_old_pass1)
					{
						$result06=user_level::update_user_member_data_basic($u_id,$u_le_id,$txt_first_name,$txt_last_name,$txt_email,$txt_tpNo,$txt_fax,$update_date);
						echo "<script type=\"text/javascript\">document.location.replace('../about_us_member_new_pass.php?u_le_id=$u_le_id&u_id=$u_id');</script>";
					}
					else
					{
						echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_member.php?msg=15&u_le_id=$u_le_id&u_id=$u_id');</script>";
					}
				}				
				
			break;
			
			case 'edit_member_reg_security':
				$u_id		 	=isset($_POST['hdn_u_id'])?$_POST['hdn_u_id']:'';
				$u_le_id		=isset($_POST['hdn_u_le_id'])?$_POST['hdn_u_le_id']:'';
				$txt_user_name	=isset($_POST['txt_user'])?$_POST['txt_user']:'';
				$txt_pass		=isset($_POST['txt_pass'])?$_POST['txt_pass']:'';
				$txt_repass		=isset($_POST['txt_repass'])?$_POST['txt_repass']:'';
				$update_date	=date('Y-m-d');
				
				$result05=user_level::update_user_member_data_security($u_id,$txt_user_name,$txt_pass,$update_date);				
				if($result05==true)
				{
					echo "<script type=\"text/javascript\">document.location.replace('../about_us_member.php?msg=13');</script>";
				}
				if($result05==false)
				{
					echo "<script type=\"text/javascript\">document.location.replace('../about_us_member_new_pass.php?msg=14&u_le_id=$u_le_id&u_id=$u_id');</script>";
				}
				
			break;
			
			case 'delete':
				$u_id	=	isset( $_GET['u_id'])?$_GET['u_id']:$u_id;
				
				$deleteResults = user_level::Delete_about_us_member($u_id); 
				if($deleteResults==true)
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../about_us_member.php?msg=16');</script>";
				elseif($deleteResults==false)
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../about_us_member.php?msg=18');</script>";
			break;
			
			
	
	
	
			
	}
	
?>