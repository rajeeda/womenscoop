<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'location.class.php');
require_once(ADMIN_CLASS_PATH.'AccommodationType.class.php');

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
              <td width="61"><div align="center"><a href="user_manager.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/categories.png',1)"><img src="images/categories.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Publication</span> </div></td>
              <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="109"><div align="center"><img src="images/module.png" width="48" height="48" /><br />
              New Publication</div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist"><span ><h3>Insert Publication Type</h3></span></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" action="controlers/country_controler.php?mode=addcountry">
            <div class="container">
              <div class="row">
                <h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES.'country.message.php'); ?></h6>
              </div>
              
            
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Publication Type :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="public_cat_type" type="text" class="login_text" id="public_cat_type" /></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Publication Type Description :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><textarea name="pub_desc" cols="30" rows="4" class="login_text" id="pub_desc"></textarea></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Image :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="pub_cat_image" type="file" class="login_text" id="pub_cat_image" /></div>
                </div>
              </div>
            </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Active :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><select name="cmb_act" id="cmb_act">
                      <option value="Y">Yes</option>
                      <option value="N">No</option>
                      </select></div>
                </div>
              </div>
            </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right"><input name="btn_add" type="submit" class="button" value="     Add     " id="btn_add" /></div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left">
                    <input name="btn_cancel" type="button" class="button" value="   Cancel   " onclick="window.location.href='publication_type.php'" id="btn_cancel" /></div>
                </div>
              </div>
            </div>

            <table width="80%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
              
              <tr>
                <td colspan="4"><div id="error"><?php include(ADMIN_MESSAGES.'country.message.php'); ?>
                </div></td>
                </tr>
              <tr>
                <td colspan="4">&nbsp;</td>
                </tr>
              
              <tr>
                <td colspan="4" valign="top"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="39" colspan="2" class="color_button">&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <td width="206" height="37" class="login_text"> Publication Type</td>
                    <td width="442"><input name="public_cat_type" type="text" class="login_text" id="public_cat_type" /></td>
                  </tr>
                  <tr>
                    <td height="76" valign="top">Publication Type Description</td>
                    <td valign="top"><textarea name="public_cat_type2" cols="30" rows="4" class="login_text" id="public_cat_type2"></textarea></td>
                  </tr>
                  <tr>
                    <td height="31"> Image</td>
                    <td><input name="public_cat_type3" type="file" class="login_text" id="public_cat_type3" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
                </tr>             
              
              
              <tr>
                <td width="6%">&nbsp;</td>
                <td width="9%">&nbsp;</td>
                <td width="27%">&nbsp;</td>
                <td width="58%"><input name="btn_add" type="submit" class="button" value="    Add    " id="btn_add" />
                  <input name="btn_cancel" type="button" class="button" value="   Cancel   " onclick="window.location.href='category_manager.php'" id="btn_cancel" /></td>
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
    <td><?php include (ADMIN_TPL_PATH.'footer.tpl');?></td>
  </tr>
</table>
</body>
</html>
