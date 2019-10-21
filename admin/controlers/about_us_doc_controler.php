<?php
	require_once('../config/config.php');
	require_once(CLASS_PATH.'db.class.php');
	require_once('../classes/about_us_doc.class.php');
	require_once('upload_controller.php');
	
	
	
	$mode=isset($_GET['mode'])?$_GET['mode']:'';
	$t	 =isset($_GET['t'])?$_GET['t']:'';
	$file_p						='';

	switch($mode)
	{
			case 'add_doc':
				$cmb_doctype	=isset($_POST['cmb_doc_type2'])?$_POST['cmb_doc_type2']:'';
				$cmb_doc_type	=isset($_POST['cmb_doc_type'])?$_POST['cmb_doc_type']:'';
				$cmb_doc_folder_name	=isset($_POST['cmb_doc_folder_name'])?$_POST['cmb_doc_folder_name']:'';
				//$txt_doc_folder_name	=isset($_POST['txt_doc_folder_name'])?$_POST['txt_doc_folder_name']:'';
				$txt_doc_cate	=isset($_POST['txt_doc_cate'])?$_POST['txt_doc_cate']:'';
				$txt_doc_title	=isset($_POST['txt_doc_title'])?$_POST['txt_doc_title']:'';
				$up_doc			=isset($_FILES['up_doc'])?$_FILES['up_doc']:'';
				$up_doc_name	=isset($_FILES['up_doc'])?$_FILES['up_doc']['name']:'';
				$add_date		=date('Y.m.d');
				$update			=date('Y.m.d');
			 	$count 			=isset($_POST['hdn_num_members'])?$_POST['hdn_num_members']:''; 

				if($cmb_doctype=="Select")
				{
					echo "<script type=\"text/javascript\">
					document.location.replace('../new_about_us_doc.php?msg=1');</script>";
				}
				elseif($cmb_doc_type=="Select" && $txt_doc_cate=="")
				{
					echo "<script type=\"text/javascript\">
					document.location.replace('../new_about_us_doc.php?msg=1');</script>";
				}
				elseif($cmb_doc_type!="Select" && $txt_doc_cate!="")
				{
					echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_doc.php?msg=5');</script>";
				}
				
				
				//echo "testing point 01"; exit;
					
					/////////////////IF Select for combo box item/////////////////
				
				if($cmb_doc_type!="Select" && $txt_doc_cate=="")
				{
				   //echo "testing point 02"; exit;
				   $type	=$cmb_doc_type;
					//echo $type."<br/>"; 
					//$cate_id=$cmb_doc_type;
					$file_path	= "../../upload_images/about_us_member_documents/".$type."/";
					$file_name	= 	'up_doc';
					$page		= 	"new_about_us_doc.php";	
					$file_name1	=	'att_file1';
					$up_type	=	'ud';
					if($txt_doc_title=="")
					{					
						echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_doc.php?msg=3');</script>";
					}
					
					if ($_FILES['up_doc']['name']!="") //  IF for check up doc field...
					{
					  define("FILEREPOSITORY","../../upload_images/about_us_member_documents/")."<BR>";
					  
					
					 if(is_dir(FILEREPOSITORY.$type)) /// IF for check repository exist
						{
							//echo "Test".FILEREPOSITORY.$type; exit;
							$doc_cate_id=about_us_Document::get_user_doc_cate_id($type);
							$cate_id	=$doc_cate_id['doc_cate_id'];
							echo $file_path."<BR>";
							echo $file_name."<BR>";
							echo $page."<BR>";
							
							$u_usedoc = File_upload::Attach_File_upload_about_us_doc($file_path,$file_name,$page,$file_p);
							echo $u_usedoc; 
							
							if($u_usedoc!="")
							{
								$insert_doc	=about_us_Document::insert_doc($cate_id,$txt_doc_title,$u_usedoc,$add_date,$update,$cmb_doctype,$cmb_doc_folder_name);
								if($insert_doc==true)/////////////***/*/***//////////
								{					
									$user_doc_id=about_us_Document::get_user_doc_id($u_usedoc);
									$doc_id		=$user_doc_id[0];
									
									$user_level = about_us_Document::board_members();
									for($a=1;$a<=count($user_level);$a++)
									{
										$row1=each($user_level);
										$user_level_id=$row1['value']['user_level_id'];
										$chkname = "chk_".$user_level_id;										
										$display=isset($_POST[$chkname])?1:0;											
										$result=about_us_Document::insert_doc_display($doc_id,$user_level_id,$txt_doc_title,$cate_id,$u_usedoc,$display,$cmb_doctype,$cmb_doc_folder_name);
										
																			
									}
									echo "<script type=\"text/javascript\">document.location.replace('../about_us_doc.php?msg=8');</script>";
								}
								else
								{
									echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_doc.php?msg=7');</script>";
								}
							}/////////////***/*/***//////////	
							
						}/// END IF for check repository exist
						else
						{
							echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_doc.php?msg=9');</script>";	
						}
					}//  END IF for check up doc field...
					else
					{
						//echo "testing point 03"; exit;
						echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_doc.php?msg=4');</script>";
					}
				}/////////////////END IF Select for combo box item/////////////////
				elseif($cmb_doc_type=="Select" && $txt_doc_cate!="")
				{					
					//echo "testing point 04"; exit;
					$type=$txt_doc_cate;
					$file_path	= "../../upload_images/about_us_member_documents/".$type."/";
					$file_name	= 	'up_doc';
					$page		= 	"new_about_us_doc.php";	
					$file_name1	=	'att_file1';
					$up_type	=	'ud';
					
					if($txt_doc_title=="")
					{
						echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_doc.php?msg=3');</script>";
					}
					if ($_FILES['up_doc']['name']!="") 
					{
						//echo "testing point 05"; exit;
					 define("FILEREPOSITORY","../../upload_images/about_us_member_documents/")."<BR>";
					  if(! is_dir(FILEREPOSITORY.$type)) 
						{
							mkdir(FILEREPOSITORY.$type);
							$insert_cate=about_us_Document::insert_cate($type);	
							if($insert_cate==true)/////////////**/*/*/*/**//////////
							{
								$doc_cate_id=about_us_Document::get_user_doc_cate_id($type);
								$cate_id	=$doc_cate_id['doc_cate_id'];
		////////////////////////////////////////////////////////////////////////////////////////						
								$u_upfile = File_upload :: Attach_File_upload_about_us_doc($file_path,$file_name,$page,$file_p);
								//echo "testing point 08"; exit;
								if($u_upfile!="")
								{
									//echo "testing point 09"; exit;
									$insert_doc	= about_us_Document :: insert_doc($cate_id,$txt_doc_title,$u_upfile,$add_date,$update,$cmb_doctype,$doc_folder_id);
									//echo "testing point 07"; exit;
									if($insert_doc==true)/////////////***/*/***//////////
									{					
										$user_doc_id=about_us_Document::get_user_doc_id($u_upfile);
										$doc_id		=$user_doc_id[0];
										
										$user_level = about_us_Document::board_members();
										for($a=1;$a<=count($user_level);$a++)
										{
											$row1=each($user_level);
											$user_level_id=$row1['value']['user_level_id'];
											$chkname = "chk_".$user_level_id;
											$display=isset($_POST[$chkname])?1:0;
											
												$result=about_us_Document::insert_doc_display($doc_id,$user_level_id,$txt_doc_title,$cate_id,$u_upfile,$display,$cmb_doctype,$doc_folder_id);
											
										 }
										
										  echo "<script type=\"text/javascript\">document.location.replace('../about_us_doc.php?msg=8');</script>";
									  }
									  else
									  {
										  echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_doc.php?msg=7');</script>";
									  }
									}/////////////***/*/***//////////																					
							
							}//end if  insert_category 
							else
							{
								echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_doc.php?msg=6');</script>";	
							}/////////////**/*/*/*/**//////////
							
						}
						else
						{
							echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_doc.php?msg=2');</script>";
						}
					}
					else
					{
						echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_doc.php?msg=4');</script>";
					}
					
					
					
					/*$result=user_level::insert_user_type($type,$txt_discription);
					if($result==true)
					{
						$result01=user_level::get_user_type_id($type);
						$type=$result01['user_level_id'];
						echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_member.php?msg=2&type_id=$type');</script>";
					}
					else
					{
						echo "<script type=\"text/javascript\">document.location.replace('../new_about_us_member_type.php?msg=3');</script>";
					}*/
				}
			break;			
			
//////////////////////////////////////////////////////////////////////////////////////////////////			
			case 'edit_doc':			
				$doc_type 		=isset($_POST['cmb_doc_type2'])?$_POST['cmb_doc_type2']:''; 
				$cmb_doc_type	=isset($_POST['cmb_doc_type'])?$_POST['cmb_doc_type']:'';
				$txt_doc_cate	=isset($_POST['txt_doc_cate'])?$_POST['txt_doc_cate']:'';
				$txt_doc_title	=isset($_POST['txt_doc_title'])?$_POST['txt_doc_title']:'';
				$hdn_up_docss	=isset($_POST['hdn_up_doc'])?$_POST['hdn_up_doc']:'';
				$up_doc			=isset($_FILES['up_doc'])?$_FILES['up_doc']:'';
		   		$up_doc_name	=isset($_FILES['up_doc'])?$_FILES['up_doc']['name']:$hdn_up_docss; 				
				
				$add_date		=date('Y.m.d');
				$update	 		=date('Y.m.d');
			 	$count 			=isset($_POST['hdn_num_members'])?$_POST['hdn_num_members']:'';
				$doc_id		 	=isset($_POST['hdn_doc_id'])?$_POST['hdn_doc_id']:'';
		 		$doc_cate_id	=isset($_POST['hdn_doc_cate_id'])?$_POST['hdn_doc_cate_id']:'';
				$hdn_cmb_doc_type=isset($_POST['hdn_cmb_doc_type'])?$_POST['hdn_cmb_doc_type']:'';
				
				
				
				//echo $hdn_cmb_doc_type;exit;
				if($cmb_doc_type=="Select" && $txt_doc_cate=="")
				{
					echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_doc.php?msg=1&doc_id=$doc_id&doc_cate_id=$doc_cate_id');</script>";
				}
				
				elseif($cmb_doc_type!=$hdn_cmb_doc_type && $txt_doc_cate!="")
				{					
					echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_doc.php?msg=10&doc_id=$doc_id&doc_cate_id=$doc_cate_id');</script>";					
				}
				
				elseif($cmb_doc_type==$hdn_cmb_doc_type && $txt_doc_cate!="")
				{	
					$file_path	= "../../upload_images/about_us_member_documents/";
					$type		=	$txt_doc_cate;
					$file_name	= 	'up_doc';
					$page		= 	"edit_about_us_doc.php";	
					$file_name1	=	'att_file1';
					$up_type	=	'ud';
					if($txt_doc_title=="")
					{
						echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_doc.php?msg=3&doc_id=$doc_id&doc_cate_id=$doc_cate_id');</script>";
					}					
											
					  //define("FILEREPOSITORY","../../upload_images/about_us_member_documents/")."<BR>";
					  if(is_dir($file_path.$hdn_cmb_doc_type)) /// IF for check repository exist
						{							
							rename($file_path."/".$hdn_cmb_doc_type,$file_path."/".$type);
							//$doc_cate_id=about_us_Document::get_user_doc_cate_id($type);
							//$cate_id	=$doc_cate_id['doc_cate_id'];
							if (($_FILES['up_doc']['name'])!='') //  IF for check up doc field...
							{
								$regResult = File_upload :: Attach_File_upload_about_us_doc($file_path."/".$type,$file_name,$page,$file_p);
							}//  END IF for check up doc field...
							else
							{
								$regResult	= $hdn_up_docss;
								$up_doc_name=$hdn_up_docss;
							}
							$update_cate	=about_us_Document::update_cate($doc_cate_id,$type,$update);
							if($update_cate==true)
							{							
								
								if($regResult!="")
								{
								  //$insert_doc	=about_us_Document::insert_doc($cate_id,$txt_doc_title,$up_doc_name,$add_date,$update);
								  $update_doc	=about_us_Document::update_doc($doc_id,$doc_cate_id,$txt_doc_title,$regResult,$update,$doc_type);								  
								  
								  if($update_doc==true)/////////////***/*/***//////////
								  {					
									  //$user_doc_id=about_us_Document::get_user_doc_id($up_doc_name);
									  //$doc_id		=$user_doc_id['doc_id'];
									  
									  $user_level = about_us_Document::board_members();
									  for($a=1;$a<=count($user_level);$a++)
									  {
										  $row1=each($user_level);
										  $user_level_id=$row1['value']['user_level_id'];
										  $chkname = "chk_".$user_level_id;										
										  $display=isset($_POST[$chkname])?1:0;											
										  $result=about_us_Document::update_doc_display($doc_id,$user_level_id,$txt_doc_title,$cate_id,$regResult,$display,$doc_type);
										  
									  }
									  
									  echo "<script type=\"text/javascript\">document.location.replace('../about_us_doc.php?msg=12&doc_id=$doc_id&doc_cate_id=$doc_cate_id');</script>";
								   }
								  else
								  {
									echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_doc.php?msg=13&doc_id=$doc_id&doc_cate_id=$doc_cate_id');</script>";
								  }
							    }/////////////***/*/***//////////								
							}
							else
							{
								echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_doc.php?msg=11&doc_id=$doc_id&doc_cate_id=$doc_cate_id');</script>";
							}						
							
						}/// END IF for check repository exist
						else
						{
							echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_doc.php?msg=9&doc_id=$doc_id&doc_cate_id=$doc_cate_id');</script>";	
						}
				
				}
				
////////////////////////////////////////////////////////////////////////////////////////////////				
				elseif(($cmb_doc_type==$hdn_cmb_doc_type && $txt_doc_cate=="")||($cmb_doc_type!=$hdn_cmb_doc_type && $cmb_doc_type!="Select" && $txt_doc_cate==""))
				{

					$file_path	= "../../upload_images/about_us_member_documents/";
					$type		=$cmb_doc_type;
					$file_name	= 	'up_doc';
					$page		= 	"edit_about_us_doc.php";	
					$file_name1	=	'att_file1';
					$up_type	=	'ud';
					if($txt_doc_title=="")
					{
						echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_doc.php?msg=3&doc_id=$doc_id&doc_cate_id=$doc_cate_id');</script>";
					}
					
					if (($_FILES['up_doc']['name'])!='') //  IF for check up doc field...
					{
						
						$regResult = File_upload :: Attach_File_upload_about_us_doc($file_path."/".$type,$file_name,$page,$file_p);
					}//  END IF for check up doc field...
					else
					{
						$regResult= $hdn_up_docss;
						$up_doc_name=$hdn_up_docss;
					}	
					  //define("FILEREPOSITORY","../../upload_images/about_us_member_documents/")."<BR>";
					  if(is_dir($file_path.$type)) /// IF for check repository exist
						{							
								
								if($regResult!="")
								{
								  //echo $up_doc_name;exit;	
								  $doc_cate_id=about_us_Document::get_user_doc_cate_id($type);
								  $cate_id	=$doc_cate_id['doc_cate_id'];	
									
								  $update_doc	=about_us_Document::update_doc($doc_id,$cate_id,$txt_doc_title,$regResult,$update,$doc_type);								  
								  
								  if($update_doc==true)/////////////***/*/***//////////
								  {					
									  $user_level = about_us_Document::board_members();
									  for($a=1;$a<=count($user_level);$a++)
									  {
										  $row1=each($user_level);
										  $user_level_id=$row1['value']['user_level_id'];
										  $chkname = "chk_".$user_level_id;										
										  $display=isset($_POST[$chkname])?1:0;											
										  $result=about_us_Document::update_doc_display($doc_id,$user_level_id,$txt_doc_title,$cate_id,$regResult,$display,$doc_type);
										 										
									  }
									  echo "<script type=\"text/javascript\">document.location.replace('../about_us_doc.php?msg=12&doc_id=$doc_id&doc_cate_id=$cate_id');</script>";
								   }
								  else
								  {
									echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_doc.php?msg=13&doc_id=$doc_id&doc_cate_id=$doc_cate_id');</script>";
								  }
							    }/////////////***/*/***//////////								
													
							
						}/// END IF for check repository exist
						else
						{
							echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_doc.php?msg=9&doc_id=$doc_id&doc_cate_id=$doc_cate_id');</script>";	
						}								
					
					/*echo "<script type=\"text/javascript\">document.location.replace('../edit_about_us_member_type.php?msg=8&doc_id=$doc_id&doc_cate_id=$doc_cate_id');</script>"; */					
				
				}			
				
			break;
//////////////////////////////////////////////////////////////////////////////////////////////////			
	
		case 'delete':
			$doc_id=isset($_GET['doc_id'])?$_GET['doc_id']:'';
			$doc_cate_id=isset($_GET['doc_cate_id'])?$_GET['doc_cate_id']:'';
			$doc_name=isset($_GET['doc_name'])?$_GET['doc_name']:'';
			$doc_cat_name=isset($_GET['doc_cat_name'])?$_GET['doc_cat_name']:'';
			
			//echo $doc_id.$doc_cate_id;exit;
			$result=about_us_Document::delete_doc($doc_id,$doc_name,$doc_cate_id,$doc_cat_name);
			if($result==true)
			{
				$result01=about_us_Document::delete_doc_dis($doc_id);
				if($result01==true)
				{
					echo "<script type=\"text/javascript\">document.location.replace('../about_us_doc.php?msg=16');</script>";
				}
				else
				{
					echo "<script type=\"text/javascript\">document.location.replace('../about_us_doc.php?msg=15');</script>";
				}
			}
			else
			{
				echo "<script type=\"text/javascript\">document.location.replace('../about_us_doc.php?msg=15');</script>";
			}
		
		break;
	}
?>