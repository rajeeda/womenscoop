<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
//require_once(ADMIN_CLASS_PATH.'publication_doc.class.php');
require_once(ADMIN_CLASS_PATH.'news.class.php');
require_once('upload_controller.php');

$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;

$file_path					= "../../upload_images/publication_Documents/";
$file_path_thumb			= "../../upload_images/publication_Documents/thumb/"; 

$file_p						='';

//echo $_GET['type'];exit;

switch($mode)
{
	case 'addpub_doc':
	
	$pub_doc_type_id			=	isset($_POST['hdn_pub_type'])?$_POST['hdn_pub_type']:'';
	$record						=	isset($_POST['hdn_red_type'])?$_POST['hdn_red_type']:'';
	$year					    =	isset($_POST['cmb_year'])?$_POST['cmb_year']:'';
	$record_type				=	$record;
	$pub_doc_name				=	isset($_POST['txt_document_name'])?$_POST['txt_document_name']:'';
	$pub_doc_name_cmb			=	isset($_POST['pub_doc_name'])?$_POST['pub_doc_name']:'';
	$add_date					=	date('Y-m-d');
	$pub_doc_description		=	'';

	$pub_doc_id					= 	isset($_POST['pub_doc_name'])?$_POST['pub_doc_name']:'';
	$Publication_Document_Title	=   isset($_POST['txt_Publication_Document_Title'])?$_POST['txt_Publication_Document_Title']:'';
	$pub_doc_attachment			=	isset($_FILES['up_file'])?$_FILES['up_file']:'';
	
	
	
	
	$file_name					= 	'up_file';
	$page						= 	"new_publication_doc.php";	
	$file_name1					=	'att_file1';
	$type						=	'P';
	//$pub_array					=	array(Publication_Document_Title=>$Publication_Document_Title,pub_doc_attachment=>$pub_doc_attachment);
	 
	//echo $pub_doc_type_id;
	if($pub_doc_type_id =='0')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_publication_doc.php?msg=1&doc_type=$pub_doc_type_id&pub_array=$pub_array');</script>";	
	}	
	elseif($pub_doc_name =='' && $pub_doc_name_cmb == '0' )
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_publication_doc.php?msg=2&doc_type=$pub_doc_type_id&pub_array=$pub_array');</script>";
	}
	else
	{			
	 	//$isExists = Publication_Document :: ExistsPublication_doc($record_type);
		if($pub_doc_name != '')
		{
			$regResult = Publication_Document :: New_Publication_document($pub_doc_type_id,$record_type,$year,$pub_doc_name,$add_date);
			$pub_id = Publication_Document :: GetPubDoc_Id($record_type,$pub_doc_name);
			$pub_doc_id = $pub_id['maxval'];
		}	
		
		//}
		
			/*************************************************************************************************/
			
			if($_FILES['up_file']['name'] !=''){	
				$regResult = File_upload:: Attach_File_upload_pub_edit('',$pub_doc_id,$file_path,$pub_doc_attachment,$Publication_Document_Title,$pub_doc_description,$file_name,$page,$file_p,$record_type,$add_date);
			}
			else
			{
				$regResult = Publication_Document :: NewPub_doc_Files($Publication_Document_Title,$pub_doc_description,'','',$record_type,$pub_doc_id,$add_date);
			}
			
			/*******************************************************************************************/
		if($regResult==true)
		{		
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../publication_doc.php?msg=5');</script>";
		}
		elseif($regResult==false)
		{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_publication_doc.php?msg=6&doc_type=$pub_doc_type_id&pub_array=$pub_array');</script>";
		}				
	}
	break;
	
	case 'edit_pub_doc':
	
	$pub_doc_id					=   isset($_POST['hdn_pub_id'])?$_POST['hdn_pub_id']:"";
	$pub_type_id				=	isset($_POST['cmb_doc_type'])?$_POST['cmb_doc_type']:"";
	$year					    =	isset($_POST['cmb_year'])?$_POST['cmb_year']:"";
	$pub_doc_name_cmb			=	isset($_POST['pub_doc_name'])?$_POST['pub_doc_name']:"";
	$pub_doc_name				=	isset($_POST['txt_document_name'])?$_POST['txt_document_name']:"";
	$hdn_pub_doc_name			=	isset($_POST['hdn_pub_doc_name'])?$_POST['hdn_pub_doc_name']:"";	
	$pub_doc_description		=	'';
	$add_date					=	date('Y-m-d');
	
	
	
	$page						= 	"edit_publication_doc.php";
	
	$file_name1					=	'att_file1';
	$type						=	'P';
	$pub_array					='';
		
	$pub_doc_attachment			=	isset($_FILES['up_file'])?$_FILES['up_file']:"";
	//$file_p					=	$_POST['hdn_file_name'];
	$file_name					= 	'up_file';
	$Publication_Document_Title	=   isset($_POST['txt_Publication_Document_Title'])?$_POST['txt_Publication_Document_Title']:"";
	$file_id					=   isset($_POST['hdn_file_id'])?$_POST['hdn_file_id']:"";
	$file_p 					= 	isset($_POST['hdn_file_name'])?$_POST['hdn_file_name']:"";
	 
	 $p_cat_name 	= Publication_Document :: GetPublicationDocumentCatagory($pub_type_id);
	 $record	 	= $p_cat_name['pub_cat_name'];
	 $record_type	= $record." ".$year;	
	 //echo $record; exit;
	
	if($pub_doc_name != '')
	{
		$Pdoc_name = $pub_doc_name;
	}
	else
	{
		$Pdoc_name = $pub_doc_name_cmb;
	}
	
	//echo $Pdoc_name; exit;
	if($record =='')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_publication_doc.php?msg=1&pub_doc_id=$pub_doc_id&pub_array=$pub_array');</script>";	
	}
	elseif($Pdoc_name == '')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_publication_doc.php?msg=2&pub_doc_id=$pub_doc_id&pub_array=$pub_array');</script>";
	}
	else
	{	
		
		$p_doc_name = Publication_Document :: getPubDocname($Pdoc_name);
		$pub_doc_id_new = $p_doc_name['publication_id'];
		//echo $pub_doc_id_new; exit;
		
		if($pub_doc_id_new != ''){
			//echo "aa"; exit;
			$up_result = Publication_Document :: Update_pub_doc_id($pub_doc_id,$pub_doc_id_new);
			//$result    = Publication_Document :: DeletepublicationDoc($pub_doc_id);
		}
		$regResult = Publication_Document :: Update_pub_doc($pub_doc_id,$pub_type_id,$record_type,$year,$month,$Pdoc_name,$add_date);		
		
		if($regResult==true)
		{	
					
			echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../publication_doc.php?msg=4');</script>";
		}
		elseif($regResult==false)
		{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_publication_doc.php?msg=6&pub_doc_id=$pub_doc_id');</script>";
		}				
	}
	
	
	case 'edit_file_data':
	
		$pub_doc_id					=   isset($_POST['hdn_pub_file_id'])?$_POST['hdn_pub_file_id']:$pub_doc_id;
		$Publication_Document_Title	=   isset($_POST['txt_Publication_Document_Title'])?$_POST['txt_Publication_Document_Title']:'';
		$pub_doc_attachment			=	isset($_FILES['up_file'])?$_FILES['up_file']:$pub_doc_attachment;
		$hdn_img_name				=   isset($_POST['hdn_img_name'])?$_POST['hdn_img_name']:$hdn_img_name;
		$hdn_file_type				=   isset($_POST['hdn_file_type'])?$_POST['hdn_file_type']:$hdn_file_type;
		$file_name					= 	'up_file';
		$page						= 	"new_publication_doc.php";
		
		if($_FILES['up_file']['name'] !=''){		
				$regResult = File_upload :: Attach_File_upload_pub_edit($pub_doc_id,'',$file_path,$pub_doc_attachment,$Publication_Document_Title,$pub_doc_description,$file_name,$page,$hdn_img_name,'','');
			}
			else
			{
				$regResult = Publication_Document :: Update_doc_file($pub_doc_id,$Publication_Document_Title,$hdn_img_name,$hdn_file_type);
			}
	
			if($regResult==true)
			{	
					
			echo "<script language=\"javascript\" type=\"text/javascript\">window.close();</script>";
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_publication_doc.php?msg=6&doc_id=$pub_doc_id');</script>";
			}	
	
	
	break;
	

	case 'delete':
	
	$pub_doc_id	=	isset( $_GET['pubdocid'])?$_GET['pubdocid']:$pub_doc_id;
	$deleteResults = Publication_Document::DeletepublicationDoc($pub_doc_id); 
	
	if($deleteResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../publication_doc.php?msg=7');</script>";
	elseif($deleteResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../publication_doc.php?msg=8');</script>";
	
	break;
	
	case 'deletedoc':
	
	$file_id		= isset( $_GET['docid'])?$_GET['docid']:$file_id;
	$selectpub_doc_id = Publication_Document :: SelectPub_doc_files($file_id);
	if($selectpub_doc_id['pub_doc_file'] == ''){
		//unlink ($file_path.$selectpub_doc_id['pub_doc_file']);
	}
	$deleteResults  = Publication_Document :: deletepubfile($file_id);
		
	if($deleteResults==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_publication_doc.php?pub_doc_id=".$selectpub_doc_id['record_id']."&msg=9');</script>";
	elseif($deleteResults==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_publication_doc.php?pub_doc_id='".$selectpub_doc_id['record_id']."'&msg=10');</script>";
	
	break;
	
	
}	
?>