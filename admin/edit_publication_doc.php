<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'publication_doc.class.php');

$pub_doc_id='';
$pub_doc_id=$_REQUEST['pub_doc_id'];

$pub_doc = Publication_Document :: GetPublicationDocument($pub_doc_id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script language="javascript" type="text/javascript" src="scripts/deleteconfirmations.js"></script>
<script language="JavaScript" type="text/JavaScript" src="scripts/edit_publication_doc.js"></script>
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
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="63%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="37%"><div id="content"><table width="330" border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td width="48"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
              </a><span class="txt_ash">Home</span></div></td>
              <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="61"><div align="center"><a href="publication_doc.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/categories.png',1)"><img src="images/my_pro.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Publication</span> </div></td>
              <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="109"><div align="center"><img src="images/properties_f2.png" width="32" height="32" /><br />
              Edit Publication</div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist"><h3>Update Publication Documents</h3></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5"><form action="controlers/publication_doc_controler.php?mode=edit_pub_doc&pub_doc_id=<?php echo $_REQUEST['pub_doc_id'];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <table width="80%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
              <tr>
                <td width="100%"><div id="error">
                  <h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES.'publication_doc.message.php'); ?></h6>
                </div></td>
              </tr>
              <tr>
                <td height="29" valign="top"><table width="100%" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="68" height="25" valign="top" class="login_text">&nbsp;</td>
                      <td height="25" class="login_text"><table width="98%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td colspan="4"><input type="hidden" name="hdn_pub_id" id="hdn_pub_id" value="<?php echo $pub_doc_id;?>" /></td>
                        </tr>
                        <tr>
                          <td width="17%" height="20">Document Type</td>
                          <td width="1%" align="center"><strong>:</strong></td>
                          <td colspan="2"><select name="cmb_doc_type" id="cmb_doc_type" >
                            <?php 
					 	$catname= Publication_Document :: Publication_Doc();
					  	for($a=1;$a<=count($catname);$a++)
						{
						$row1 = each($catname); 
						?>
                            <option value="<?php echo $row1['value']['publication_cat_id']; ?>" <?php if($a==$pub_doc['publication_cat_id']){?>selected="selected"<?php }?>> <?php echo $row1['value']['pub_cat_name'];  ?></option>
                            <?php
						 }
					  ?>
                          </select></td>
                        </tr>
                        <tr>
                          <td height="28">Year</td>
                          <td height="28" align="center"><strong>:</strong></td>
                          <td height="28" colspan="2">
                          <select name="cmb_year" id="cmb_year">
                  <option value="Year">Year</option>
                  <?php
					for($y=2000;$y<=date('Y');$y++)  
					{?>
                  <option value="<?php echo $y;?>" <?php if($y==$pub_doc['year']){?>selected="selected"<?php }?>><?php echo $y;?></option>
                  <?php 
					}
				?>
                </select>                          </td>
                        </tr>
                        <tr>
                          <td height="29" valign="top">Document Name</td>
                          <td height="29" align="center" valign="top"><strong>:</strong></td>
                          <td height="29" colspan="2" valign="top">
                          <select name="pub_doc_name" id="pub_doc_name">
         					 <option value="0">Select Document Name</option>
        					<?php 
					 			$pub_doc_name= Publication_Document :: getPublicationDocumnetname($pub_doc['publication_cat_id']);
					  			for($pb=1;$pb <=count($pub_doc_name);$pb++)
								{
									$row = each($pub_doc_name); 
								?>
                        		<option value="<?php echo $row["value"]["document_name"]; ?>" <?php if($row["value"]["document_name"] == $pub_doc['document_name']){?>selected="selected"<?php }?>> <?php echo $row["value"]["document_name"];  ?></option>
                        		<?php
							 }
					  ?>
        </select> <input name="hdn_pub_doc_name" type="hidden" value="<?php echo $row["value"]["document_name"]; ?>" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          if  new
          <input name="txt_document_name" type="text" id="txt_document_name" size="30" />                      </td>
                        </tr>
                        <tr>
                          <td height="24" valign="top">
                          
                           Upload Documents</td>
                          <td height="24" align="center" valign="top"><strong>:</strong></td>
                          <td height="24" colspan="2" valign="top">
                          
                          <?php 
				//		 echo $pub_doc['record_type']; echo $pub_doc['publication_id'];
						 $pub__doc= Publication_Document :: Get_ALL_PublicationDocument($pub_doc['record_type'],$pub_doc['publication_id']);
							if(count($pub__doc)!= 0)
							{
					  			for($pbd=1;$pbd <=count($pub__doc);$pbd++)
								{
									$row22 = each($pub__doc); 
						  ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            
                            <tr>
                              <td width="31%" height="25"><?php echo $row22["value"]["pub_doc_name"]; ?></td>
                              <td width="69%"><a href="#" onClick="MM_openBrWindow('popup_pub_doc_edit.php?pub_doc_id=<?php echo $row22["value"]["pub_doc_id"]; ?>','','scrollbars=yes,resizable=yes,width=650,height=300')">EDIT</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  onclick="deletedoc('<?php echo $row22["value"]["pub_doc_id"];?>');"  href="#">DELETE</a></td>
                            </tr>
                          </table>
                          <?php }
							}
							else
							{
									echo "No Documents Available";
							}
						  		
						  
						  ?>
                          </td>
                          </tr>
                        
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td width="26%"><input type="submit" name="btn_update" id="btn_update" value="Update" />                          </td>
                          <td width="56%">&nbsp;</td>
                        </tr>
                      </table></td>
                      </tr>
                </table></td>
              </tr>
              <tr>
                <td height="27" align="right" valign="middle"><label>
                  <input type="button" name="btn_cancel" id="btn_cancel" value="Cancel" onclick="window.location.href='publication_doc.php'" />
                </label></td>
              </tr>
            </table>
          </form></td>
        </tr>
      </table>
    </td>
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
