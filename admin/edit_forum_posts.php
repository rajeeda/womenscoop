<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once('classes/accu_forum.class.php');

include(ADMIN_PATH.'FCKeditor/fckeditor.php') ;

$post_id = isset($_GET['pid'])?$_GET['pid']:$_GET['pid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script language="JavaScript" type="text/JavaScript" src="scripts/deleteconfirmations.js">
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
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('images/frontpage2.png','images/user2.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="64%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="36%"><div id="content">
      <table border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="48"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
          </a><span class="txt_ash">Home</span></div></td>
          <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="48"><div align="center"><a href="accu_forum_posts.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/user2.png',1)"><img src="images/resource_forum.gif" alt="User Manager" name="Image5" width="37" height="42" border="0" id="Image5" /></a><br />
            Forum Comments</div></td>
          <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="65"><div align="center"><img src="images/ph_training.gif" width="36" height="36" /><br />
            Edit Comments</div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#F1F3F5"><?php
			$acuu_forum_post = Accu_Forum :: GetpostById($post_id);
			if(count($acuu_forum_post)==0)
			{
				echo '<div id="error">Invalid Operation!!!</div>';
			}
			else
			{
			?></td>
        </tr>
        <tr>
            <td colspan="4" class="adminlist" bgcolor="#d8d8d8"><h3>Edit Forum Comment</h3></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5"><form action="controlers/accu_forum_controler.php?mode=edit_post" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <table width="100%" border="0" align="center">
          <tr>
            <td width="5%">&nbsp;</td>
            <td width="64%">&nbsp;</td>
            <td width="31%">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3"><table class="tborder" cellpadding="6" cellspacing="1" border="0" width="100%" align="center">
              <tr>
                <td class="errormsg" width="100%">
                 <h6 style="color:#A52A2A"><?php include('messages/forum.message.php'); ?></h6>
               </td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3"><table class="imgBox" cellpadding="6" cellspacing="1" border="0" width="73%" align="center">
              <tr>
                <td height="30" colspan="3" class="nn_text"><table width="100%" border="0">
                  <tr>
                    <td width="6%" valign="middle" class="nn_text">Name</td>
                    <td width="1%">&nbsp;</td>
                    <td width="29%" valign="middle">
                      <span id="sprytextfield1">
                      <input type="text" name="txt_name" id="txt_name" value="<?php echo $acuu_forum_post['pname'];?>"/>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    <td width="7%" valign="middle" class="nn_text">Country</td>
                    <td width="1%">&nbsp;</td>
                    <td width="24%">
                    <select name="cmb_countryName" id="cmb_countryName" class="c">
                    <option value="0">Select Country Name</option>
                    <?php 
						$country = Accu_Forum :: GetCountry();
						for($a=0;$a<count($country);$a++){
						$row = each($country); 
						
						?>
                    <option value="<?php echo $row['value']['country_name'];?>" <?php if($row['value']['country_name'] == $acuu_forum_post['country']){?>selected="selected" <?php }?>/>                  
                    <?php echo $row['value']['country_name'];?>
                    <?php } ?>
                  </select>
                    </td>
                    <td width="8%" valign="middle" class="nn_text">E mail</td>
                    <td width="24%">
                    <span id="sprytextfield2">
                    <input type="text" name="txt_mail" id="txt_mail" value="<?php echo $acuu_forum_post['emailid'];?>"/>
                    <span class="textfieldRequiredMsg">*</span><span class="textfieldInvalidFormatMsg">*</span></span></td>
                  </tr>
                  </table></td>
                </tr>
              <tr>
                <td width="19%" height="30"><span class="nn_text">Comment Title</span></td>
                <td width="2%">&nbsp;</td>
                <td width="79%" class="nn_text">&nbsp;</td>
              </tr>
              <tr>
                <td height="30" colspan="3">
                    <input name="txt_post_title" type="text" id="txt_post_title" size="60" value="<?php echo $acuu_forum_post['post_title'];?>"></td>
                </tr>
              <tr>
                <td height="30" valign="top"><span class="nn_text">Comment Description</span></td>
                <td valign="top">&nbsp;</td>
                <td class="nn_text">&nbsp;</td>
              </tr>
              <tr>
                <td height="30" colspan="3" valign="top"><div style="padding:5px 0px 5px 0px;">
                    <?php
					$oFCKeditor = new FCKeditor('post') ;
					$oFCKeditor->BasePath = 'FCKeditor/';
					$oFCKeditor->Height = "200" ;
					$oFCKeditor->Value = html_entity_decode (stripslashes ($acuu_forum_post['post_desc']));
					$oFCKeditor->Create() ;
				?>
                  </div>                </td>
                </tr>
            </table></td>
</tr>
          <tr>
            <td><input name="hdn_post_id" type="hidden" value="<?php echo $_REQUEST['pid']?>" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label>
              <input type="submit" name="btn_submit" id="btn_submit" value="      Submit      ">
            </label></td>
          </tr>
          <tr>
            <td colspan="3"><table class="tborder" cellpadding="6" cellspacing="1" border="0" width="95%" align="center">
              <tr> </tr>
              <tr> </tr>
            </table></td>
          </tr>
        </table>
          </form></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5" class="adminlist">&nbsp;</td>
        </tr>
        <?php } ?>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><center><?php include (ADMIN_TPL_PATH.'footer.tpl');?></center></td>
  </tr>
</table>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
//-->
</script>
</body>
</html>
