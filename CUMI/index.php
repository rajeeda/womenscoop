<?Php
//require_once('includes/config.php');
	require_once('cumi_includes/cumi_config.php');
	require_once ('cumi_class/db.class.php');
	require_once ('cumi_class/cumi_class.php');
	session_unset();
	session_destroy();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="images/animated_favicon.gif" />
<link href="css/aaccu.css" rel="stylesheet" type="text/css">
<link href="css/bgimage.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/chromestyle2.css" />

<script type="text/javascript" src="Scripts/chrome.js"></script>

 	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="cumi_SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
    <script src="cumi_SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="cumi_SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
  	<link href="cumi_SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
    <link href="css/aaccu.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
a:hover {
	color: #00F;
}
.classHead {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #06C;
	font-weight: bold;
}
.classname {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000066;
	font-weight: bold;
}
-->
</style>
<title>CUMI</title>
<link href="css/bgimage.css" rel="stylesheet" type="text/css" />

<link href="css/aaccu.css" rel="stylesheet" type="text/css" />
<link href="../css/bgimage.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="840" height="594" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
<tr>
		<td height="533" align="center">
		 	 
<!-- ImageReady Slices (index_01.psd) -->
<table id="Table_01" width="843" height="127" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center"><img src="cumi_image/access.jpg" width="843" height="100" /></td>
	</tr>
	<tr>
		<td height="27" align="center" bgcolor="#DDDDDD"><table width="90%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="50" colspan="2" align="center" class="IntroText_new"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="100%" colspan="2"><p align="center" class="About_US_link"><span class="classHead">Credit Union  Microfinance Innovation&nbsp; Award&nbsp; 2010 <em>Presented to</em></span> <br /><br />
                  <span class="classname">Paglaum Multi-Purpose Cooperative, The  Philippines</span><br />
                  <span class="classname">Bindhavasini Savings Co-operative Society Ltd. NEPLL </span></p>
                  <p class="aboutus_text">In recognition for  its overall achievement in outreach to the poorest and innovations in products  towards achieving financial inclusions. This award distinguishes that the  program creates sustainable impact on the low-income and disadvantaged groups  by inculcating thrift habit, continuous financial  literacy education, offering wealth building financial services that ultimately  help members reach their financial destination &ndash; the big leap out of the  vicious cycle of poverty. </p></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="50" colspan="2" align="center" class="IntroText_new">Tool on Poverty Alleviation Program Impact Assessment Software </td>
            </tr>
          <tr>
            <td height="74" colspan="2"><p class="aboutusbod">INTRODUCTION</p>
              <p class="text" style="text-align:justify">ACCU is a regional network of Credit Unions, which has vision of Sustainable Credit 
                Unions in Asia. ACCU developed standards for Asian credit unions following internationally 
                accepted norms necessary for credit unions to compete and sustain in the market environment.<br />
                The Asian credit union regulation does not impose Credit Union business standards or best 
                practice. ACCU undertook the project on Branding Credit Union in Asia to promote standards 
                and best practices in Asian credit unions.</p>
              <p class="text" style="text-align:justify"><br />
                This project provided very comprehensive standard on credit union operation in Asia.
                The project included technical assistance and management tools to reach the standard. It is 
                intended that this list will also provide a good source of information for new users of the<br />
                standards. These standards are regarded as management goals.</p></td>
          </tr>
          <tr>
            <td height="141" colspan="2"><table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="3" align="left" class="big">
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
             
                <form id="form1" name="form1" method="post" action="cumi_control/cumi_control.php?mode=logging ">
              <table width="368" height="186" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#D1D1D1">
                <tr>
                  <td height="37" colspan="5" align="left" bgcolor="#FFFFFF"><label class="IntroText_new"> &nbsp;&nbsp;&nbsp;Tool on Poverty Alleviation Program Impact Assessment Software </label></td>
                  </tr>
                <tr>
                  <td colspan="5" align="left" bgcolor="#FFFFFF"><span style="color:#F00">
                    <?php require_once('cumi_message/cumi_message.php'); ?>
                    </span> </td>
                  </tr>
                <tr>
                  <td width="17" height="28" align="left" valign="top" bgcolor="#FFFFFF"></td>
                  <td width="75" align="left" valign="top" bgcolor="#FFFFFF"><label class="Index_heading_01">Username</label>                    </td>
                  <td width="16" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="246" align="left" valign="top" bgcolor="#FFFFFF">
				  <?php $res=access::get_union();
							  //echo count($res);exit;
							  ?>
                    <span id="spryselect1"><span class="selectInvalidMsg">*</span> <span class="selectRequiredMsg">*</span></span><span id="sprytextfield1">
                      <label>
                        <input type="text" name="txt_name" id="txt_name" />
                        <span class="textfieldRequiredMsg">*</span></label>
</span></td>
                  <td width="14" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                <tr>
                  <td height="28" align="left" valign="top" bgcolor="#FFFFFF"></td>
                  <td height="28" align="left" valign="top" bgcolor="#FFFFFF">
                  <label class="Index_heading_01">Password</label>
                  </td>
                  <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                  <td align="left" valign="top" bgcolor="#FFFFFF">
                  <span id="sprytxt_Password">
                    <label>
                      <input name="txt_Password" type="password" class="login_boxes" id="txt_Password" />
                      <span class="passwordRequiredMsg">*</span></label>
                    </span>
                  </td>
                  <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                <tr>
                  <td height="28" align="left" valign="top" bgcolor="#FFFFFF"></td>
                  <td height="28" align="left" valign="top" bgcolor="#FFFFFF"><label class="Index_heading_01">Year</label></td>
                  <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                  <td align="left" valign="top" bgcolor="#FFFFFF">
                  <span id="spryselect2">
                    <label>
                      <select name="cmb_year" id="cmb_year">
                        <option value="-1">Select</option>
                        <?php 
				  	for($a=2000;$a<=date('Y');$a++)
					{
						?>
                        <option value="<?php echo $a;?>"><?php echo $a;?></option>
                        <?php
					}
				  ?>
                        </select>
                      </label>
                    <span class="selectInvalidMsg">*</span> <span class="selectRequiredMsg">Please select an item.</span></span>
                  </td>
                  <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr>
                  <td height="13" colspan="5" valign="top" bgcolor="#FFFFFF"><table width="188" border="0" cellspacing="0" cellpadding="1">
                    <tr>
                      <td width="129" height="20" align="right">&nbsp;</td>
                      <td width="55" align="right"><input type="submit" name="btn_Submit" id="btn_Submit" value="Logging"  class="img_border"/></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td height="19" colspan="5" bgcolor="#FFFFFF"><label><a href="cumi_register.php" class="IntroText_new"><u>Register </u></a> <span class="IntroText_new">New Member</span></label></td>
                  </tr>
                </table>
            </form>
            
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
        </table></td>
          </tr>
          <tr>
            <td width="69%" height="19">&nbsp;</td>
            <td width="3%">&nbsp;</td>
          </tr>
        </table></td>
	</tr>
</table>
<!-- End ImageReady Slices -->        </td>
  </tr>
	<tr>
		<td height="19" class="Footter_image"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr class="menubar_font">
            <td class="">&nbsp;</td>
            <td width="8%" class="menubar_font">&nbsp;</td>
            <td width="2%" class="menubar_font">&nbsp;</td>
            <td width="10%" class="menubar_font">&nbsp;</td>
            <td width="2%" class="menubar_font">&nbsp;</td>
            <td width="8%" class="menubar_font">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="24" colspan="7" align="center" class="menubar_font">CopyRight &copy; 2008 Association of Asian Confederation of Credit Unions </td>
          </tr>
        </table></td>
  </tr>
</table>
<!-- End ImageReady Slices -->

<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprytxt_Password");
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1"});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"-1"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
</script>
</body>
</html>