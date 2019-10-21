<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'publication_doc.class.php');
 $pub_doc = Publication_Document :: GetPublication_doc($_REQUEST['pub_doc_id']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<title>Untitled Document</title>
</head>

<body bgcolor="#F1F3F5">
<form action="controlers/publication_doc_controler.php?mode=edit_file_data" method="post" enctype="multipart/form-data" name="form1" id="form1">
<div id="content">
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4"><input type="hidden" name="hdn_pub_file_id" id="hdn_pub_file_id" value="<?php echo $_REQUEST['pub_doc_id'];?>" />
  </td>
  </tr>

  <tr>
    <td width="38%" height="29" valign="top">Publication Document Title</td>
    <td width="1%" height="29" align="center" valign="top"><strong>:</strong></td>
    <td height="29" colspan="2" valign="top"><input name="txt_Publication_Document_Title" type="text" id="txt_Publication_Document_Title" value="<?php echo $pub_doc['pub_doc_name'];?>" size="40" />
     </td>
  </tr>
  <tr>
    <td valign="top">Attach file </td>
    <td align="center" valign="top"><strong>:</strong></td>
<td colspan="2">
        <?php echo $pub_doc['pub_doc_file'];?><input name="hdn_img_name" type="hidden" value="<?php echo $pub_doc['pub_doc_file'];?>" />
        <input type="hidden" name="hdn_file_type" id="hdn_file_type"  value="<?php echo $pub_doc['file_type'];?>"/>
      <br />
        <input type="file" name="up_file" id="up_file"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="5%"><input type="submit" name="btn_update" id="btn_update" value="Update" />    </td>
    <td width="56%">&nbsp;</td>
  </tr>
</table>
</div>
</form>
</body>
</html>
