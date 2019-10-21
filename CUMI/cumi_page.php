<?php
	require_once('cumi_includes/cumi_config.php');
	require_once ('cumi_class/db.class.php');
	require_once ('cumi_class/cumi_class.php');
	
	if(!isset ($_SESSION['cu_name']))
	{
		echo "<script type=\"text/javascript\" >document.location.replace('index.php?msg=6');</script>";
	}
	//session_start();
	$d=isset($_GET['d'])?$_GET['d']:'';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="cumi_style/FREE.css" />
<title> CUMI </title>
<style type="text/css">
.td_heght{
	height:1px;
	background:#DDDDDD;
	width:inherit
}
.td_heght_w{
	height:1px;
	background:#FFFFFF;
	width:inherit
}
</style>
<script src="cumi_SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="cumi_SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<link href="../css/aaccu.css" rel="stylesheet" type="text/css" />
<link href="../css/bgimage.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="840" height="469" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
<tr>
		<td height="102" align="center">
		 	 
<!-- ImageReady Slices (index_01.psd) -->
<table id="Table_01" width="843" height="102" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center" bgcolor="#DDDDDD"><img src="cumi_image/access.jpg" width="843" height="100" /></td>
	</tr>
	<tr>
		<td height="2" class="menuubar_image" align="center">		</td>
	</tr>
</table>
<!-- End ImageReady Slices -->        </td>
  </tr>
	<tr>
		<td height="19" bgcolor="#DDDDDD">
        
        
        <form action="cumi_control/cumi_control.php?mode=que&d=<?php echo $d;?>" method="post" name="form1" id="form1">
          <table align="center" width="522" height="363" border="0" cellpadding="0" cellspacing="0" bordercolor="#DDDDDD" bgcolor="#FCFCFC">
            <tr>
              <td height="23" colspan="3" bgcolor="#DDDDDD">&nbsp;</td>
            </tr>
            <tr>
              <td width="12" height="155" rowspan="5" bgcolor="#DDDDDD">&nbsp;</td>
              <td height="19" align="center" bgcolor="#DDDDDD" class="headline" ><?php //echo $d;?>
                <input type="hidden" name="hdn_cu_id" id="hdn_cu_id" value="<?php echo $d;?>" />
CUMI analyse year for
<?php  echo $_SESSION['year'];?></td>
              <td width="17" rowspan="5" bgcolor="#DDDDDD">&nbsp;</td>
            </tr>
            <tr>
              <td height="21" align="left" bgcolor="#DDDDDD" class="IntroText_new" ><?php  echo $_SESSION['cu_name'];?></td>
            </tr>
            <tr>
              <td height="28" align="left" bgcolor="#DDDDDD" class="IntroText_new" ><?php echo $_SESSION['cus_name'];?></td>
            </tr>
            <tr>
              <td height="23" bgcolor="#DDDDDD" class="errortext"><?php require_once('cumi_message/cumi_message.php'); ?>
              </td>
            </tr>
            <tr>
              <td height="48" align="center" bgcolor="#DDDDDD"><table width="402" border="0" cellpadding="0" cellspacing="0" bgcolor="#EAEAEA">
                  <tr>
                    <td colspan="5" align="center"><img src="cumi_image/que_head.gif" width="100%"  /> </td>
                  </tr>
                  
                  <tr>
                    <td colspan="5" align="left" bgcolor="#FFFFFF"><table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <?php
      $check_fill=access::check_fill($d,$_SESSION['year'],"1");
      if(count($check_fill)!=0)
      {               
      ?>
                          <td width="37" align="center" bgcolor="#EAFFF4">&nbsp;</td>
                          <td width="22" align="center" bgcolor="#EAFFF4"><input type="radio" name="rdb_cate_1" id="rdb_cate_1" value="1" checked="checked" />                          </td>
                          <td align="center" bgcolor="#EAFFF4"><strong>:</strong></td>
                          <td width="240" bgcolor="#EAFFF4" class="intro_text">Home </td>
                          <td width="104" align="center" bgcolor="#EAFFF4"><img src="cumi_image/tick.png" width="12" height="12" /></td>
                          <?php 
      }
      else
      {
      ?>
                          <td width="37" align="center" bgcolor="#FFFFFF" class="intro_text">&nbsp;</td>
                          <td width="22" align="center" bgcolor="#FFFFFF" class="intro_text"><input type="radio" name="rdb_cate" id="rdb_cate" value="1" />                          </td>
                          <td align="center" bgcolor="#FFFFFF" class="intro_text"><strong>:</strong></td>
                          <td width="240" bgcolor="#FFFFFF" class="intro_text">Home </td>
                          <td width="104" align="center" bgcolor="#FFFFFF"><img src="cumi_image/publish_x.png" width="12" height="12" /></td>
                          <?php
      } 
         ?>
                        </tr>
                        <tr bgcolor="#EAFFF4">
                          <td colspan="5"><div class="td_heght_w"></div></td>
                        </tr>
                        <tr>
                          <?php
      $check_fill=access::check_fill($d,$_SESSION['year'],"2");
      if(count($check_fill)!=0)
      {               
      ?>
                          <td width="37" align="center" bgcolor="#EAFFF4">&nbsp;</td>
                          <td width="22" align="center" bgcolor="#EAFFF4"><input type="radio" name="rdb_cate_2" id="rdb_cate_2" value="2" checked="checked" />                          </td>
                          <td align="center" bgcolor="#EAFFF4"><strong>:</strong></td>
                          <td width="240" bgcolor="#EAFFF4" class="intro_text">Family</td>
                          <td width="104" align="center" bgcolor="#EAFFF4"><img src="cumi_image/tick.png" width="12" height="12" /></td>
                          <?php 
      }
      else
      {
      ?>
                          <td width="37" align="center" bgcolor="#FFFFFF" class="intro_text">&nbsp;</td>
                          <td width="22" align="center" bgcolor="#FFFFFF" class="intro_text"><input type="radio" name="rdb_cate" id="rdb_cate" value="2" />                          </td>
                          <td align="center" bgcolor="#FFFFFF" class="intro_text"><strong>:</strong></td>
                          <td width="240" bgcolor="#FFFFFF" class="intro_text">Family</td>
                          <td width="104" align="center" bgcolor="#FFFFFF"><img src="cumi_image/publish_x.png" width="12" height="12" /></td>
                          <?php
      } 
         ?>
                        </tr>
                        <tr bgcolor="#EAFFF4">
                          <td colspan="5"><div class="td_heght_w"></div></td>
                        </tr>
                        <tr>
                          <?php
      $check_fill=access::check_fill($d,$_SESSION['year'],"3");
      if(count($check_fill)!=0)
      {               
      ?>
                          <td width="37" align="center" bgcolor="#EAFFF4">&nbsp;</td>
                          <td width="22" align="center" bgcolor="#EAFFF4"><input type="radio" name="rdb_cate_3" id="rdb_cate_3" value="3" checked="checked" />                          </td>
                          <td align="center" bgcolor="#EAFFF4"><strong>:</strong></td>
                          <td width="240" bgcolor="#EAFFF4" class="intro_text">Financial</td>
                          <td width="104" align="center" bgcolor="#EAFFF4"><img src="cumi_image/tick.png" width="12" height="12" /></td>
                          <?php 
      }
      else
      {
      ?>
                          <td width="37" align="center" bgcolor="#FFFFFF" class="intro_text">&nbsp;</td>
                          <td width="22" align="center" bgcolor="#FFFFFF" class="intro_text"><input type="radio" name="rdb_cate" id="rdb_cate" value="3" />                          </td>
                          <td align="center" bgcolor="#FFFFFF" class="intro_text"><strong>:</strong></td>
                          <td width="240" bgcolor="#FFFFFF" class="intro_text">Financial</td>
                          <td width="104" align="center" bgcolor="#FFFFFF"><img src="cumi_image/publish_x.png" width="12" height="12" /></td>
                          <?php
      } 
         ?>
                        </tr>
                        <tr bgcolor="#EAFFF4">
                          <td colspan="5"><div class="td_heght_w"></div></td>
                        </tr>
                        <tr>
                          <?php
      $check_fill=access::check_fill($d,$_SESSION['year'],"4");
      if(count($check_fill)!=0)
      {               
      ?>
                          <td width="37" align="center" bgcolor="#EAFFF4">&nbsp;</td>
                          <td width="22" align="center" bgcolor="#EAFFF4"><input type="radio" name="rdb_cate_4" id="rdb_cate_4" value="1" checked="checked" />                          </td>
                          <td align="center" bgcolor="#EAFFF4"><strong>:</strong></td>
                          <td width="240" bgcolor="#EAFFF4" class="intro_text">Social</td>
                          <td width="104" align="center" bgcolor="#EAFFF4"><img src="cumi_image/tick.png" width="12" height="12" /></td>
                          <?php 
      }
      else
      {
      ?>
                          <td width="37" align="center" bgcolor="#FFFFFF" class="intro_text">&nbsp;</td>
                          <td width="22" align="center" bgcolor="#FFFFFF" class="intro_text"><input type="radio" name="rdb_cate" id="rdb_cate" value="4" />                          </td>
                          <td align="center" bgcolor="#FFFFFF" class="intro_text"><strong>:</strong></td>
                          <td width="240" bgcolor="#FFFFFF" class="intro_text">Social</td>
                          <td width="104" align="center" bgcolor="#FFFFFF"><img src="cumi_image/publish_x.png" width="12" height="12" /></td>
                          <?php
      } 
         ?>
                        </tr>
                        <tr bgcolor="#EAFFF4">
                          <td colspan="5"><div class="td_heght_w"></div></td>
                        </tr>
                        <tr>
                          <?php
      $check_fill=access::check_fill($d,$_SESSION['year'],"5");
      if(count($check_fill)!=0)
      {               
      ?>
                          <td width="37" align="center" bgcolor="#EAFFF4">&nbsp;</td>
                          <td width="22" align="center" bgcolor="#EAFFF4"><input type="radio" name="rdb_cate_5" id="rdb_cate_5" value="5" checked="checked" />                          </td>
                          <td align="center" bgcolor="#EAFFF4"><strong>:</strong></td>
                          <td width="240" bgcolor="#EAFFF4" class="intro_text">Occupation</td>
                          <td width="104" align="center" bgcolor="#EAFFF4"><img src="cumi_image/tick.png" width="12" height="12" /></td>
                          <?php 
      }
      else
      {
      ?>
                          <td width="37" align="center" bgcolor="#FFFFFF" class="intro_text">&nbsp;</td>
                          <td width="22" align="center" bgcolor="#FFFFFF" class="intro_text"><input type="radio" name="rdb_cate" id="rdb_cate" value="5" />                          </td>
                          <td align="center" bgcolor="#FFFFFF" class="intro_text"><strong>:</strong></td>
                          <td width="240" bgcolor="#FFFFFF" class="intro_text">Occupation</td>
                          <td width="104" align="center" bgcolor="#FFFFFF"><img src="cumi_image/publish_x.png" width="12" height="12" /></td>
                          <?php
      } 
         ?>
                        </tr>
                          
                    </table></td>
                  </tr>
                  <tr>
                    <td colspan="5" align="center"><img src="cumi_image/que_fot.gif" width="410"  /> </td>
                  </tr>
                  <tr>
                    <td width="112" height="19" align="right" bgcolor="#DDDDDD">&nbsp;</td>
                    <td width="22" height="19" align="right" bgcolor="#DDDDDD"></td>
                    <td width="135" align="right" bgcolor="#DDDDDD">&nbsp;</td>
                    <td align="right" bgcolor="#DDDDDD">&nbsp;</td>
                    <td align="right" bgcolor="#DDDDDD">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="19" colspan="5" align="right" bgcolor="#DDDDDD"><table width="100%" border="0">
                      <tr>
                        <td width="29%" nowrap="nowrap"><?php
     $check_summary=access::check_summary($d,$_SESSION['year']);
     //echo count($check_summary);
     if(count($check_summary)!=0)
     {
     ?>
                          <input name="btn_summary" id="btn_summary" type="button" class="button" value="SUMMERY" onclick="window.location.href='cumi_summary.php?d=<?php echo $d;?>'" />
                        <?php  
     } 
     else
     {
     }                      
     ?>         </td>
                        <td width="4%">&nbsp;</td>
                        <td width="29%"><input name="btn_cancel" type="button" class="button" id="btn_cancel" value="CANCEL" onclick="window.location.href='index.php'"/></td>
                        <td width="4%">&nbsp;</td>
                        <td width="29%"><input name="btn_submit" type="submit" class="button" id="btn_submit" value="NEXT &gt;&gt;" /></td>
                      </tr>
                    </table></td>
                </tr>
                  </table>
              <label></label></td>
            </tr>
            <tr>
              <td height="23" colspan="3" bgcolor="#DDDDDD">&nbsp;</td>
            </tr>
            <tr>
              <td height="23" colspan="3" bgcolor="#DDDDDD">&nbsp;</td>
            </tr>
          </table>
        </form>
</td>
  </tr>
	<tr>
		<td height="19" valign="top">
			 
            <table id="Table_02" width="843" height="43" border="0" cellpadding="0" cellspacing="0" align="center">
               <tr>
                 <td width="843" height="43" class="Footter_image"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                 <tr class="menubar_font">
                       <td class="">&nbsp;</td>
                       <td width="8%" class="menubar_font">&nbsp;</td>
                       <td width="2%"  class="menubar_font">&nbsp;</td>
                       <td width="10%"  class="menubar_font">&nbsp;</td>
                       <td width="2%"  class="menubar_font">&nbsp;</td>
                       <td width="8%" class="menubar_font">&nbsp;</td>
                       <td >&nbsp;</td>
                   </tr>
                     <tr>
                       <td colspan="7" align="center" class="menubar_font">CopyRight &copy; 2008 Association of Asian Confederation of Credit Unions </td>
                   </tr>
                 </table></td>
               </tr>
             </table></td>
  </tr>
</table>

</body>
</html>