<?php 
	require_once('access_includes/access_config.php');
	require_once ('access_class/db.class.php');
	require_once ('access_class/register.class.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Access Form</title>

<style type="text/css">
<!--
.td_heght {	height:1px;
	background:#DDDDDD;
	width:inherit
}
-->
</style>
<link href="access_style/main.css" rel="stylesheet" type="text/css">
<link href="access_style/aaccu.css" rel="stylesheet" type="text/css">
<link href="access_SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css">
<link href="access_SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>

<script src="access_SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="access_SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="access_SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="access_SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="access_SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<link href="access_SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="access_SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="access_SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<link href="../css/aaccu.css" rel="stylesheet" type="text/css">
<link href="../css/bgimage.css" rel="stylesheet" type="text/css">
<link href="../css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="840" height="175" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
<tr>
		<td height="102" align="center" valign="top" bgcolor="#DDDDDD">
		 	 
<!-- ImageReady Slices (index_01.psd) -->
<table id="Table_01" width="843" height="102" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center"><img src="access_image/access_01_01.jpg" width="840" height="118" /></td>
	</tr>
	<tr>
		<td height="2" class="menuubar_image" align="center">		</td>
	</tr>
</table>
<!-- End ImageReady Slices -->        </td>
  </tr>
	<tr>
	  <td height="19" bgcolor="#D6EBFF">
      <form id="form1" name="form1" method="post" action="access_control/access_register_control.php?mode=reg">
  <table width="94%" height="794" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="5" align="left" class="big">&nbsp;</td>
    </tr>
    <tr>
      <td width="11%" height="15" align="center" valign="bottom" bgcolor="#D6EBFF">&nbsp;</td>
      <td colspan="3" align="center" valign="bottom" bgcolor="#D6EBFF"><img src="access_image/que_head.gif" width="100%" height="15" /></td>
      <td width="13%" height="15" align="center" valign="bottom" bgcolor="#D6EBFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="43" align="center" bgcolor="#D6EBFF">&nbsp;</td>
      <td height="43" align="center" bgcolor="#FFFFFF">&nbsp;</td>
      <td height="43" align="center" bgcolor="#FFFFFF"><table width="100%" border="0">
  <tr>
    <td><p class="IntroText_new">ACCU Web Based Access Application<br>
      
      </p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="errormsg"><?php require_once('access_message/access_message.php'); ?></td>
  </tr>
</table>

        <fieldset>
        <legend class="aboutusbod">Basic Data</legend>
        <table width="102%" height="343" border="0" cellpadding="0" cellspacing="2">
          
          <tr>
            <td colspan="2" valign="top" class="intro_text">Country Name</td>
            <td width="14" valign="top">&nbsp;</td>
            <td width="292" valign="top"><span id="sprytext_name">
              <label>
              <input name="text_name" type="text" id="text_name" size="35">
              <span class="textfieldRequiredMsg">*</span></label>
            </span></td>
          </tr>
          <tr>
            <td colspan="2" valign="top" class="intro_text">District</td>
            <td width="14" valign="top">&nbsp;</td>
            <td valign="top"><span id="sprytext_district">
              <label>
              <input name="text_district" type="text" id="text_district" size="35">
              <span class="textfieldRequiredMsg">*</span></label>
            </span></td>
          </tr>
          <tr>
            <td colspan="2" valign="top" class="intro_text">Name of Credit  Cooperatives and societies  Union</td>
            <td width="14" valign="top">&nbsp;</td>
            <td valign="top"><span id="sprytextfield3">
              <label></label>
              <span class="textfieldRequiredMsg"><br>
              *</span></span><span id="sprytext_name_credit_coop">
                <label>
                <input name="text_name_credit_coop" type="text" id="text_name_credit_coop" size="40">
                <span class="textfieldRequiredMsg">*</span></label>
            </span></td>
          </tr>
          <tr>
            <td width="75" valign="top" class="intro_text">Address </td>
            <td width="102" valign="top" class="intro_text"><table width="69" height="81" border="0">
                <tr>
                  <td width="96" height="23">&nbsp;</td>
                </tr>
                <tr>
                  <td><span class="intro_text">City</span></td>
                </tr>
                <tr>
                  <td><span class="intro_text">Country</span></td>
                </tr>
            </table></td>
            <td width="14" valign="top">&nbsp;</td>
            <td align="left" valign="top"><table width="150" height="85" border="0" cellspacing="0">
                <tr>
                  <td width="148"><span id="sprytext_address">
                    <label>
                    <input name="text_address" type="text" id="text_address" size="38">
                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td><span id="sprytext_address_city">
                    <label>
                    <input name="text_address_city" type="text" id="text_address_city" size="38">
                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td><span id="sprytext_address_country">
                    <label>
                    <input name="text_address_country" type="text" id="text_address_country" size="38">
                    </label>
                  </span></td>
                </tr>
</table></td>
          </tr>
          <tr>
            <td colspan="2" valign="top" class="intro_text">Register Number</td>
            <td valign="top">&nbsp;</td>
            <td valign="top"><span id="sprytext_reg_no">
              <label>
              <input name="text_reg_no" type="text" id="text_reg_no" size="28">
              <span class="textfieldRequiredMsg">*</span></label>
            </span></td>
          </tr>
          <tr>
            <td colspan="2" valign="top" class="intro_text">Phone Number</td>
            <td width="14" valign="top">&nbsp;</td>
            <td valign="top"><label><span id="sprytextfield4"><span class="textfieldRequiredMsg"><br>
              *</span></span></label>
              <span id="sprytext_telephone">
              <label>
              <input name="text_telephone" type="text" id="text_telephone" size="28">
              <span class="textfieldRequiredMsg">*</span></label>
              </span></td>
          </tr>
          <tr>
            <td colspan="2" valign="top" class="intro_text">Fax</td>
            <td width="14" valign="top">&nbsp;</td>
            <td valign="top"><label><span id="sprytext_fax">
              <input name="text_fax" type="text" id="text_fax" size="28">
            </span></label></td>
          </tr>
          <tr>
            <td height="24" colspan="2" valign="top" class="intro_text">E Mail Address</td>
            <td width="14" valign="top">&nbsp;</td>
            <td valign="top"><label><span id="sprytext_email">
              <input name="text_email" type="text" id="text_email" size="28">
              <span class="textfieldInvalidFormatMsg">Wrong e-mail address.</span></span></label></td>
          </tr>
          <tr>
            <td height="22" colspan="2" valign="top" class="intro_text">Pass word</td>
            <td width="14" valign="top">&nbsp;</td>
            <td valign="top">
            	<span id="sprytxt_pass">
                  <label>
                    <input type="password" name="txt_pass" id="txt_pass" />
                  </label>
            <span class="passwordRequiredMsg">*</span></span>            </td>
          </tr>
          <tr>
            <td height="22" colspan="2" valign="top" class="intro_text">Re type Pass Word</td>
            <td width="14" valign="top">&nbsp;</td>
            <td valign="top">
            	<span id="sprytxt_re_pass">
                  <input type="password" name="txt_re_pass" id="txt_re_pass" />
            <span class="confirmRequiredMsg">*</span><span class="confirmInvalidMsg">The values don't match.</span></span>            </td>
          </tr>
        </table>
        </fieldset>
      </td>
      <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
      <td height="43" align="center" bgcolor="#D6EBFF">&nbsp;</td>
    </tr>
    <tr>
      <td width="11%" height="19" align="center" bgcolor="#D6EBFF">&nbsp;</td>
      <td width="3%" height="0" align="center" bgcolor="#FFFFFF">&nbsp;</td>
  <td width="71%" height="1" align="center" bgcolor="#FFFFFF"><fieldset>
  <legend class="aboutusbod">Secondery Data</legend>
  <table width="100%" height="339" border="0" cellpadding="0" cellspacing="2">
    
    <tr>
      <td colspan="2" valign="top" class="intro_text">Operational Area</td>
      <td width="2" valign="top">&nbsp;</td>
      <td width="292" valign="top">
      	<span id="spryselect_operation">
      	<label>
      	  <select name="select_operation" id="select_operation">
          	<option value="-1" selected="Selected">Select</option>
            <option value="1">Rural</option>
            <option value="2">Urban</option>
            <option value="3">Industry</option>
            <option value="4">Mix</option>
    	  </select>
    	</label>
      	<span class="selectInvalidMsg">*</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td width="137" valign="top" class="intro_text">Number Of Employee</td>
      <td width="52" valign="top" class="intro_text"><table width="47" border="0">
          <tr>
            <td width="41" height="23"><span class="intro_text">Male</span></td>
          </tr>
          <tr>
            <td><span class="intro_text">Female</span></td>
          </tr>
      </table></td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><table width="100%" height="54" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="185"><span id="sprytext_employee_male">
              <label>
              <input type="text" name="text_employee_male" id="text_employee_male">
              </label>
              <span class="textfieldInvalidFormatMsg">Allow number format.</span><span class="textfieldRequiredMsg">*</span></span></td>
          </tr>
          <tr>
            <td><span id="sprytext_employee_female">
              <label>
              <input type="text" name="text_employee_female" id="text_employee_female">
              <span class="textfieldRequiredMsg">*</span><span class="textfieldInvalidFormatMsg">Allow number format.</span></label>
            </span></td>
          </tr>
</table></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="intro_text">Established In (Year)</td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><label><span id="sprytextfield14">
        <input type="text" name="text_establish" id="text_establish">
      </span></label></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="intro_text">Type Of Services</td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><label><span id="sprytextfield15">
        <input name="text_service" type="text" id="text_service" size="40">
      </span></label></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="intro_text">Total Share Amount (in US $)</td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><label><span id="sprytextfield16">
        <input name="text_share" type="text" id="text_share" size="40">
      </span></label></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="intro_text">Deposit</td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><span id="sprytext_deposite">
        <label>
        <input name="text_deposite" type="text" id="text_deposite" size="32">
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="intro_text">Savings</td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><span id="sprytext_savings">
        <label>
        <input name="text_savings" type="text" id="text_savings" size="32">
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="intro_text">Loan Outstanding(less than US $300)</td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><span id="sprytext_loan">
        <label>
        <input type="text" name="text_loan" id="text_loan">
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="intro_text">Total Reserve</td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><span id="sprytext_reserve">
        <label>
        <input type="text" name="text_reserve" id="text_reserve">
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="intro_text">Total Assest</td>
      <td valign="top">&nbsp;</td>
      <td valign="top"><span id="sprytext_assest">
        <label>
        <input type="text" name="text_assest" id="text_assest">
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="30" colspan="4" align="center"><table width="200" border="0" align="right">
          <tr>
            <td width="89" align="center"><label>
              <input name="button_submit" type="submit" class="lbutton" id="button_submit" value="Submit" />
            </label></td>
            <td width="21" align="center">&nbsp;</td>
            <td width="76" align="center"><label>
              <input name="button_cancel" type="button" class="lbutton" id="button_cancel" onClick="window.location.href='access_branding.php'" value="Cancel" />
            </label></td>
          </tr>
      </table></td>
    </tr>
  </table>
  </fieldset>
  </td>
      <td width="2%" align="center" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="13%" height="19" align="center" bgcolor="#D6EBFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="19" align="center" valign="top" bgcolor="#D6EBFF">&nbsp;</td>
      <td height="19" colspan="3" align="center" valign="top" bgcolor="#D6EBFF"><img src="access_image/que_fot.gif" alt="" width="145%" height="15" /></td>
      <td height="19" align="center" valign="top" bgcolor="#D6EBFF">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#D6EBFF">&nbsp;</td>
    </tr>
  </table>
</form>
        
        
        
        
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

<script type="text/javascript">
<!--
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytext_email", "email", {isRequired:false});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytext_fax", "none", {isRequired:false});
var sprytextfield9  = new Spry.Widget.ValidationTextField("sprytext_telephone", "none");
var sprytextfield4  = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"]});
var sprytextfield8  = new Spry.Widget.ValidationTextField("sprytext_address_country", "none", {isRequired:false});
var sprytextfield7  = new Spry.Widget.ValidationTextField("sprytext_address_city", "none", {isRequired:false});
var sprytextfield5  = new Spry.Widget.ValidationTextField("sprytext_name_credit_coop", "none");
var sprytextfield3  = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
var sprytextfield2  = new Spry.Widget.ValidationTextField("sprytext_district", "none");
var sprytextfield1  = new Spry.Widget.ValidationTextField("sprytext_name", "none");
var sprytextfield6  = new Spry.Widget.ValidationTextField("sprytext_address", "none", {isRequired:false});
var sprytextfield21 = new Spry.Widget.ValidationTextField("sprytext_assest", "none", {isRequired:false});
var sprytextfield20 = new Spry.Widget.ValidationTextField("sprytext_reserve", "none", {isRequired:false});
var sprytextfield19 = new Spry.Widget.ValidationTextField("sprytext_loan", "none", {isRequired:false});
var sprytextfield18 = new Spry.Widget.ValidationTextField("sprytext_savings", "none", {isRequired:false});
var sprytextfield17 = new Spry.Widget.ValidationTextField("sprytext_deposite", "none", {isRequired:false});
var sprytextfield16 = new Spry.Widget.ValidationTextField("sprytextfield16", "none", {isRequired:false});
var sprytextfield15 = new Spry.Widget.ValidationTextField("sprytextfield15", "none", {isRequired:false});
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14", "none", {isRequired:false});
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytext_employee_female", "integer");
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytext_employee_male", "integer");
var sprytextfield22 = new Spry.Widget.ValidationTextField("sprytextfield22");


var sprypassword1 	= new Spry.Widget.ValidationPassword("sprytxt_pass");
var spryconfirm1 	= new Spry.Widget.ValidationConfirm("sprytxt_re_pass", "txt_pass");
var spryselect3 	= new Spry.Widget.ValidationSelect("spryselect_operation", {invalidValue:"-1"});
var sprytextfield23 = new Spry.Widget.ValidationTextField("sprytext_reg_no", "none");
//-->
</script>
</body>
</html>
