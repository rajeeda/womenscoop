<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once('classes/about_us_doc.class.php');
$doc_id		=isset($_GET['doc_id'])?$_GET['doc_id']:'';
$doc_cate_id=isset($_GET['doc_cate_id'])?$_GET['doc_cate_id']:'';

$get_user_doc=about_us_Document::get_user_doc($doc_id,$doc_cate_id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('images/user2.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="64%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="36%"><div id="content2">
      <table width="330" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="48"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
          </a><span class="txt_ash">Home</span></div></td>
          <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="61"><div align="center"><a href="about_us_doc.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/categories.png',1)"><img src="images/my_pro.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
          Board member Document</div></td>
          <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="109"><div align="center"><img src="images/templatemanager.png" width="48" height="48" /><br />
            Edit Document</div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist"><h3>Insert New Publication Documents</h3>   </td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5">
          	<form action="controlers/about_us_doc_controler.php?mode=edit_doc" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <table width="93%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
              
              <tr>
                <h6 style="color:#A52A2A"><?php include('messages/aboutus.doc.message.php'); ?></h6>
                </div></td>
                </tr>
  <input type="hidden" id="hdn_doc_id" name="hdn_doc_id" value="<?php echo $doc_id;?>" />
 <input type="hidden" id="hdn_doc_cate_id" name="hdn_doc_cate_id" value="<?php echo $doc_cate_id;?>" />
              
              <tr>
                <td height="66" valign="top"><table width="100%" height="219" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="32" valign="top" class="login_text">Document Folder Name</td>
                    <td align="center" valign="top" class="login_text">:</td>
                    <td colspan="5" valign="top"> 
                    <select name="cmb_doc_type2" id="cmb_doc_type2" >
                      <option value="Select">Select Document</option>
                      <?php 
					 	$doctyep= about_us_Document :: Doc_type();
					  	for($dt=1;$dt<=count($doctyep);$dt++)
						{
						$rowdt = each($doctyep); 
						?>
                      <option value="<?php echo $rowdt["value"]["doc_type_id"]; ?>" <?php if($get_user_doc["doc_type"] == $rowdt["value"]["doc_type_id"]){?>selected="selected"<?php }?>> <?php echo $rowdt["value"]["doc_type_name"];  ?></option>
                      <?php
						 }
					  ?>
                    </select>
                    <input type="hidden" id="hdn_cmb_doc_type" name="hdn_cmb_doc_type" value="<?php echo $cat_name_using_id['doc_cate_name']; ?>" /></td>
                    </tr>
                  <tr>
                    <td width="138" height="32" valign="top" class="login_text">Document Category</td>
                    <td width="30" align="center" valign="top" class="login_text"><strong>:</strong></td>
                    <td colspan="3" valign="top">
                    <?php
					$cat_name_using_id=about_us_Document::get_cat_name($doc_cate_id);
					?>
                    <select name="cmb_doc_type" id="cmb_doc_type" >
                      <option value="Select">Select Document</option>
                      <?php 
					 	$catname= about_us_Document :: about_us_Doc();
					  	for($a=1;$a<=count($catname);$a++)
						{
						$row = each($catname); 
						?>
                      <option value="<?php echo $row["value"]["doc_cate_name"]; ?>" <?php if($cat_name_using_id['doc_cate_name']==$row["value"]["doc_cate_name"]){?>selected="selected"<?php }?>> <?php echo $row["value"]["doc_cate_name"];?></option>
                      <?php
						 }
					  ?>
                    </select>
                    <input type="hidden" id="hdn_cmb_doc_type" name="hdn_cmb_doc_type" value="<?php echo $cat_name_using_id['doc_cate_name']; ?>" />
                    </td>
                    <td width="59" valign="top" class="login_text">Re name</td>
                    <td width="515" valign="top"><label>
                      <input name="txt_doc_cate" type="text" id="txt_doc_cate" size="45" />
                    </label></td>
                  </tr>
                  <tr>
                    <td height="29" valign="top" class="login_text">Document Title</td>
                    <td align="center" valign="top" class="login_text"><strong>:</strong></td>
                    <td colspan="5" valign="top"><label>
                      <input name="txt_doc_title" type="text" id="txt_doc_title" value="<?php echo $get_user_doc["doc_title"];?>" size="45" />
                    </label></td>
                  </tr>
                  <tr>
                    <td height="29" valign="top" class="login_text">Document</td>
                    <td align="center" valign="top" class="login_text"><strong>:</strong></td>
                    <td colspan="5" valign="top">
                    <?php echo $get_user_doc["doc_file_name"];?><br />
                    <label>
                      <input type="file" name="up_doc" id="up_doc" />
                    </label>
                    
                      <input type="hidden" id="hdn_up_doc" name="hdn_up_doc" value="<?php echo $get_user_doc["doc_file_name"];?>"/>
                    </td>
                  </tr>
                  <tr>
                    <td height="24" valign="top" class="login_text">Board members</td>
                    <td align="center" valign="top" class="login_text"><strong>:</strong></td>
                    <td colspan="5" valign="top">
                    	<table width="100%">
                        
                        <?PHP							
							$user_level = about_us_Document::board_members();
							for($a=0;$a<count($user_level);$a++)
							{								
								$row1=each($user_level);
								$get_user_level=about_us_Document::get_user_level($doc_id,$row1['value']['user_level_id']);
						?>                       
                        	<tr>
                            	<td width="2%">
                                	<input type="checkbox" name="chk_<?php echo $row1['value']['user_level_id'];?>" id="chk_<?php echo $row1['value']['user_level_id'];?>" <?php if($get_user_level['display']==1){echo "checked=\"checked\"" ;}?> />
                                </td>
                                <td width="1%">&nbsp;</td>
                                <td width="97%"><?php echo $row1['value']['user_level_name'];?></td>
                            </tr>
                        <?php
							}
						?>
                        
                        <input name="hdn_num_members" type="hidden" value="<?php echo count($user_level); ?>" />
                        </table>
                    </td>
                    </tr>
                  <tr>
                    <td height="24" valign="top" class="login_text">&nbsp;</td>
                    <td align="center" valign="top" class="login_text">&nbsp;</td>
                    <td colspan="5" valign="top">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="24" class="login_text">&nbsp;</td>
                    <td align="center" valign="middle" class="login_text">&nbsp;</td>
                    <td colspan="5">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="25" class="login_text">&nbsp;</td>
                    <td height="25" class="login_text">&nbsp;</td>
                    <td width="99" height="25" align="right" class="login_text"><input type="submit" name="button" id="button" value="Update" /></td>
                    <td width="14" class="login_text">&nbsp;</td>
                    <td width="96" align="left" class="login_text"><input type="button" name="btn_cancel" id="btn_cancel" value="Cancel" onclick="window.location.href='about_us_doc.php'" /></td>
                    <td height="25" colspan="2" class="login_text">&nbsp;</td>
                    </tr>
                </table></td>
              </tr>
            </table>
           </form>
          </td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td class="adminlist">&nbsp;</td>
  </tr>
  <tr>
    <td><center><?php include (ADMIN_TPL_PATH.'footer.tpl');?></center></td>
  </tr>
</table>
</body>
</html>
