<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once('../classes/news.class.php');
require_once('../classes/event.class.php');

require_once('upload_controller.php');


$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;


$file_path				= "../../upload_images/event_image/";
$file_path_thumb		= "../../upload_images/event_image/thumb/";
$type = 'E';
$up_image ='';
$file_p		='';

switch($mode)
{
	
	case 'add_event':
	
	$event_name		     =	isset( $_POST['txt_event_name'])?$_POST['txt_event_name']:$event_name;
	$event_image		 =  isset($_FILES['up_event_image'])?$_FILES['up_event_image']:'';
	$start_date		     =	isset( $_POST['txt_start_date'])?$_POST['txt_start_date']:$start_date;
	$end_date		     =	isset( $_POST['txt_end_date'])?$_POST['txt_end_date']:$end_date;
	$countryName		 =	isset( $_POST['cmb_countryName'])?$_POST['cmb_countryName']:$countryName;
	$event_description	 =	isset( $_POST['event_desc'])?$_POST['event_desc']:$event_description;
	$type				 =	isset( $_POST['rdo_event_type'])?$_POST['rdo_event_type']:$type;
	$location_description=	isset( $_POST['txt_location'])?$_POST['txt_location']:$location_description;
	$txt_short_des =isset( $_POST['txt_short_des'])?$_POST['txt_short_des']:$txt_short_des;
	$event_description=addslashes($event_description);
	$txt_short_des=addslashes($txt_short_des);
	$file_name			 =	'up_event_image';
	
	if($event_name=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_event.php?msg=1');</script>";	
	}
	elseif($start_date=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_event.php?msg=2');</script>";	
	}
	elseif($countryName==0)
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_event.php?msg=3');</script>";
	}
	else
	{
		$isExists = Event::ExistsEvent($event_name);
		if($isExists==true)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_event.php?msg=4');</script>";		
		}
		elseif($isExists==false)
		{	
			if($_FILES['up_event_image']['name'] !='')
			{
				$up_image = File_upload::Image_upload('',$file_path,$file_path_thumb,$event_image,$file_name,"new_event.php",$file_p);
			}
				$regResult= Event:: ADDEvent($event_name,$start_date,$end_date,$countryName,$event_description,$type,$location_description,$up_image,$txt_short_des); 
			if($regResult==true)
			{
			 	$event_pass_id = Event::ExistsEvent($event_name);
				$event_id = $event_pass_id['event_id']; 
				//echo $event_id; exit;
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../event_attechments.php?event_id=".$event_id."&msg=5');</script>";		
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_event.php?msg=6');</script>";
			}
		}
	}
	break;
	
	//attchments
	case 'uploads':

	$event_id      		 =isset($_POST['hdn_event_id'])?$_POST['hdn_event_id']:$news_id;
	$doc_title      	 =isset($_POST['txt_attachment'])?$_POST['txt_attachment']:$doc_title;
	$attachment			 =isset($_FILES['attach_document'])?$_FILES['attach_document']:$attachment;
	$add_date			 = date('Y-m-d');
	$file_name			 = 'attach_document';
	$page				 = "event_attechments.php";
	$type 					= "ED";
	
	//echo "sadasd"; exit;
	if($doc_title=='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../event_attechments.php?event_id=".$event_id."&msg=11');</script>";	
	}
	else
	{
		if($_FILES['attach_document']['name'] !=''){			
			$regResult = File_upload :: Attach_File_upload($event_id,$file_path,$doc_title,$attachment,"attach_document",$page,$file_p,$type);
		}
				
		if($regResult==true)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../event_attechments.php?event_id=".$event_id."&msg=13');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../event_attechments.php?event_id=".$news_id."&msg=14');</script>";
			}
		
	}
	break;
	
	
	
	
	case 'edit_event':	

		$event_id		     =	isset( $_POST['hdn_event_id'])?$_POST['hdn_event_id']:$event_id;
		$event_name		     =	isset( $_POST['txt_event_name'])?$_POST['txt_event_name']:$event_name;
		$event_image		 =  isset($_FILES['up_event_image'])?$_FILES['up_event_image']:$event_image;
		$start_date		     =	isset( $_POST['txt_start_date'])?$_POST['txt_start_date']:$start_date;
		$end_date		     =	isset( $_POST['txt_end_date'])?$_POST['txt_end_date']:$end_date;
		$countryName		 =	isset( $_POST['cmb_countryName'])?$_POST['cmb_countryName']:$countryName;
		$event_description	 =	isset( $_POST['event_desc'])?$_POST['event_desc']:$event_description;
		$type				 =	isset( $_POST['rdo_event_type'])?$_POST['rdo_event_type']:$type;
		$location_description=	isset( $_POST['txt_location'])?$_POST['txt_location']:$location_description;
		$txt_short_des =isset( $_POST['txt_short_des'])?$_POST['txt_short_des']:$txt_short_des;
		$event_description=addslashes($event_description);
		$txt_short_des=addslashes($txt_short_des);
		
		$file_img_name		 =	isset( $_POST['hdn_event_image'])?$_POST['hdn_event_image']:$file_img_name;
		
		$file_name			 =	'up_event_image';
	
		if($event_name=='')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_event.php?msg=1&event_id=".$event_id."');</script>";	
		}
		elseif($start_date=='')
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_event.php?msg=2&event_id=".$event_id."');</script>";	
		}
			elseif($countryName==0)
		{
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_event.php?msg=3&event_id=".$event_id."');</script>";
		}
		else
		{
		
				if($_FILES['up_event_image']['name'] !='')
				{
				$up_image = File_upload::Image_upload('',$file_path,$file_path_thumb,$event_image,$file_name,"edit_event.php",$file_img_name);
				}
				else
				{
					$up_image = $file_img_name;
				}
				//echo $up_image ; exit;
				$regResult= Event::updateEvent($event_id,$event_name,$start_date,$end_date,$countryName,$event_description,$type,$location_description,$up_image,$txt_short_des);
				if($regResult==true)
				{
			 	
						echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../event_attechments.php?event_id=".$event_id."&msg=7');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_event.php?msg=8&event_id=".$event_id."');</script>";
			}
		
	}
	
	break;
	
	case 'delete':
	
		$event_id	=	isset( $_GET['eventid'])?$_GET['eventid']:$event_id;
		$deleteResults = Event::DeleteEvent($event_id); 
	
		if($deleteResults==true)
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../events.php?msg=9');</script>";
		elseif($deleteResults==false)
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../events.php?msg=10');</script>";
	
	break;
	
	case 'deletefile':
	
		$file_id	=	isset( $_GET['fileid'])?$_GET['fileid']:$file_id;
		$event_file	= News :: GetNewsDetailsFromFile($file_id);
		$deleteResults = News :: Deletefile($file_id); 
		
	
		if($deleteResults==true)
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../event_attechments.php?event_id=".$event_file['record_id']."&msg=15');</script>";
		elseif($deleteResults==false)
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../event_attechments.php?event_id='".$event_file['record_id']."'&msg=16');</script>";
	
	break;
	
	case 'eventhome':
	
	 $event_id	=	isset( $_GET['eventid'])?$_GET['eventid']:$event_id;
	 $event_home	=	isset( $_GET['homeevent'])?$_GET['homeevent']:$event_home;
	//echo $event_id."  ".$event_home; exit;
	$updateResults = Event :: EventsHome($event_id,$event_home); 
	
	if($updateResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../events.php?msg=11');</script>";
	elseif($updateResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../events.php?msg=12');</script>";
	
	break;
}	
?>