<?php 	
	require_once ('cumi_includes/cumi_config.php');
	require_once ('cumi_class/db.class.php');
	require_once ('cumi_class/cumi_class.php');	
	if(!isset ($_SESSION['cu_name']))
	{
		echo "<script type=\"text/javascript\" >document.location.replace('index.php?msg=6');</script>";
	}
	//session_start();
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CUMI</title>
<style type="text/css">
.td_heght{
	height:1px;
	background:#DDDDDD;
	width:inherit
}
</style>
<?php
	$mi_cate_code  	=isset($_GET['mi_cate_code'])?$_GET['mi_cate_code']:'';
	$mi_cate_name	=isset($_GET['mi_cate_name'])?$_GET['mi_cate_name']:'';
	$Category		=isset($_GET['Category'])?$_GET['Category']:'';
	$d				=isset($_GET['d'])?$_GET['d']:'';
?>
<script src="cumi_SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="cumi_SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<link href="css/bgimage.css" rel="stylesheet" type="text/css" />

<link href="css/aaccu.css" rel="stylesheet" type="text/css" />
<link href="../css/bgimage.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="840" height="444" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
<tr>
		<td height="102" align="center" bgcolor="#DDDDDD">
		 	 
<!-- ImageReady Slices (index_01.psd) -->
<table id="Table_01" width="843" height="102" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center"><img src="cumi_image/access.jpg" width="843" height="100" /></td>
	</tr>
	<tr>
		<td height="2" class="menuubar_image" align="center">		</td>
	</tr>
</table>
<!-- End ImageReady Slices -->        </td>
  </tr>
	<tr>
		<td height="19" bgcolor="#DDDDDD">
        
        
        <form id="form1" name="form1" method="post" action="cumi_control/cumi_control.php?mode=form">
  <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" class="errortext">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="93%" class="intro_heading">
      	<?php 
			$result=access::get_mi_category_CatProsp($mi_cate_code);
			echo $result['CatProsp'];
			
		?>  <br />
<br />
    
        <input type="hidden" name="hdn_mi_cate_code" id="hdn_mi_cate_code" value="<?php echo $mi_cate_code;?>" />        </td>
      <td>
      	 <input type="hidden" name="hdn_cu_id" id="hdn_cu_id" value="<?php echo $d;?>" />
      </td>
    </tr>
    <tr>
      <td height="23">&nbsp;</td>
      <td colspan="2"><span class="error">
        <?php require_once('cumi_message/cumi_message.php');echo $Category;?>
      </span></td>
    </tr>
    <tr>
      <td width="4%" height="154">&nbsp;</td>
      <td>
      	<?php
			$result1=access::get_mi_category_data($mi_cate_code);
			for($a=0;$a<count($result1);$a++)
			{
				$row1=each($result1); 
			
		?>	
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="3" align="left" class="big">
                    <strong><?php /*echo $row1['value']['Category'];*/ echo $row1['value']['SubCat'];?></strong>                
                    </td>
              </tr>
              
              <tr>
                <td width="3%" align="center" bgcolor="#DDDDDD">&nbsp;</td>
                <td width="94%" align="center" valign="bottom" bgcolor="#DDDDDD"><img src="cumi_image/que_head.gif" alt="" width="100%" height="16" /></td>
                <td width="3%" align="center" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
              <tr>
                <td width="3%" align="left" bgcolor="#DDDDDD">&nbsp;</td>
                <td width="94%" align="left" valign="top" bgcolor="#FFFFFF">
             
                <span id="spryradio<?php echo $a;?>"> <span class="radioRequiredMsg">*</span>
				<div class="td_heght"></div>
				<?php
						
						$result2=access::get_mi_caegoryoptions_data($row1['value']['CatID']);
						for($b=0;$b<count($result2);$b++)
						{
							$row2=each($result2); 
					?>
    <label>
                        <input type="radio" name="rdb_<?php echo $row2['value']['CatID'];?>" id="rdb_<?php echo $row2['value']['CatID'];?>" value="<?php echo $row2['value']['Marks'];//echo $row2['value']['MarkOption'];?>" />
                      
                      <strong>:</strong>
                      
                      <?php echo $row2['value']['OptionName'];?>
                      <input type="hidden" name="hdn_mark_<?php echo $row2['value']['CatID'];?>" id="hdn_mark_<?php echo $row2['value']['CatID'];?>" value="<?php echo $row2['value']['Marks'];?>"/><br />
                 </label><div class="td_heght"></div>
               	    <?php
                    	}
					?>
                  </span> 
                </td>
                <td width="3%" align="left" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
              <tr>
              	
                <td width="3%" align="center" bgcolor="#DDDDDD"></td>
                <td width="94%" align="center" valign="top" bgcolor="#DDDDDD"><img src="cumi_image/que_fot.gif" width="100%" height="16" /></td>
                <td width="3%" align="center" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
        </table>
	  <?php 
		  }
		?>      </td>
      <td width="3%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right" valign="middle"><label>
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit &gt;&gt;" class="button" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
        </form>
<?php
	  $result1=access::get_mi_category_data($mi_cate_code);
	  for($b=0;$b<count($result1);$b++)
	  { 
	  	echo "<script type=\"text/javascript\">var spryradio1 = new Spry.Widget.ValidationRadio('spryradio'+$b);</script>";
 	  }
?>
        
        
        
      </td>
  </tr>
	<tr>
		<td height="43" valign="top">
			 
            <table id="Table_02" width="843" height="43" border="0" cellpadding="0" cellspacing="0" align="center">
               <tr>
                 <td width="843" height="43" class="Footter_image"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                   
                   <tr>
                     <td height="30" align="center" class="menubar_font">CopyRight &copy; 2008 Association of Asian Confederation of Credit Unions </td>
                   </tr>
                 </table></td>
              </tr>
      </table></td>
  </tr>
</table>

</body>
</html>