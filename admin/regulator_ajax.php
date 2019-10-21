<?php 
	require_once('config/config.php');
	require_once(ADMIN_PATH.'header_includes.php');
	require_once(ADMIN_CLASS_PATH.'member.class.php');
	
	$regulator  = $_GET['q'];
	$member_id = $_GET['r'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript" src="scripts/deleteconfirmations.js"></script>
</head>

<body>

  <?php 
	$regulator_details = Member:: GetRegulatordetails($regulator);
    if($regulator=="regulator")
	{
 ?>
<table width="75%"  border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="5"><table width="100%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
        <tr>
          <td width="5%">&nbsp;</td>
          <td class="title" align="left">&nbsp;</td>
          <td class="title" align="left">&nbsp;</td>
          <td class="title" align="left">&nbsp;</td>
        </tr>
        
        
        <tr>
          <td>&nbsp;</td>
          <td width="20%">Title</td>
          <td width="2%">:</td>
          <td width="73%"><label>
            <select name="cmb_title" id="cmb_title">
              <option value="select" selected="selected">Select&gt;&gt;</option>
             <option value="Mr.">Mr.</option>
                    <option value="Miss.">Miss.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Rev.">Rev.</option>
                    <option value="Atty.">Atty.</option>
                    <option value="Drs.">Drs.</option>
					<option value="Dr.">Dr.</option>
                    <option value="Engr.">Engr.</option>	
                    <option value="Prof.">Prof.</option>	
                    <option value="Asst. Prof.">Asst. Prof.</option>	
                    <option value="Assoc. Prof.">Assoc. Prof.</option>	
                    <option value="Maj. Gen.">Maj. Gen.</option>			
                    <option value="Other">Other.</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="login_text">Regular Member Name </span></td>
          <td>:</td>
          <td><input name="txt_reg_name" type="text" id="txt_reg_name" size="50" /></td>
        </tr>
        <tr>
          <td height="26">&nbsp;</td>
          <td valign="top"><span class="login_text">Regular Member Description </span></td>
          <td valign="top">:</td>
          <td><textarea name="txt_reg_des" cols="40" id="txt_reg_des"></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="login_text">Address</span></td>
          <td>:</td>
          <td><label>
            <input name="txt_add" type="text" id="txt_add" size="40" />
          </label></td>
        </tr>
      </table></td>
  </tr>
    
    <tr>
      <td width="7%">&nbsp;</td>
      <td width="7%">&nbsp;</td>
      <td width="13%">&nbsp;</td>
      <td><input type="hidden" name="hdn_member_id" id="hdn_member_id" value="<?php echo $regulator_details['member_id'];?>" />
      <input type="hidden" name="hdn_regulator_id" id="hdn_regulator_id" value="0" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="28">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="49%"><input name="btn_add" type="submit" class="button" value="    Add    " id="btn_add"  />
      <!-- <input name="btn_cancel" type="button" class="button" value="Cancel" onclick="window.location.href='new_member_basic_details.php'" id="btn_cancel" /> -->      </td>
      <td width="24%"><label></label></td>
    </tr>
  </table>
<?php
	}
	else
	{	
		
	?>
    <table width="75%"  border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="5"><table width="100%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
        <tr>
          <td width="5%">&nbsp;</td>
          <td class="title" align="left">&nbsp;</td>
          <td class="title" align="left">&nbsp;</td>
          <td class="title" align="left">&nbsp;</td>
        </tr>
       
        <tr>
          <td>&nbsp;</td>
          <td width="20%">Title</td>
          <td width="2%">:</td>
          <td width="73%"><label>
            <select name="cmb_title" id="cmb_title">
              <option value="<?php echo $regulator_details['title'] ?>" selected="selected"><?php echo $regulator_details['title'] ?></option>
              <option value="Mr.">Mr.</option>
                    <option value="Miss.">Miss.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Rev.">Rev.</option>
                    <option value="Atty.">Atty.</option>
                    <option value="Drs.">Drs.</option>
					<option value="Dr.">Dr.</option>
                    <option value="Engr.">Engr.</option>	
                    <option value="Prof.">Prof.</option>	
                    <option value="Asst. Prof.">Asst. Prof.</option>	
                    <option value="Assoc. Prof.">Assoc. Prof.</option>	
                    <option value="Maj. Gen.">Maj. Gen.</option>			
                    <option value="Other">Other.</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="login_text">Regular Member Name </span></td>
          <td>:</td>
          <td><input name="txt_reg_name" type="text" id="txt_reg_name" size="50" value="<?php echo $regulator_details['reg_name'] ?>" /></td>
        </tr>
        <tr>
          <td height="26">&nbsp;</td>
          <td valign="top"><span class="login_text">Regular Member Description </span></td>
          <td valign="top">:</td>
          <td><textarea name="txt_reg_des" cols="40" id="txt_reg_des"><?php echo $regulator_details['reg_desc'] ?></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="login_text">Address</span></td>
          <td>:</td>
          <td><label>
            <input name="txt_add" type="text" id="txt_add" size="40" value="<?php echo $regulator_details['reg_address'] ?>" />
          </label></td>
        </tr>
      </table></td>
    </tr>
    
    <tr>
      <td width="6%">&nbsp;</td>
      <td width="6%">&nbsp;</td>
      <td width="15%">&nbsp;</td>
      <td width="49%"><input type="hidden" name="hdn_member_id" id="hdn_member_id" value="<?php echo $regulator_details['member_id'];?>" />
      <input type="hidden" name="hdn_regulator_id" id="hdn_regulator_id" value="<?php echo $regulator_details['regulator_id'];?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="btn_update" type="submit" class="button" value="   EDIT   " id="btn_update" />
      <!-- <input name="btn_cancel" type="button" class="button" value="Cancel" onclick="window.location.href='new_member_basic_details.php'" id="btn_cancel" /> -->      <label><!-- "delete_staff_member(<?php //echo $staff_id;?>,<?php //echo $member_id;?>);"-->
      </label></td>
      <td width="24%"><label></label></td>
    </tr>
  </table>
<?php } ?>

</body>
</html>
