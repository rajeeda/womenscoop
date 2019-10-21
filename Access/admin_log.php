<?php 	
    require_once('includes/access_config.php');
	require_once ('classes/db.class.php');
	require_once ('access_class/access_class.php');
    ?>
    <link href="style.css" rel="stylesheet" type="text/css" />
	<script src="access_SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
	<script src="access_SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<link href="access_SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
	<link href="css/aaccu.css" rel="stylesheet" type="text/css">

	<style type="text/css">
    <!--
    a:hover {
        color: #00F;
    }
    -->
    </style>
    <link href="access_SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <table width="286" height="133" border="0">
    <tr>
          <td width="280">
            <form id="form1" name="form1" method="post" action="access_control/access_control.php?mode=logging ">
      <table width="283" height="125" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td colspan="5" align="center" bgcolor="#C5CFE3"><label class="IntroText_new">Access Bineding Admin logging</label></td>
                                </tr>
                                <tr>
                                  <td colspan="5" align="left" bgcolor="#C5CFE3"><span style="color:#F00"><?php require_once('access_message/access_message.php'); ?></span>                              </td>
              </tr>
                                <tr>
                                  
                                  <td width="3" height="28" align="left" valign="top" bgcolor="#C5CFE3"></td>
                                  <td width="67" align="left" valign="top" bgcolor="#C5CFE3"><label class="Index_heading_01">Username</label></td>
                                  <td width="4" valign="top" bgcolor="#C5CFE3">&nbsp;</td>
                                  <td width="172" align="left" valign="top" bgcolor="#C5CFE3">
                                 
                                  <span id="sprytxt_user">
                                  <label>
                                    <input type="text" name="txt_user" id="txt_user" />
                                  <span class="textfieldRequiredMsg">*</span></label>
    </span></td>
                                  <td width="37" align="left" valign="top" bgcolor="#C5CFE3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="3" height="28" align="left" valign="top" bgcolor="#C5CFE3"></td>
                                  <td height="28" align="left" valign="top" bgcolor="#C5CFE3"><label class="Index_heading_01">Password</label></td>
                                  <td valign="top" bgcolor="#C5CFE3">&nbsp;</td>
                                  <td align="left" valign="top" bgcolor="#C5CFE3"><span id="sprytxt_Password_admin">
                                <label>
                                  <input name="txt_Password" type="password" class="login_boxes" id="txt_Password" />
                                  <span class="passwordRequiredMsg">*</span></label>
      </span></td>
                                  <td align="left" valign="top" bgcolor="#C5CFE3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td height="13" colspan="5" valign="top" bgcolor="#C5CFE3"><table width="100%" border="0" cellspacing="0" cellpadding="1">
                          <tr>
                                        <td width="70" height="20" align="right">&nbsp;</td>
                                    <td width="73" align="center"><label>
                                      <input name="btn_cancel" type="submit" class="img_border" id="btn_cancel" value="Submit" />
                                    </label></td>
                                    <td width="134" align="center"><input type="submit" name="btn_Submit" id="btn_Submit" value="Logging"  class="img_border"/></td>
                                    </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td height="19" colspan="5" bgcolor="#C5CFE3">&nbsp;</td>
                                </tr>
              </table>
            </form>
          </td>
      </tr>
      </table>
    <script type="text/javascript">
    var sprypassword1 = new Spry.Widget.ValidationPassword("sprytxt_Password_admin");
    var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
    var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytxt_user", "none");
    </script>