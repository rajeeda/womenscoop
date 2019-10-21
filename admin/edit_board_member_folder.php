<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'board_member_folder.class.php');

$pub_type = BoardMemberFolder :: GetPublicationtype($_REQUEST['pub_type_id']);
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

<body onload="MM_preloadImages('images/frontpage2.png','images/user2.png','images/categories.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="64%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="36%"><div id="content"><table width="330" border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td width="48"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
              </a><span class="txt_ash">Home</span></div></td>
              <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="61"><div align="center"><a href="bord_member_folder.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/categories.png',1)"><img src="images/categories.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Board Member Folder</span> </div></td>
              <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="109"><div align="center"><img src="images/module.png" width="48" height="48" /><br />
              New Board Member Folder</div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist"><h3>Update  Publication Type</h3></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" enctype="multipart/form-data" action="controlers/folder_controler.php?mode=edit_pub_type">
            <table width="80%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
              
              <tr>
                <td colspan="4"><div id="error"><h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES.'folder.message.php'); ?></h6>
                    <span class="color_button">
                    <input type="hidden" name="hdn_pub_type_id" id="hdn_pub_type_id" value="<?php echo $pub_type['folder_id'];?>" />
                    </span></div></td>
                </tr>
              
              
              <tr>
                <td colspan="4" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">                  
                  <tr>
                    <td width="237" height="37" class="login_text"> Publication Type</td>
                    <td colspan="2"><input name="public_cat_type" type="text" class="login_text" id="public_cat_type"  value="<?php echo $pub_type['folders_name'];?>"/></td>
                  </tr>
                  <tr>
                    <td height="76" valign="top">Publication Type Description</td>
                    <td colspan="2" valign="top"><textarea name="pub_desc" cols="30" rows="4" class="login_text" id="pub_desc"><?php echo $pub_type['description'];?></textarea></td>
                  </tr>
                  <tr>
                    <td height="31" valign="top"> Image</td>
                    <td width="74" valign="top"><div align="center">
                        <img src="../upload_images/Publication/thumb/<?php echo $pub_type['folder_image'];?>" />
                        <input type="hidden" name="hdn_pub_type_img" id="hdn_pub_type_img" value="<?php echo $pub_type['folder_image'];?>" />
                    </div></td>
                    <td width="468" valign="bottom"><input name="pub_cat_image" type="file" class="login_text" id="pub_cat_image" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>Active</td>
                    <td colspan="2"><select name="cmb_act" id="cmb_act">
                     	<?php if($pub_type['activation']=='Y'){?>
                       <option value="Y" selected="selected">Yes</option>
                       <option value="N">No</option> 
                       <?php }
					   else{ ?>
                       <option value="Y">Yes</option>
                      <option value="N" selected="selected">No</option>
                      <?php } ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                </table></td>
                </tr>             
              
              
              <tr>
                <td width="6%">&nbsp;</td>
                <td width="9%">&nbsp;</td>
                <td width="27%">&nbsp;</td>
                <td width="58%"><input name="btn_add" type="submit" class="button" value="     Edit      " id="btn_add" />
                  <input name="btn_cancel" type="button" class="button" value="   Cancel   " onclick="window.location.href='bord_member_folder.php'" id="btn_cancel" /></td>
              </tr>
            </table>
          </form></td>
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
