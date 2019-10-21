<?php 
	$mode=isset($_GET['mode'])?$_GET['mode']:'';
	require_once('../cumi_includes/cumi_config.php');
	require_once('../cumi_class/db.class.php');
	require_once('../cumi_class/register.class.php');

	
	switch($mode)
	{
		case 'reg':
			$text_name			  =isset($_POST['text_name'])?$_POST['text_name']:'';
			$text_district		  =isset($_POST['text_district'])?$_POST['text_district']:'';
			$text_name_credit_coop=isset($_POST['text_name_credit_coop'])?$_POST['text_name_credit_coop']:'';
			$txt_cus_name		  =isset($_POST['txt_cus_name'])?$_POST['txt_cus_name']:'';
			$text_address     	  =isset($_POST['text_address'])?$_POST['text_address']:'';
			$text_address_city	  =isset($_POST['text_address_city'])?$_POST['text_address_city']:'';
			$text_address_country =isset($_POST['text_address_country'])?$_POST['text_address_country']:'';
			$text_reg_no		  =isset($_POST['text_reg_no'])?$_POST['text_reg_no']:'';
			$text_telephone		  =isset($_POST['text_telephone'])?$_POST['text_telephone']:'';
			$text_fax			  =isset($_POST['text_fax'])?$_POST['text_fax']:'';
			$text_email			  =isset($_POST['text_email'])?$_POST['text_email']:'';
			$txt_user			  =isset($_POST['txt_user'])?$_POST['txt_user']:'';
			$txt_pass			  =isset($_POST['txt_pass'])?$_POST['txt_pass']:'';
			/*$select_operation	  =isset($_POST['select_operation'])?$_POST['select_operation']:'';
			$text_employee_male	  =isset($_POST['text_employee_male'])?$_POST['text_employee_male']:'';
			$text_employee_female =isset($_POST['text_employee_female'])?$_POST['text_employee_female']:'';
			$text_establish		  =isset($_POST['text_establish'])?$_POST['text_establish']:'';
			$text_service		  =isset($_POST['text_service'])?$_POST['text_service']:'';
			$text_share			  =isset($_POST['text_share'])?$_POST['text_share']:'';
			$text_deposite        =isset($_POST['text_deposite'])?$_POST['text_deposite']:'';
			$text_savings		  =isset($_POST['text_savings'])?$_POST['text_savings']:'';
			$text_loan			  =isset($_POST['text_loan'])?$_POST['text_loan']:'';
			$text_reserve		  =isset($_POST['text_reserve'])?$_POST['text_reserve']:'';
			$text_assest		  =isset($_POST['text_assest'])?$_POST['text_assest']:'';*/
	
			$availability =register::check_available($text_reg_no);
			 if($availability==false)
			 {
			  $register = register::org_data($text_name,$text_district,$text_name_credit_coop,$txt_cus_name,$text_address,$text_address_city,$text_address_country,$text_reg_no,$text_telephone,$text_fax,$text_email,$txt_user,$txt_pass/*,$select_operation,$text_employee_male,$text_employee_female,$text_establish,$text_service,$text_share,$text_deposite,$text_savings,$text_loan,$text_reserve,$text_assest*/);
			 
			  if($register==true)
			  {
			   echo "<script type=\"text/javascript\">document.location.replace('../index.php?msg=7');</script>";
			  }
			  else
			  {
			   echo "<script type=\"text/javascript\">document.location.replace('../cumi_register.php?msg=4');</script>";
			  }
			 }
			 
			 else
			 {
			  echo "<script type=\"text/javascript\">document.location.replace('../cumi_register.php?msg=8');</script>";
			 }
			
		break;
	}
?>
 

	