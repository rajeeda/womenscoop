<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'gallery.class.php');
require_once(ADMIN_CLASS_PATH.'category.class.php');

$image_id=isset($_GET['image_id'])?$_GET['image_id']:$_GET['image_id'];
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
    <td width="36%"><div id="content"><table border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
              </a><span class="txt_ash">Home</span></div></td>
              <td><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td><div align="center"><a href="user_manager.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/categories.png',1)"><img src="images/categories.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Hotel</span> </div></td>
              <td><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td><div align="center"><img src="images/module.png" width="48" height="48" /><br />
                  Add Hotel </div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist" ><h3>Edit Image Gallary</h3></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5">
            <table width="90%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
              <tr>
                <td colspan="2"><div id="error">
                  <?php include(ADMIN_MESSAGES.'gallery.message.php'); ?>
                </div></td>
                </tr>
              <tr>
                <td width="3%">&nbsp;</td>
                <td width="97%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2">
                <form name="form1" id="form1" method="post" action="controlers/gallarycontroler.php?mode=edit_img" enctype="multipart/form-data"> 
                <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr align="center">
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <?php 
				  
				  $image = Gallary :: ImageFromImageid($image_id);
				  if(count($image)==0)
					{
						echo '<div id="error">Invalid Operation!!!</div>';
					}
					else
					{
				  ?>
                  <tr align="center">
                    <td align="left">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td align="left">&nbsp;</td>
                  </tr>
                  
                  <tr align="center">
                    <td align="left">&nbsp;</td>
                    <td width="454"><input name="eid" type="hidden" id="eid" value="<?php echo $image['image_id']; ?>" /></td>
                    <td width="1" align="left">&nbsp;</td>
                  </tr>
                  <tr align="center">
                    <td align="left">Image 
                      Category</td>
                    <td colspan="2" align="left">
                      <select name="e_imgcategory" id="select">
                        <option value="">Category</option>
                        <?php 
					$cat = Gallary :: Getcatagery();
					for($a=0;$a<count($cat);$a++){
						$row = each($cat); 
						
						?>
                    <option value="<?php echo $row["value"]["catagary"]; ?>"<?php if($row["value"]["catagary"]==$image['catagary']){echo "selected=\"selected\" ";}?>> <?php echo $row["value"]["catagary"]; ?></option>
                    <?php } ?>
                      </select>
                      If New :
                      <input name="e_imgcategory2" type="text" id="e_imgcategory2" />
                    </font></td>
                  </tr>
                  <tr align="center">
                    <td align="left">Image
                      (.jpg 600 X 450 Pixel)</td>
                    <td colspan="2" align="left"><img src="../upload_images/Gallary/thumb/<?php echo $image['image_name']; ?>" width="125" height="93" />
                        <input name="pim1" type="hidden" id="pim1" value="<?php echo $image['image_name']; ?>" />
                        <br />
                        <input name="up_image" type="file" id="up_image" /></td>
                  </tr>
                  <tr align="center">
                    <td width="158" align="left">Alt 
                      Tag</td>
                    <td colspan="2" align="left">
                      <input name="alttag" type="text" id="alttag" value="<?php echo $image['alt_text']; ?>" size="60" />                    </td>
                  </tr>
                  <tr align="center">
                    <td width="158" align="left">&nbsp;</td>
                    <td colspan="2" align="left">&nbsp;</td>
                  </tr>
                  <tr align="center">
                    <td align="left">&nbsp;</td>
                    <td colspan="2" align="left"><input name="category" type="hidden" id="category" value="<?php echo $_REQUEST['category']; ?>" />
                        <input name="start" type="hidden" id="start" value="<?php echo $_REQUEST['start']; ?>" /></td>
                  </tr>
                  <tr align="center">
                    <td align="left">&nbsp;</td>
                    <td colspan="2" align="left">
                      <input name="Submit" type="submit" value="Submit" />
                      <input type="button" name="Submit2" value="Cancel" onclick="window.location.href='image_gallary.php'" />                    </td>
                  </tr>
                  <tr align="center">
                    <td align="left">&nbsp;</td>
                    <td colspan="2" align="left">&nbsp;</td>
                  </tr>
                </table>
                </form>                </td>
                </tr>
                <?php }?>
            </table>          </td>
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
