<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'country.class.php');

$country_id	=	isset( $_GET['country_id'])?$_GET['country_id']:$_GET['id'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
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

<body onload="MM_preloadImages('images/user2.png','images/frontpage2.png','images/categories.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="64%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="36%"><div id="content">
      <table width="343" border="0" cellpadding="2" cellspacing="2">
        <tr>
          <td width="74"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
          </a><span class="txt_ash">Home</span></div></td>
          <td width="45"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="63"><div align="center"><a href="country.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/categories.png',1)"><img src="images/impressions.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Country</span> </div></td>
          <td width="52"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="77"><div align="center"><img src="images/addedit.png" width="48" height="48" /><br />
            New Country </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist"><h3>Insert New Country</h3></td>
          </tr>
        <tr>
          <td valign="top" bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" enctype="multipart/form-data" action="controlers/country_controler.php?mode=editcountry">
          <?php 
		  	$country = Country :: GetCountry_data($country_id);
		  ?>
      <div class="container">
              <div class="row">
                <h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES.'country.message.php'); ?></h6>
              </div>
              
            
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right"><input type="hidden" name="hdn_country_id" id="hdn_country_id" value="<?php echo $country['country_id'];?>" />Country Name :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_country_name" type="text" id="txt_country_name" value="<?php echo $country['country_name'];?>" size="50" /></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Country Flag :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><img src="../upload_images/Country_flag/thumb/<?php echo $country['country_flag']; ?>" /><input name="hdn_country_flag" type="hidden" value="<?php echo $country['country_flag']; ?>" />
                  <input name="up_country_flag" type="file" id="up_country_flag"/></div>
                </div>
              </div>
            </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right"><input name="btn_add" type="submit" class="button" value="    Edit    " id="btn_add" />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left">
                    <input name="btn_cancel" type="button" class="button" value="   Skip    " onclick="window.location.href='edit_country_profile.php?country_id=<?php echo $country['country_id'];?>'" id="btn_cancel" /></div>
                </div>
              </div>
            </div>
      <!--
            <table width="90%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
              
              <tr>
                <td colspan="5"><div id="error">
                  <?php //include(ADMIN_MESSAGES.'country.message.php'); ?>
                </div></td>
              </tr>
              <tr>
                <td height="20">&nbsp;</td>
                <td valign="top">&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="35"><span class="fonts">
                  <input type="hidden" name="hdn_country_id" id="hdn_country_id" value="<?php //echo $country['country_id'];?>" />
                </span></td>
                <td width="19%" valign="top">Country Name </td>
                <td width="4%"><div align="center">:</div></td>
                <td colspan="2"><input name="txt_country_name" type="text" id="txt_country_name" value="<?php //echo $country['country_name'];?>" size="50" />                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Country Flag</td>
                <td><div align="center">:</div></td>
                <td width="10%"><img src="../upload_images/Country_flag/thumb/<?php //echo $country['country_flag']; ?>" /><input name="hdn_country_flag" type="hidden" value="<?php //echo $country['country_flag']; ?>" /></td>
                <td width="57%"><input name="up_country_flag" type="file" id="up_country_flag"/></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2"><input name="btn_add" type="submit" class="button" value="    Edit    " id="btn_add" />
                  <input name="btn_cancel" type="button" class="button" value="   Skip    " onclick="window.location.href='edit_country_profile.php?country_id=<?php //echo $country['country_id'];?>'" id="btn_cancel" /></td>
              </tr>
            </table>-->
            </form></td>
          </tr>
        <tr>
          <td bgcolor="#F1F3F5" class="adminlist">&nbsp;</td>
          </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><center><?php include (ADMIN_TPL_PATH.'footer.tpl');?></center></td>
  </tr>
</table>
</body>
</html>
