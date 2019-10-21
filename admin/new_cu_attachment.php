<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'CUSolution.class.php');
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
</head>

<body onload="MM_preloadImages('images/frontpage2.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="64%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="36%"><div id="content"><table width="310" border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td width="49"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
              </a><span class="txt_ash">Home</span></div></td>
              <td width="50"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="69"><div align="center"><a href="Credit_Union_Solution.php"><img src="images/user.png" width="48" height="48" /></a><br />
                CU Solution</div></td>
              <td width="41"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="69"><div align="center"><img src="images/addusers.png" width="48" height="48" /><br />
                  Add CU Solution</div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist"><h3>New Credit Union Solution</h3></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5"><form action="controlers/CUSolutioncontroler.php?mode=uploads" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <table width="79%"  border="0" align="center" cellpadding="2" cellspacing="2">
              
              <tr>
                <td colspan="5"><div id="error"><h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES.'CUSolution.message.php'); ?></h6>
                </div></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="4">
                
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <?php $cufiles = CUSolution :: passCUSolutionDocuments($_REQUEST['solution_id']);
				  		for($cu=1;$cu<=count($cufiles);$cu++)
						{
						$row1 = each($cufiles);
					?>
                  <tr>
                    <td width="16%"><div align="right">&nbsp;&nbsp;<a onclick="deleteFilescu('<?php echo $row1['value']['file_id'];?>');" href="#"><img src="../images/delete.png" width="16" height="16" /></a></div></td>
                    <td width="2%">&nbsp;</td>
                    <td width="82%"><?php echo $row1['value']['file_name']; ?></td>
                  </tr>
                  <?php }?>
                  <tr>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                </table>
                
                </td>
                </tr>
              <tr>
                <td width="10%"><input type="hidden" name="hdn_solutionname" id="hdn_solutionname" value="<?php echo $_REQUEST['solution_id']?>" /></td>
                <td width="17%">Attachment  Name</td>
                <td width="2%">:</td>
                <td colspan="2"><input name="txt_cu_attachment" type="text" class="txt_boxes" id="txt_cu_attachment" size="50" /></td>
              </tr>
              
              <tr>
                <td>&nbsp;</td>
                <td>Attachment</td>
                <td>:</td>
                <td colspan="2"><input type="file" name="attach_cu_solution" id="attach_cu_solution" /></td>
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
                <td width="52%"><input name="btn_add" type="submit" class="button" value="   Upload   " id="btn_add" /> <input name="Submit2" type="button" class="button" value="   Cancel   " onclick="window.location.href='Credit_Union_Solution.php'" /></td>
                <td width="19%">&nbsp;</td>
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
