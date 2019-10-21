<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'publication_doc.class.php');

$doc_type_id ='';
$pub_array = '';  

$doc_type_id= isset($_GET['doc_type'])?$_GET['doc_type']:$doc_type_id;
$pub_array  = isset($_GET['pub_array'])?$_GET['pub_array']:$pub_array;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script language="javascript" type="text/javascript" src="scripts/publication_doc.js"></script>
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

<body <?php if($doc_type_id!=''){?> onload="publication(<?php echo $doc_type_id ;?>,<?php echo $pub_array;?>)"<?php }else{?>onload="MM_preloadImages('images/user2.png')"<?php }?>>
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
          <td width="61"><div align="center"><a href="publication_doc.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/categories.png',1)"><img src="images/my_pro.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Publication</span> </div></td>
          <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="109"><div align="center"><img src="images/templatemanager.png" width="48" height="48" /><br />
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
          <td bgcolor="#F1F3F5" class="adminlist"><h3>Insert New Publication Documents</h3></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5">
          	<form action="controlers/publication_doc_controler.php?mode=addpub_doc" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <table width="93%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
              
              <tr>
                <td width="100%"><div id="error"><?php include(ADMIN_MESSAGES.'publication_doc.message.php'); ?>
                </div></td>
                </tr>
              
              
              <tr>
                <td height="66" valign="top"><table width="100%" height="73" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="32" class="login_text">Document Type</td>
                    <td align="center" valign="middle" class="login_text"><strong>:</strong></td>
                    <td><select name="cmb_doc_type" id="cmb_doc_type" onchange="publication(this.value,'<?php echo $pub_array;?>')">
                      <option value="0">Select Document</option>
                      <?php 
					 	$catname= Publication_Document :: Publication_Doc();
					  	for($a=1;$a<=count($catname);$a++)
						{
						$row = each($catname); 
						?>
                      <option value="<?php echo $row["value"]["publication_cat_id"]; ?>"> <?php echo $row["value"]["pub_cat_name"];  ?></option>
                      <?php
						 }
					  ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td width="115" height="16" class="login_text">&nbsp;</td>
                    <td width="7" align="center" valign="middle" class="login_text">&nbsp;</td>
                    <td width="664">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="25" colspan="3" class="login_text"><div id="txtHint"><b>Select Publication Document Type.</b></div></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="27" align="center" valign="middle"><label>
                  <input type="button" name="btn_cancel" id="btn_cancel" value="Cancel" onclick="window.location.href='publication_doc.php'" />
                </label></td>
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
