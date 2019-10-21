<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
$type_id=isset($_GET['type_id'])?$_GET['type_id']:'';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
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
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('images/frontpage2.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="59%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="41%"><div id="content"><table border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
              </a><span class="txt_ash">Home</span></div></td>
              <td><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td><div align="center"><a href="about_us_member.php"><img src="images/ph_community.gif" width="36" height="36" /></a><br />
                <span class="txt_ash">Member</span></div></td>
              <td><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td><div align="center"><img src="images/ph_consulting.gif" width="36" height="36" /><br />
                  New Member</div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" action="controlers/about_us_member_controler.php?mode=member_reg">
            <table width="100%"  border="0" cellspacing="2" cellpadding="2">
              <tr>
                <td colspan="4" class="adminlist" bgcolor="#d8d8d8"><h3>New User Profile</h3></td>
                </tr>
              <tr>
                <td width="10%">&nbsp;</td>
                <td colspan="3"><div id="error"><h6 style="color:#A52A2A"><?php include('messages/about_us_member.message.php'); ?></h6></div></td>
                </tr>
              <tr>
                <td><input type="hidden" name="hdn_level_id" id="hdn_level_id" value="<?php echo $type_id;?>" /></td>
                <td width="18%">First Name</td>
                <td width="2%">:</td>
                <td width="70%"><span id="sprytextfield8">
                  <label>
                    <input type="text" name="txt_first_name" id="txt_first_name" />
                  </label>
</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Family Name</td>
                <td>:</td>
                <td><span id="sprytextfield4">
                  <label>
                    <input type="text" name="txt_last_name" id="txt_last_name" />
                  </label>
</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>E-mail</td>
                <td>:</td>
                <td><span id="sprytextfield2">
                  <label><span id="sprytxt_email">
                    <input type="text" name="txt_email" id="txt_email" />
                    <span class="textfieldRequiredMsg">Email address is required.</span></span><span class="textfieldRequiredMsg">E-mail is required.</span></label>
</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Telephone Number</td>
                <td>:</td>
                <td><span id="sprytextfield5">
                  <input type="text" name="txt_tpNo" id="txt_tpNo" />
</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Fax</td>
                <td>:</td>
                <td><span id="sprytextfield7">
                  <label>
                    <input type="text" name="txt_fax" id="txt_fax" />
                  </label>
</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>User Name</td>
                <td>:</td>
                <td><span id="sprytxt_user_name">
                  <label>
                    <input type="text" name="txt_user_name" id="txt_user_name" />
                    <span class="textfieldRequiredMsg">User name  is required.</span></label>
</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Password</td>
                <td>:</td>
                <td><span id="sprytxt_pass">
                  <label>
                    <input type="password" name="txt_pass" id="txt_pass" />
                  </label>
                  <span class="passwordRequiredMsg">Pass word is required.</span></span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Re-Password</td>
                <td>:</td>
                <td><span id="sprytxt_re_pass">
                  <input type="password" name="txt_re_pass" id="txt_re_pass" />
                  <span class="confirmRequiredMsg">Re type pass is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input name="Submit" type="submit" class="button" value="Add" />
                  <input name="Submit2" type="button" class="button" value="Cancel" onclick="window.location.href='new_about_us_member_type.php'" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4" class="adminlist">&nbsp;</td>
                </tr>
            </table>
          </form></td>
        </tr>
      </table></div></td>
  </tr>
  <tr>
    <td><center><?php include (ADMIN_TPL_PATH.'footer.tpl');?></center></td>
  </tr>
</table>
<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytxt_email", "none");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytxt_user_name", "none");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprytxt_pass");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("sprytxt_re_pass", "txt_pass");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {isRequired:false});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {isRequired:false});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {isRequired:false});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {isRequired:false});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "none", {isRequired:false});
//-->
</script>
</body>
</html>
