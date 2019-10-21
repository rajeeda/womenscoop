<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once('classes/about_us_member.class.php');
$u_le_id=isset($_GET['u_le_id'])?$_GET['u_le_id']:'';
$u_id   =isset($_GET['u_id'])?$_GET['u_id']:'';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
</head>

<body >
<form id="form1" name="form1" method="post" action="controlers/about_us_member_controler.php?mode=edit_member_reg_security">
  <table width="42%" height="83" bgcolor="#EFEFEF"  border="0" cellpadding="2" cellspacing="2" align="center">
    <tr>
      <td colspan="4"><div id="error">
        <?php include('messages/about_us_member.message.php'); ?>
        <input type="hidden" name="hdn_u_le_id" id="hdn_u_le_id" value="<?php echo $u_le_id;?>" />
        <input type="hidden" name="hdn_u_id" id="hdn_u_id" value="<?php echo $u_id ;?>" />
      </div></td>
    </tr>
    <tr>
      <td width="3%">&nbsp;</td>
      <td width="27%">User Name</td>
      <td width="3%">:</td>
      <td width="67%"><span id="sprytextfield2">
        <label>
          <input type="text" name="txt_user" id="txt_user" required/>
        </label>
      <span class="textfieldRequiredMsg">*</span></span></td>
</tr>
    <tr>
      <td>&nbsp;</td>
      <td> New Password</td>
      <td>:</td>
      <td><span id="sprypassword1">
        <label>
          <input type="password" name="txt_pass" id="txt_pass" required/>
        </label>
      <span class="passwordRequiredMsg">*</span></span></td>
</tr>
    <tr>
      <td>&nbsp;</td>
      <td>Retype-Password</td>
      <td>:</td>
      <td><span id="spryconfirm1">
        <label>
          <input type="password" name="txt_repass" id="txt_repass" required/>
        </label>
      <span class="confirmRequiredMsg">*</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right"><input name="btn_submit" type="submit" class="button" value="Update" id="btn_submit" /></td>
      <td>&nbsp;</td>
      <td align="left"><input name="btn_cancel" type="button" class="button" value="Cancel" onclick="window.location.href='edit_about_us_member.php?u_le_id=<?php echo $u_le_id;?>&u_id=<?php echo $u_id;?>'" id="btn_cancel" /></td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
    </tr>
  </table>
</form>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytxt_user_name2", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "txt_pass");
//-->
</script>
</body>
</html>