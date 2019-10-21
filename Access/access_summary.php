<?php
	require_once('access_includes/access_config.php');
	require_once ('access_class/db.class.php');
	require_once ('access_class/access_class.php');
	//public $count='';
	if(!isset ($_SESSION['cu_name']))
	{
		echo "<script type=\"text/javascript\" >document.location.replace('access_branding.php?msg=6');</script>";
	}
	//session_start();
	$d=isset($_GET['d'])?$_GET['d']:'';
	
	$ssyear = isset($_SESSION['year'])?$_SESSION['year']:'';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="access_style/FREE.css" />
<title>Access Branding</title>
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
<script src="access_SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="access_SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<link href="../css/aaccu.css" rel="stylesheet" type="text/css" />
<link href="../css/bgimage.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="0">
 <form action="access_control/access_control.php?mode=que&d=$d" method="post" name="form1" id="form1">
<table width="840" height="178" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
<tr>
		<td height="102" align="center">
		 	 
<!-- ImageReady Slices (index_01.psd) -->
<table id="Table_01" width="843" height="102" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center" bgcolor="#DDDDDD"><img src="access_image/access_01_01.jpg" width="840" height="118" /></td>
	</tr>
	<tr>
		<td height="2" class="menuubar_image" align="center">		</td>
	</tr>
</table>
<!-- End ImageReady Slices -->        </td>
  </tr>
	<tr>
	  <td height="19" bgcolor="#D6EBFF"></td>
  </tr>
	<tr>
	  <td height="19" bgcolor="#D6EBFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="3" align="left" class="big">&nbsp;</td>
        </tr>
        <tr>
          <td width="18%" align="center" bgcolor="#D6EBFF">&nbsp;</td>
          <td width="63%" align="center" valign="bottom" bgcolor="#D6EBFF"><img src="access_image/que_head.gif" alt="" width="100%" height="16" /></td>
          <td width="19%" align="center" bgcolor="#D6EBFF">&nbsp;</td>
        </tr>
        <tr>
          <td width="18%" align="left" bgcolor="#D6EBFF">&nbsp;</td>
          <td width="63%" align="left" valign="top" bgcolor="#FFFFFF"><table align="center" width="450" height="190" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="23" colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td height="19" align="left" class="headline" ><?php  echo $_SESSION['cu_name'];?></td>
              </tr>
              <tr>
                <td height="19" align="left" class="headline" ><input type="hidden" name="hdn_cu_id" id="hdn_cu_id" value="<?php echo $d;?>" />
                  Access analyse year for
                  <?php  echo $ssyear;?></td>
              </tr>
              <tr>
                <td height="18" class="errortext"><?php require_once('access_message/access_message.php'); ?></td>
              </tr>
              <tr>
                <td height="54" align="left"><table width="105%" height="115" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
                    <tr>
                      <td width="72%" height="23" bgcolor="#DDDDDD" class="banner_text">&nbsp;&nbsp;&nbsp;&nbsp;Question Category</td>
                      <td width="28%" bgcolor="#DDDDDD" class="banner_text">Marks</td>
                    </tr>
                    <?php 
			  	$count =0;
				$cate_code=access::check_summary($d,$ssyear);
				//echo count($cate_code);exit;
			  	for($a=0;$a<count($cate_code);$a++)
				{
					$row=each($cate_code);
					?>
                    <tr>
                      <td height="23" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                      	$CatProsp=access::get_mi_category_name($row['value']['CatCode']);
						echo $CatProsp['CatProsp'];
                      ?></td>
                      <td class="intro_text"><?php
                      	$total=access::get_marks($_SESSION['year'],$d,$row['value']['CatCode']);
						echo $total['total'];
						$count+=$total['total'];
                      ?></td>
                    </tr>
                    <?php   }?>
                    <tr>
                      <td height="23" bgcolor="#F5F5F5"><span class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;Total Score Points</span></td>
                      <td align="center" bgcolor="#F5F5F5" class="intro_text"><?php echo $count;?></td>
                    </tr>
                    <tr>
                      <td height="23" bgcolor="#F5F5F5"><span class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;Percentage</span></td>
                      <td align="center" bgcolor="#F5F5F5" class="intro_text"><?php echo round(((($count)/348)*100),0)."%" ;?></td>
                    </tr>
                    <tr>
                      <td height="23" bgcolor="#F5F5F5" ><span class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;Branding</span></td>
                      <td align="center" bgcolor="#F5F5F5" class="intro_text"><?php
				
					if($count>=313)
					{
						echo "Platinum.";
					}
					elseif((313>$count) && ($count>=279))
					{
						echo "Gold.";
					}
					elseif((279>$count) && ($count>=243))
					{
						echo "Silver.";
					}
					elseif($count>=208)
					{
						echo "Bronze.";
					}
					else
					{
						echo " Below the Standed. ";
					}
				?></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="19" colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td height="19" colspan="2"><table width="100%" border="1" cellpadding="0" class="" style="border-collapse:collapse">
                    <tr class="banner_text">
                      <td width="37%" height="109" align="center" bgcolor="#DDDDDD">Branding</td>
                      <td width="35%" align="center" bgcolor="#DDDDDD">SCORE</td>
                      <td width="28%" align="center" bgcolor="#DDDDDD">EQUIVALENT %
                        provided that there
                        is no percentage
                        lower than 50% in
                        any perspective</td>
                    </tr>
                    <tr>
                      <td height="24"><span class="intro_text">&nbsp;Bronze</span></td>
                      <td align="center"><span class="intro_text">208-242</span></td>
                      <td align="center"><span class="intro_text">60-70%</span></td>
                    </tr>
                    <tr>
                      <td height="24"><span class="intro_text">&nbsp;Silver</span></td>
                      <td align="center"><span class="intro_text">243-278</span></td>
                      <td align="center"><span class="intro_text">71-80%</span></td>
                    </tr>
                    <tr>
                      <td height="24"><span class="intro_text">&nbsp;Gold</span></td>
                      <td align="center"><span class="intro_text">279-313</span></td>
                      <td align="center"><span class="intro_text">81-90%</span></td>
                    </tr>
                    <tr>
                      <td height="24"><span class="intro_text">&nbsp;Platinum</span></td>
                      <td align="center"><span class="intro_text">Above 313</span></td>
                      <td align="center"><span class="intro_text">above 90%</span></td>
                    </tr>
                </table></td>
              </tr>
          </table></td>
          <td width="19%" align="left" bgcolor="#D6EBFF">&nbsp;</td>
        </tr>
        <tr>
          <td width="18%" align="center" bgcolor="#D6EBFF"></td>
          <td width="63%" align="center" valign="top" bgcolor="#D6EBFF"><img src="access_image/que_fot.gif" width="100%" height="16" /></td>
          <td width="19%" align="center" bgcolor="#D6EBFF">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" bgcolor="#D6EBFF"><table width="100%" border="0">
              <tr>
                <td width="10%">&nbsp;</td>
                <td width="10%">&nbsp;</td>
                <td width="47%">&nbsp;</td>
                <td width="23%"><label>
                    <input name="btn_exit" type="button" class="button" id="btn_exit" value="EXIT" onclick="window.location.href='access_page.php?d=<?php echo $d;?>'"/>
                </label></td>
                <td width="10%">&nbsp;</td>
              </tr>
          </table></td>
        </tr>
      </table></td>
  </tr>
	<tr>
		<td height="19" bgcolor="#D6EBFF">
                
       
        
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
 </form>
</body>
</html>
