<?php 
	require_once('config/config.php');
	require_once(ADMIN_PATH.'header_includes.php');
	require_once(ADMIN_CLASS_PATH.'publication_doc.class.php');
	require_once(ADMIN_CLASS_PATH.'publication_type.class.php');
 
	$pub_row=Publication_Document::GetPublicationDocument($_GET['q']);
	$doc_type_id=$pub_row['publication_cat_id'];
	$catname= Publication_Document :: GetPublicationDocumentCatagory($doc_type_id);
    $pud=Publication_Document::GetPubFiles($_GET['q'],'P');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<body>
<?php
	if($doc_type_id=='0')
	{
		echo '<div id="error">Select Publication Document Type.!!!</div>';
	}
	elseif($doc_type_id=='1'||$doc_type_id=='2')
	{	
	for($a=0;$a<count($pud);$a++)
	{
		$row=each($pud);
?>
<table width="80%" border="0" cellspacing="0" cellpadding="0">
<tr>
        <td colspan="4">
        <input type="hidden" name="hdn_pub_type" id="hdn_pub_type" value="<?php echo $doc_type_id;?>" /></td>
  </tr>
      <tr>
        <td width="35%" height="20">Document Type</td>
        <td width="3%" align="center"><strong>:</strong></td>
        <td colspan="2"><select name="cmb_doc_type" id="cmb_doc_type" >
          <?php 
					 	$catname= Publication_Document :: Publication_Doc();
					  	for($b=1;$b<=count($catname);$b++)
						{
						$row1 = each($catname); 
						?>
          <option value="<?php echo $row1["value"]["publication_cat_id"]; ?>" <?php if($b==$doc_type_id){?>selected="selected"<?php }?>> <?php echo $row1["value"]["pub_cat_name"];  ?></option>
          <?php
						 }
					  ?>
        </select></td>
      </tr>
      <tr>
        <td height="29" valign="top">&nbsp;</td>
        <td height="29" align="center" valign="top">&nbsp;</td>
        <td height="29" colspan="2" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="29" valign="top">Document Name</td>
        <td height="29" align="center" valign="top">&nbsp;</td>
        <td height="29" colspan="2" valign="top"><input name="txt_document_name2" type="text" id="txt_document_name2" value="<?php echo $pub_row['document_name'];?>" size="40" /></td>
      </tr>
      <tr>
        <td height="29" valign="top">Publication Document Title</td>
        <td height="29" align="center" valign="top"><strong>:</strong></td>
        <td height="29" colspan="2" valign="top"><input name="txt_Publication_Document_Title" type="text" id="txt_Publication_Document_Title" value="<?php echo $row['value']['file_name'];?>" size="40" />
        <input type="hidden" name="hdn_file_id" id="hdn_file_id" value="<?php echo $row['value']['file_id'] ;?>" /></td>
  </tr>
      <tr>
        <td>Attach file </td>
        <td align="center"><strong>:</strong></td>
        <td colspan="2"><input name="hdn_file_name" id="hdn_file_name" type="hidden" value="<?php echo $row['value']['file_data'] ;?>" />
		<?php echo $row['value']['file_data'] ;?>
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
        <td width="6%">
        	<input type="submit" name="btn_update" id="btn_update" value="Update" />        </td>
        <td width="56%">&nbsp;</td>
      </tr>
</table>
<?php
		}
		}
		else
		{ 
		for($a=0;$a<count($pud);$a++)
		{
			$row=each($pud);
	?>
 <table width="80%" border="0" cellspacing="0" cellpadding="0">
   <tr>
     <td colspan="4"><input type="hidden" name="hdn_pub_type" id="hdn_pub_type" value="<?php echo $doc_type_id;?>" /></td>
   </tr>
   <tr>
     <td width="35%" height="20">Document Type</td>
     <td width="3%" align="center"><strong>:</strong></td>
  <td colspan="2">
     	<label>
<select name="cmb_doc_type" id="cmb_doc_type">
  <?php 
					 	$catname= Publication_Document :: Publication_Doc();
					  	for($b=1;$b<=count($catname);$b++)
						{
						$row2 = each($catname); 
						?>
  <option value="<?php echo $row2["value"]["publication_cat_id"]; ?>" <?php if($b==$doc_type_id){?>selected="selected"<?php }?>> <?php echo $row2["value"]["pub_cat_name"];  ?></option>
  <?php
						 }
					  ?>
</select>                 
        </label>        </td>
   </tr>
   
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="35%" height="29"><div align="right">Year </div></td>
            <td width="3%" align="center"><strong>:</strong></td>
            <td width="62%"><select name="cmb_year" id="cmb_year">
              <option value="Year">Year</option>
              <?php
					for($c=2000;$c<=date('Y');$c++)  
					{?>
              <option value="<?php echo $c;?>" <?php if($c==$pub_row['year']){?> selected="selected"<?php }?>><?php echo $c;?></option>
              <?php 
					}
				?>
            </select></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="19" valign="top">&nbsp;</td>
        <td height="19" align="center" valign="top">&nbsp;</td>
        <td height="19" colspan="2" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="28" valign="top">Document Name</td>
        <td height="28" align="center" valign="top">&nbsp;</td>
        <td height="28" colspan="2" valign="top"><input name="txt_document_name" type="text" id="txt_document_name" value="<?php  echo $pub_row['document_name'];?>" size="40" /></td>
      </tr>
      <tr>
        <td height="28" valign="top">Publication Document Title</td>
        <td height="28" align="center" valign="top"><strong>:</strong></td>
        <td height="28" colspan="2" valign="top"><input name="txt_Publication_Document_Title" type="text" id="txt_Publication_Document_Title"  value="<?php echo $row['value']['file_name'];?>" size="40" />
        <input type="hidden" name="hdn_file_id" id="hdn_file_id" value="<?php echo $row['value']['file_id'] ;?>" /></td>
   </tr>
      <tr>
        <td>Attach file </td>
        <td align="center"><strong>:</strong></td>
        <td colspan="2">
        <input name="hdn_file_name" id="hdn_file_name" type="hidden" value="<?php echo $row['value']['file_data'] ;?>" />
		<?php echo $row['value']['file_data'] ;?>
        <input type="file" name="up_file" id="up_file" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="7%"><input type="submit" name="btn_update" id="btn_update" value="Update" /></td>
        <td width="55%">&nbsp;</td>
      </tr>
    </table>
<?php
	 	} 
		}
     ?>
 


</body>
</html>