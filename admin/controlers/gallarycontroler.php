<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'gallery.class.php');
require_once(ADMIN_CLASS_PATH.'category.class.php');
require_once('upload_controller.php');
//require_once(ADMIN_PATH.'gallary_item.php');

$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;

$file_path				= "../../upload_images/Gallary/";
$file_path_thumb		= "../../upload_images/Gallary/thumb/";
$file_p		='';
$image_name='';
switch( $mode)
{
	case 'add_gallery':
	
	
	$image_name		     =	isset($_FILES['up_image'])?$_FILES['up_image']:$image_name;
	
	$image_cat			 =  isset($_POST['imgcategory'])?$_POST['imgcategory']:$image_cat;
	$image_cat_txt		 =  isset($_POST['imgcategory2'])?$_POST['imgcategory2']:$image_cat_txt;
	$alt_text		     =	isset($_POST['alttag'])?$_POST['alttag']:$alt_text;
		
	$file_name			 =	'up_image';
	
	if($image_cat_txt != ''){
		$cat_name = $image_cat_txt;
	}
	else
	{
		$cat_name = $image_cat;
	}
	
	//echo $cat_name; exit;
	
	if($_FILES['up_image']['name'] =='' )
	{
		//echo "asdad".$image_name; exit;
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=1');</script>";	
	}
	elseif($cat_name == '0')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=2');</script>";	
	}
	else
	{
		if($_FILES['up_image']['name'] !='')
			{
				$up_image = File_upload::Image_upload_Gallery('',$file_path,$file_path_thumb,$image_name,$file_name,"images.php",$file_p);
			}
			$regResult= Gallary :: Insert_Gallery($up_image,$cat_name,$alt_text);
			if($regResult==true)
			{
			 
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=5');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=6');</script>";
			}
		
	}
	break;
	case 'add_multi_gallery':
	
	$up_image		     =	isset($_POST['up_image'])?$_POST['up_image']:$image_name;
	
	$cat_name			 =  isset($_POST['imgcategory'])?$_POST['imgcategory']:$image_cat;
	$alt_text		     =	'test';
		
	$file_name			 =	'up_image';
	
	//echo $cat_name; exit;
	
	if($up_image =='' )
	{
		//echo "asdad".$image_name; exit;
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=1');</script>";	
	}
	else
	{
		if($up_image !=''){
			if($cat_name !='0'){
			$regResult= Gallary:: Insert_Gallery($up_image,$cat_name,$alt_text);
			if($regResult==true)
			{
			 
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=5');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=6');</script>";
			}
		}
		}
	}
	break;
	case 'view_multi_gallery':
	$cat_name			 =  isset($_POST['imgcategory'])?$_POST['imgcategory']:$image_cat;
	$getresult= Gallary::GetImagegallery($cat_name);
	if($getresult){
            echo json_encode($getresult);
        }
	break;
	
	case 'edit_catagary':
	
	
	$cat_name		    	 =	isset($_POST['updatecategory2'])?$_POST['updatecategory2']:$cat_name;
	$old_cat_name		     =	isset($_POST['cmb_category'])?$_POST['cmb_category']:$old_cat_name;
		
	
	if($cat_name == '')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=7');</script>";	
	}
	else
	{
			$regResult= Gallary :: Update_Categary($old_cat_name,$cat_name);
			if($regResult==true)
			{
			 
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=8');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=9');</script>";
			}
		
	}
	break;
	
	
	case 'edit_img':
	
			$image_id			 = 	isset($_POST['eid'])?$_POST['eid']:$image_id;
      		$image_name		     =	isset($_FILES['up_image'])?$_FILES['up_image']:$image_name;
			$image_cat			 =  isset($_POST['e_imgcategory'])?$_POST['e_imgcategory']:$image_cat;
			$image_cat_txt		 =  isset($_POST['e_imgcategory2'])?$_POST['e_imgcategory2']:$image_cat_txt;
			$alt_text		     =	isset($_POST['alttag'])?$_POST['alttag']:$alt_text;
			
			$upimage_fast		=	isset($_POST['pim1'])?$_POST['pim1']:$alt_text;
			$file_name			 =	'up_image';
	
			if($image_cat_txt != ''){
			$cat_name = $image_cat_txt;
			}
			else
			{
				$cat_name = $image_cat;
			}
			
			//echo $cat_name; exit;
	
			if($_FILES['up_image']['name'] =='')
			{
				$up_image =	$upimage_fast;
			}
			else
			{
				$up_image = File_upload::Image_upload_Gallery($image_id,$file_path,$file_path_thumb,$image_name,$file_name,"images.php",$upimage_fast);
			}
			if($cat_name == '0')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=104');</script>";	
			}
			else
			{
				$regResult= Gallary :: Update_image($image_id,$up_image,$cat_name,$alt_text);
				if($regResult==true)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=105');</script>";	
	
				}
				elseif($regResult==false)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../images.php?msg=106');</script>";
				}
		
			}
	break;
	
	
	case 'delete':
	
	$image_id	=	isset($_POST['imageid'])?$_POST['imageid']:'';
	$img_remove  = Gallary:: ImageFromImageid($image_id);
		//if($img_remove['image_name'] != ''){
		//$imgremove  = File_upload:: RemoveImage($file_path,$img_remove['image_name'],$file_path_thumb);
		//}
	
	$deleteResults = Gallary:: DeleteImage($image_id); 
	
	if($deleteResults){
            echo json_encode($deleteResults);
        }
	break;

	case 'deleteAll':
	
	$albumid	=	isset($_POST['albumid'])?$_POST['albumid']:'';
	//$img_remove  = Gallary:: ImageFromImageid($image_id);
		//if($img_remove['image_name'] != ''){
		//$imgremove  = File_upload:: RemoveImage($file_path,$img_remove['image_name'],$file_path_thumb);
		//}
	
	$deleteResults = Gallary:: DeleteImageAll($albumid); 
	if($deleteResults){
            echo json_encode(true);
        }
	break;
	
	
}	
?>