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
	
	$marks  ='';
	$pmarks ='';
	
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
<table width="840" height="178" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
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
	  <td height="19" bgcolor="#DDDDDD"></td>
  </tr>
	<tr>
	  <td height="19" bgcolor="#DDDDDD"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="3" align="left" class="big">
                    <strong><?php //echo $row1['value']['Category'];?></strong>                </td>
              </tr>
              
              <tr>
                <td width="18%" align="center" bgcolor="#DDDDDD">&nbsp;</td>
                <td width="63%" align="center" valign="bottom" bgcolor="#DDDDDD"><img src="cumi_image/que_head.gif" alt="" width="100%" height="16" /></td>
                <td width="19%" align="center" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
              <tr>
                <td width="18%" align="left" bgcolor="#DDDDDD">&nbsp;</td>
                <td width="63%" align="left" valign="top" bgcolor="#FFFFFF">
                 <form action="cumi_control/cumi_control.php?mode=que&amp;d=$d" method="post" name="form1" id="form1">
          <table align="center" width="450" height="152" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="23" colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td height="19" align="left" class="headline" ><?php  echo $_SESSION['cu_name'];?></td>
              <td width="17" rowspan="4" >&nbsp;</td>
            </tr>
            <tr>
              <td height="19" align="left" class="headline" >
                <input type="hidden" name="hdn_cu_id" id="hdn_cu_id" value="<?php echo $d;?>" />              
                CUMI analyse year for 
                <?php  echo $_SESSION['year'];?>              </td>
              </tr>
            <tr>
              <td height="18" class="errortext"><?php require_once('cumi_message/cumi_message.php'); ?>              </td>
            </tr>
            <tr>
              <td height="54" align="left">
              <table width="100%" height="92" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
              	 <tr>
                    <td width="68%" height="23" bgcolor="#DDDDDD" class="banner_text">&nbsp;&nbsp;&nbsp;&nbsp;Question Category</td>
                    <td width="24%" align="center" bgcolor="#DDDDDD" class="banner_text">Marks</td>
           	    </tr>
              <?php 
			  	$cate_code=access::check_summary($d,$_SESSION['year']);
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
                      <td align="center" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;<?php
                      	$total=access::get_marks($_SESSION['year'],$d,$row['value']['CatCode']);
						echo $total['total']; 
						$marks += $total['total'];
                      ?></td>
                    </tr>
                      <?
			  ?>
                   <?php }?>
                    <tr>
                     <td height="23" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;Total Score Points</td>
                        <td align="center" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $marks; ?></td>
                      </tr>
                      <tr>
                        <td height="23" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;Percentage</td>
                        <td align="center" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php 
					   $pmarks = ($marks/68)*100;
					   echo round($pmarks,2)." % ";
					  
					  ?></td>
                      </tr>
                    </table>
              </td>
            </tr>
            <tr>
              <td height="19" colspan="2">&nbsp;</td>
            </tr>
          </table>
        </form>
        
             
               </td>
                <td width="19%" align="left" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
              <tr>
              	
                <td width="18%" align="center" bgcolor="#DDDDDD"></td>
                <td width="63%" align="center" valign="top" bgcolor="#DDDDDD"><img src="cumi_image/que_fot.gif" width="100%" height="16" /></td>
                <td width="19%" align="center" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#DDDDDD"><table width="100%" border="0">
                  <tr>
                    <td width="10%">&nbsp;</td>
                    <td width="10%">&nbsp;</td>
                    <td width="47%">&nbsp;</td>
                    <td width="23%"><form id="form2" name="form2" method="post" action="">
                      <label>
                        <input name="btn_exit" type="button" class="button" id="btn_exit" value="EXIT" onClick="window.location.href='cumi_page.php?d=<?php echo $d;?>'"/>
                      </label>
                    </form></td>
                    <td width="10%">&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
        </table></td>
  </tr>
	<tr>
		<td height="19" bgcolor="#DDDDDD">
                
       
        
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