<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'Testimonials.class.php');
 
$partner_id = isset( $_GET['partner_id'])?$_GET['partner_id']:$_GET['partner_id'];
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
    <td width="62%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="38%"><div id="content"><table width="323" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td width="68"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
              </a><span class="txt_ash">Home</span></div></td>
              <td width="47"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="57"><div align="center"><a href="partners.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/impressions.png',1)"><img src="images/impressions.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Partners</span> </div></td>
              <td width="44"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="75"><div align="center"><img src="images/addedit.png" width="48" height="48" /><br />
              New partner </div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td width="100%" class="adminlist" bgcolor="#d8d8d8"><h3>Insert New Partners </h3></td>
          </tr>
        <tr>
          <td height="169" valign="top" bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" enctype="multipart/form-data" action="controlers/Testimonials_controler.php?mode=editpartners">
            <div class="container">
              <div class="row">
                <h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES.'testimonials.message.php'); ?></h6>
              </div>
              <?php 
        $partner = Testimonials::Getpartner_data($partner_id);
      ?>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div ><span class="pull-right"><input type="hidden" name="hdn_partner_id" id="hdn_partner_id" value="<?php echo $partner['partner_id'];?>" />Partner Name:</span></div>
                </div>
                <div class="col-sm-6 pull-left">
                  <div class=""><input name="txt_partner_name" type="text" id="txt_partner_name" value="<?php echo $partner['partner_name'];?>"/></div>
                </div>
              </div>
            </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div ><span class="pull-right">Partner URL :</span></div>
                </div>
                <div class="col-sm-6 pull-left">
                  <div class=""><input name="txt_partner_url" type="text" id="txt_partner_url" value="<?php echo $partner['partner_url'];?>" /></div>
                </div>
              </div>
              </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="">Partner Logo:</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><img src="../assets/img/team/<?php echo $partner['partner_logo']; ?>" height="42" width="42"/>
                    <input name="up_partner_logo" type="file" id="up_partner_logo" value=""/>
                    <input name="hdn_partner_logo" type="hidden" id="hdn_partner_logo" value="<?php echo $partner['partner_logo'];?>"/>
                  </div>
                </div>
              </div>
            </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right"><input name="btn_add" type="submit" class="button" value="    Update    " id="btn_add" /></div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left">
                    <input name="btn_cancel" type="button" class="button" value="   Cancel   " onclick="window.location.href='partners.php'" id="btn_cancel" /></div>
                </div>
              </div>
            </div>
            
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
