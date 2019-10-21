<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'location.class.php');
require_once(ADMIN_CLASS_PATH.'Testimonials.class.php');
include(ADMIN_PATH.'FCKeditor/fckeditor.php') ;
$data = Testimonials::GetNetwork_data();
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
      <table width="94%" border="0" cellpadding="2" cellspacing="2">
        <tr>
          <td width="76"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
          </a><span class="txt_ash">Home</span></div></td>
          <td width="49"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="62"><div align="center"><a href="network.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/categories.png',1)"><img src="images/impressions.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Network</span> </div></td>
          <td width="51"><div align="center"></div></td>
          <td width="80"><div align="center"></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist"><h3>Update Network Profile </h3></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" action="controlers/Testimonials_controler.php?mode=editnetwotk">
            <div class="container">
              <div class="row">
                <h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES.'testimonials.message.php'); ?></h6>
              </div>
             
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">INDIVIDUAL MEMBERS :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_mem" type="number" class="login_text" id="txt_mem" value="<?php echo $data['individual_members'];?>" /></div>
                </div>
              </div>
              </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">FINANCIAL COOPERATIVES :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_coop" type="number" class="login_text" id="txt_coop" value="<?php echo $data['financial_cooperatives'];?>"/></div>
                </div>
              </div>
              </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">US$ BILLION ASSETS :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_asset" type="number" class="login_text" id="txt_asset" value="<?php echo $data['billion_asset'];?>"/></div>
                </div>
              </div>
              </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">VOLUNTEERS:</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_volunteers" type="number" class="login_text" id="txt_volunteers" value="<?php echo $data['volunteers'];?>"/></div>
                </div>
              </div>
              </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">EMPLOYEES :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_employee" type="number" class="login_text" id="txt_employee" value="<?php echo $data['employees'];?>"/></div>
                </div>
              </div>
              
            </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right"><input name="btn_add" type="submit" class="button" value="    Update    " id="btn_add" />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left">
                    <input name="btn_cancel" type="button" class="button" value="   Cancel   " onclick="window.location.href='signindefault.php'" id="btn_cancel" /></div>
                </div>
              </div>
            </div>
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
