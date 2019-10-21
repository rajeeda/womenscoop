<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'CUSolution.class.php');
require_once('upload_controller.php');

$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;
$file_path					= "../../upload_images/Credit_Union_Solution/";
$file_path_thumb			= "../../upload_images/Credit_Union_Solution/thumb/"; 
$type 		= 'C';
$file_p = '';

switch($mode)
{
	case 'add':

	$solution_name       =isset( $_POST['txt_solution_name'])?$_POST['txt_solution_name']:$solution_name;
	$solution_description=isset( $_POST['txt_solution_description'])?$_POST['txt_solution_description']:$solution_description;
	$solution_image      =isset( $_FILES['up_solution_image'])?$_FILES['up_solution_image']:$solution_image;
	$link				 =isset( $_POST['txt_link'])?$_POST['txt_link']:$link;
	$order				 =isset( $_POST['cmb_order'])?$_POST['cmb_order']:$order;
	//$att_file1			 =isset( $_FILES['attach_cu_solution'])?$_FILES['attach_cu_solution']:$att_file1;
	$add_date			 = date('Y-m-d');
	$file_name			 = 'up_solution_image';
	$page				 = "new_Credit_Union_Solution.php";
	$solution_description=addslashes($solution_description);
	$solution_description=str_replace("’", " " ,$solution_description);
	$solution_name=addslashes($solution_name);
	$solution_name=str_replace("’", " " ,$solution_name);
	
	if($solution_name=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_Credit_Union_Solution.php?msg=1');</script>";	
	}
	elseif($solution_description=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_Credit_Union_Solution.php?msg=2');</script>";	
	}
	else
	{
		$isExists = CUSolution::ExistsCUSolution($solution_name);
		if($isExists==true)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_Credit_Union_Solution.php?msg=6');</script>";		
		}
		elseif($isExists==false)
		{
			if($_FILES['up_solution_image']['name'] !='')
			{			
				$up_image_name = File_upload :: Image_upload('',$file_path,$file_path_thumb,$solution_image,$file_name,'new_Credit_Union_Solution.php',$file_p);				
			}		
			$regResult = CUSolution :: NewCUSolution($solution_name,$solution_description,$up_image_name,$add_date,$link,$order);
			if($regResult==true)
			{
				$cu_solutions	= CUSolution :: passCUSolutionid($solution_name);
				$cu_solution_id		= $cu_solutions['solution_id'];
	
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_cu_attachment.php?solution_id=".$cu_solution_id."&msg=5');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_Credit_Union_Solution.php?msg=6');</script>";
			}
		}
	}
	break;
	
	
	case 'uploads':

	$solution_id        =isset($_POST['hdn_solutionname'])?$_POST['hdn_solutionname']:$solution_name;
	$doc_name      	    =isset($_POST['txt_cu_attachment'])?$_POST['txt_cu_attachment']:$doc_name;
	$attachment		    =isset($_FILES['attach_cu_solution'])?$_FILES['attach_cu_solution']:$attachment;
	$add_date			= date('Y-m-d');
	$file_name			= 'attach_cu_solution';
	$page				= "new_cu_attachment.php";
	$doc_name=addslashes($doc_name);
	$doc_name=str_replace("’", " " ,$doc_name);
	
	
	if($doc_name=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_cu_attachment.php?solution_name=".$solution_name."&msg=11');</script>";	
	}
	else
	{
		if($_FILES['attach_cu_solution']['name'] !=''){			
			
			$regResult = File_upload:: Attach_File_upload($solution_id,$file_path,$doc_name,$attachment,"attach_cu_solution",$page,$file_p,$type);
			
		}
				
		if($regResult==true)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_cu_attachment.php?solution_id=".$solution_id."&msg=12');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_cu_attachment.php?solution_id=".$solution_id."&msg=13');</script>";
			}
		
	}
	break;
	
		
	
	case 'update':
	$solution_id		 =$_GET['solution_id'];
	$solution_name       =isset( $_POST['txt_solution_name'])?$_POST['txt_solution_name']:$solution_name;
	$solution_description=isset( $_POST['txt_solution_description'])?$_POST['txt_solution_description']:$solution_description;
	$solution_image      =isset( $_FILES['up_solution_image'])?$_FILES['up_solution_image']:$solution_image;
	$link				= isset($_POST['txt_link'])?$_POST['txt_link']:$link;
	$order				 =isset( $_POST['cmb_order'])?$_POST['cmb_order']:$order;
	//$att_file1			 = isset( $_FILES['attach_cu_solution'])?$_FILES['attach_cu_solution']:$att_file1;
	$file_p				=isset( $_POST['hdnsolution_image'])?$_POST['hdnsolution_image']:$file_p;
	
	$update_date		 =date('Y-m-d');
	$file_name			 = 'up_solution_image';
	$page				 = "edit_Credit_Union_Solution.php";
	$solution_description=addslashes($solution_description);
	$solution_description=str_replace("’", " " ,$solution_description);
	$solution_name=addslashes($solution_name);
	$solution_name=str_replace("’", " " ,$solution_name);
	//echo $_POST['hdnsolution_image'];exit;
	if($_FILES['up_solution_image']['name'] =='')
	{
		 $up_image_name = $_POST['hdnsolution_image'];
	}
	else
	{
		 $up_image_name = File_upload :: Image_upload($solution_id,$file_path,$file_path_thumb,$solution_image,$file_name,'edit_Credit_Union_Solution.php',$file_p);
	}
	if($solution_name=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_Credit_Union_Solution.php?msg=1&solution_id=$solution_id');</script>";	
	}
	else
	{   
		//echo $link; exit;
		$updateResult = CUSolution::EditCUSolution($solution_id,$solution_name,$solution_description,$up_image_name,$update_date,$link,$order);
		
			if($updateResult==true)
			{
					
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_cu_attachment.php?msg=7&solution_id=$solution_id');</script>";	
	
			}
			elseif($updateResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_Credit_Union_Solution.php?msg=8&solution_id=$solution_id');</script>";
			} 
		}
		break;
	
	case 'delete':
	    $Solution_id=$_GET['solution_id'];
	 	$img_remove  = CUSolution :: GetCUSolution($Solution_id);
		
		if($img_remove['image_file'] != ''){
			$imgremove  = File_upload :: RemoveImage($file_path,$file_path_thumb,$img_remove['image_file']);
		}
		
		$deleteresult= CUSolution::DeleteCUSolution($Solution_id);
		if($deleteresult==true)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../Credit_Union_Solution.php?msg=9');</script>" ;
		}
		elseif($deleteresult==false)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../Credit_Union_Solution.php?msg=10');</script>";
		}

		
	break;
	
	case 'deletefile':
	
	$file_id	=	isset( $_GET['fileid'])?$_GET['fileid']:$file_id;
		
	$news_file	= CUSolution :: GetNewsDetailsFromFile($file_id);
	$deleteResults = CUSolution :: Deletefile($file_id); 
	
	
	if($deleteResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_cu_attachment.php?solution_id=".$news_file['record_id']."&msg=9');</script>";
	elseif($deleteResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_cu_attachment.php?solution_id='".$news_file['record_id']."'&msg=10');</script>";
	
	break;
	
	
}	
	
	
?>