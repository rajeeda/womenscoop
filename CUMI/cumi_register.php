<?php 
	require_once('cumi_includes/cumi_config.php');
	require_once ('cumi_class/db.class.php');
	require_once ('cumi_class/register.class.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="cumi_style/FREE.css" />
<title>CUMI</title>

<style type="text/css">
<!--
.td_heght {	height:1px;
	background:#DDDDDD;
	width:inherit
}
-->
</style>
<link href="cumi_style/main.css" rel="stylesheet" type="text/css">
<link href="cumi_style/aaccu.css" rel="stylesheet" type="text/css">
<link href="cumi_SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css">
<link href="cumi_SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<script src="cumi_SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="cumi_SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="cumi_SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script src="cumi_SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="cumi_SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="cumi_SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="cumi_SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<link href="../css/aaccu.css" rel="stylesheet" type="text/css">
<link href="../css/bgimage.css" rel="stylesheet" type="text/css">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<link href="cumi_SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="840" height="175" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
<tr>
		<td height="102" align="center" valign="top" bgcolor="#DDDDDD">
		 	 
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
      <form id="form1" name="form1" method="post" action="cumi_control/cumi_register_control.php?mode=reg">
  <table width="94%" height="525" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="19" colspan="5" align="left" class="big">&nbsp;</td>
    </tr>
    <tr>
      <td width="11%" height="15" align="center" valign="bottom" bgcolor="#DDDDDD">&nbsp;</td>
      <td colspan="3" align="center" valign="bottom" bgcolor="#DDDDDD"><img src="cumi_image/que_head.gif" width="100%" height="15" /></td>
      <td width="13%" height="15" align="center" valign="bottom" bgcolor="#DDDDDD">&nbsp;</td>
    </tr>
    <tr>
      <td height="43" align="center" bgcolor="#DDDDDD">&nbsp;</td>
      <td width="3%" height="43" align="center" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="71%" height="43" align="center" bgcolor="#FFFFFF"><table width="100%" border="0">
  <tr>
    <td><p class="IntroText_new">ACCU Web Based CUMI member register<br>
      
      </p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="errortext"><?php require_once('cumi_message/cumi_message.php'); ?></td>
  </tr>
</table>

        <fieldset>
        <legend class="aboutusbod">Basic Data</legend>
        <table width="102%" height="352" border="0" cellpadding="2" cellspacing="0">
          
          <tr>
            <td colspan="2" valign="top" class="intro_text">Country Name</td>
            <td width="14" valign="top">&nbsp;</td>
            <td width="292" valign="top"><span id="sprytext_name">
              <label><span class="textfieldRequiredMsg">*</span></label>
            </span><span id="spryselect1">
            <label>
              <select name="text_name" id="text_name">
              	<option value="-1" selected="Selected">Select country</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua">Antigua</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Barbuda">Barbuda</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="Virgin islands">British Virgin isl.</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman isl">Cayman Islands</option>
                <option value="Central African Rep">Central African Rep.</option>
                <option value="Chad">Chad</option>
                <option value="Channel isl">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Colombia">Colombia</option>
                <option value="Congo">Congo</option>
                <option value="cook isl">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Croatia">Croatia</option>
                <option value="Curacao">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value=" Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value=" Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Faeroe isl">Faeroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Gemany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="GB">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea Bissau">Guinea Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Irak">Irak</option>
                <option value="Iran">Iran</option>
                <option value="Ireland">Ireland</option>
                <option value="Northern Ireland">Ireland, Northern</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Ivory Coast">Ivory Coast</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Liberia">Liberia</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall isl">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia">Micronesia</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar/Burma</option>
                <option value="Namibia">Namibia</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value=""Palau>Palau</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saba">Saba</option>
                <option value="Saipan">Saipan</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Scotland">Scotland</option>
                <option value="Senegal">Senegal</option>
                <option value=""Seychelles>Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovac Republic">Slovak Republic</option>
                <option value="Slovenia">Slovenia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Korea">South Korea</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Trinidad-Tobago">Trinidad-Tobago</option>
                <option value="Tunesia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="U.S. Virgin isl">U.S. Virgin Islands</option>
                <option value="USA">U.S.A.</option>
                <option value="Uganda">Uganda</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Urugay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City">Vatican City</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Wales">Wales</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
              </select>
            </label>
            <span class="selectInvalidMsg">*</span><span class="selectRequiredMsg">Please select a country.</span></span></td>
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
            <td colspan="2" valign="top" class="intro_text">Name of Credit Union</td>
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
            <td colspan="2" valign="top" class="intro_text">Full name of Customer</td>
            <td valign="top">&nbsp;</td>
            <td align="left" valign="top"><span id="sprytextfield13">
              <label>
                <input name="txt_cus_name" type="text" id="txt_cus_name" size="40">
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
            <td colspan="2" valign="top" class="intro_text">Nic No</td>
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
            <td height="22" colspan="2" valign="top" class="intro_text">User Name</td>
            <td valign="top">&nbsp;</td>
            <td valign="top"><span id="sprytextfield12">
              <label>
                <input type="text" name="txt_user" id="txt_user">
                <span class="textfieldRequiredMsg">*</span></label>
</span></td>
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
            <td valign="top">&nbsp;</td>
            <td valign="top"><span id="sprytxt_re_pass">
              <input type="password" name="txt_re_pass" id="txt_re_pass" />
              <span class="confirmRequiredMsg">*</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
          </tr>
          <tr>
            <td height="19" colspan="2" valign="top" class="intro_text">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="22" colspan="4" valign="top" class="intro_text"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="255" align="right"><label>
                  <input name="button_cancel" type="button" class="lbutton" id="button_cancel" onClick="window.location.href='index.php'" value="Cancel" />
                </label></td>
                <td width="144" align="center">&nbsp;</td>
                <td width="142" align="center"><label>
                  <input name="button_submit" type="submit" class="lbutton" id="button_submit" value="Submit" />
                </label></td>
              </tr>
            </table></td>
            </tr>
        </table>
        </fieldset>      </td>
      <td width="2%" align="center" bgcolor="#FFFFFF">&nbsp;</td>
      <td height="43" align="center" bgcolor="#DDDDDD">&nbsp;</td>
    </tr>
    
    
    <tr>
      <td height="19" align="center" valign="top" bgcolor="#DDDDDD">&nbsp;</td>
      <td height="19" colspan="3" align="center" valign="top" bgcolor="#DDDDDD"><img src="cumi_image/que_fot.gif" alt="" width="145%" height="15" /></td>
      <td height="19" align="center" valign="top" bgcolor="#DDDDDD">&nbsp;</td>
    </tr>
    <tr>
      <td height="19" colspan="5" bgcolor="#DDDDDD">&nbsp;</td>
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
var sprytextfield22 = new Spry.Widget.ValidationTextField("sprytextfield22");


var sprypassword1 	= new Spry.Widget.ValidationPassword("sprytxt_pass");
var spryconfirm1 	= new Spry.Widget.ValidationConfirm("sprytxt_re_pass", "txt_pass");
var sprytextfield23 = new Spry.Widget.ValidationTextField("sprytext_reg_no", "none");
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12", "none");
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13", "none");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1"});
//-->
</script>
</body>
</html>
