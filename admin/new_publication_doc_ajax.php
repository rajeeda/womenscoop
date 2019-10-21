<?php 
	require_once('config/config.php');
	require_once(ADMIN_PATH.'header_includes.php');
	require_once(ADMIN_CLASS_PATH.'publication_doc.class.php');
	require_once(ADMIN_CLASS_PATH.'publication_type.class.php');
	
	$doc_type_id= $_GET['q']; 
	//$doc_array  = $_GET['r'];
	$catname= Publication_Document :: GetPublicationDocumentCatagory($doc_type_id); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
</head>
<body>
<?php
	if($doc_type_id=='0')
	{
		echo '<div id="error">Select Publication Document Type.!!!</div>';
	}
	elseif($doc_type_id=='1'||$doc_type_id=='2')
	{	
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
        <td colspan="4">
        <input type="hidden" name="hdn_pub_type" id="hdn_pub_type" value="<?php echo $doc_type_id;?>" /></td>
  </tr>
      <tr>
        <td width="19%" height="20">Document Type</td>
        <td width="2%" align="center"><strong>:</strong></td>
        <td colspan="2"><input name="hdn_red_type" type="hidden" value="<?php echo $catname['pub_cat_name']; ?>" />
        <label >
            <?php 
			 echo $catname['pub_cat_name']; 
			?>          
            </label>        </td>
      </tr>
      <tr>
        <td height="19" valign="top"><div align="left">Year </div></td>
        <td height="19" align="center" valign="top">&nbsp;</td>
        <td height="29" colspan="2" valign="top">
        <select name="cmb_year" id="cmb_year">
          <option value="Year">Year</option>
          <?php
					for($a=2000;$a<=date('Y');$a++)  
					{?>
          <option value="<?php echo $a;?>"><?php echo $a;?></option>
          <?php 
					}
				?>
        </select></td>
      </tr>
      <tr>
        <td height="29" valign="top">Document Name</td>
        <td height="29" align="center" valign="top">:</td>
        <td height="29" colspan="2" valign="top"><select name="pub_doc_name" id="pub_doc_name">
          <option value="0">Select Document Name</option>
        	<?php 
					 	$pub_doc_name= Publication_Document :: getPublicationDocumnetname($doc_type_id);
					  	for($pb=1;$pb <=count($pub_doc_name);$pb++)
						{
						$row = each($pub_doc_name); 
						?>
                        <option value="<?php echo $row["value"]["publication_id"]; ?>"> <?php echo $row["value"]["document_name"];  ?></option>
                        <?php
						 }
					  ?>
                      
        </select> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          if  new
        <input name="txt_document_name" type="text" id="txt_document_name" size="30" /></td>
  </tr>
      <tr>
        <td height="29" valign="top">Publication Document Title</td>
        <td height="29" align="center" valign="top"><strong>:</strong></td>
        <td height="29" colspan="2" valign="top"><input name="txt_Publication_Document_Title" type="text" id="txt_Publication_Document_Title" size="40" /></td>
  </tr>
      <tr>
        <td>Attach file </td>
        <td align="center"><strong>:</strong></td>
        <td colspan="2"><input type="file" name="up_file" id="up_file"  /></td>
      </tr>
      <tr>
        <td>Attach image </td>
        <td align="center"><strong>:</strong></td>
        <td colspan="2"><input type="file" name="up_image" id="up_image"  /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="23%">
   	    <input type="submit" name="btn_add" id="btn_add" value="Add  &gt;&gt;" />        </td>
        <td width="56%">&nbsp;</td>
      </tr>
</table>
<?php
		}
		else
		{ 
	?>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>
     <td colspan="4"><input type="hidden" name="hdn_pub_type" id="hdn_pub_type" value="<?php echo $doc_type_id;?>" /></td>
   </tr>
   <tr>
     <td width="19%" height="20">Document Type</td>
     <td width="2%" align="center"><strong>:</strong></td>
  <td colspan="2">
     	<label>
     	<input name="hdn_red_type" type="hidden" value="<?php echo $catname['pub_cat_name']; ?>" />
     	<?php 
			 	echo $catname['pub_cat_name']; 
			?>                   
        </label>     </td>
   </tr>
   
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="19%" height="29"><div align="left">Year </div></td>
            <td width="2%" align="center"><strong>:</strong></td>
            <td width="31%">
              <div align="left">
                <select name="cmb_year" id="cmb_year">
                  <option value="Year">Year</option>
                  <?php
					for($a=2000;$a<=date('Y');$a++)  
					{?>
                  <option value="<?php echo $a;?>"><?php echo $a;?></option>
                  <?php 
					}
				?>
                </select>
              </div></td>
            <td width="6%" align="center">&nbsp;</td>
            <td width="42%">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="19" valign="top">&nbsp;</td>
        <td height="19" align="center" valign="top">&nbsp;</td>
        <td height="19" colspan="2" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="33" valign="top">Document Name</td>
        <td height="33" align="center" valign="top">:</td>
        <td height="33" colspan="2" valign="top"><select name="pub_doc_name" id="pub_doc_name">
          <option value="0">Select Document Name</option>
        	<?php 
					 	$pub_doc_name= Publication_Document :: getPublicationDocumnetname($doc_type_id);
					  	for($pb=1;$pb <=count($pub_doc_name);$pb++)
						{
						$row = each($pub_doc_name); 
						?>
                        <option value="<?php echo $row["value"]["publication_id"]; ?>"> <?php echo $row["value"]["document_name"];  ?></option>
                        <?php
						 }
					    ?>
                      
        </select> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          if  new
        <input name="txt_document_name" type="text" id="txt_document_name" size="30" /></td>
   </tr>
      <tr>
        <td height="34" valign="top">Publication Document Title</td>
        <td height="34" align="center" valign="top"><strong>:</strong></td>
        <td height="34" colspan="2" valign="top"><input name="txt_Publication_Document_Title" type="text" id="txt_Publication_Document_Title" size="40" /></td>
   </tr>
      <tr>
        <td>Attach file </td>
        <td align="center"><strong>:</strong></td>
        <td colspan="2"><input type="file" name="up_file" id="up_file" /></td>
      </tr>
      <tr>
        <td>Attach image </td>
        <td align="center"><strong>:</strong></td>
        <td colspan="2"><input type="file" name="up_image" id="up_image" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="24%"><input type="submit" name="btn_add" id="btn_add" value="Add &gt;&gt;" /></td>
        <td width="55%">&nbsp;</td>
      </tr>
    </table>
<?php
	 	} 
     ?>
 


</body>
</html>