<?php 
	require_once('config/config.php');
	require_once(ADMIN_PATH.'header_includes.php');
	require_once(ADMIN_CLASS_PATH.'member.class.php');
	
	$contact_person  = $_GET['q'];
	$member_id = $_GET['r'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script language="javascript" type="text/javascript" src="scripts/deleteconfirmations.js"></script>
</head>

<body>

  <?php 
	$contact_person_details = Member::GetContactPersondetails($contact_person);
    if($contact_person=="contactperson")
	{
	?>
<table width="75%"  border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="5"><table width="100%"  border="0" align="center" cellpadding="2" cellspacing="2" >
             
        <tr>
          <td width="5%">&nbsp;</td>
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
              <option value="Dr.">Dr.</option>
              <option value="Prof.">Prof.</option>
              <option value="Assoc.Prof.">Assoc.Prof.</option>
              <option value="Asst.Prof.">Asst.Prof.</option>
              <option value="Other">Other</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Name</td>
          <td>:</td>
          <td><input name="txt_name" type="text" id="txt_name" size="50" /></td>
        </tr>
        <tr>
          <td height="26">&nbsp;</td>
          <td valign="top">Post</td>
          <td valign="top">:</td>
          <td><input name="txt_post" type="text" id="txt_post" size="40" /></td>
        </tr>
        <tr>
          <td height="26">&nbsp;</td>
          <td valign="top">Address</td>
          <td valign="top">:</td>
          <td><textarea name="txt_address" cols="40" id="txt_address"></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Telephone</td>
          <td>:</td>
          <td><label>
            <input name="txt_telephone" type="text" id="txt_telephone" size="40" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Fax</td>
          <td>:</td>
          <td><input name="txt_fax" type="text" id="txt_fax" size="25" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>E mail</td>
          <td>:</td>
          <td><label>
            <input name="txt_email" type="text" id="txt_email" size="25" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Web site</td>
          <td>:</td>
          <td><label>
            <input name="txt_url" type="text" id="txt_url" size="25" />
          </label></td>
        </tr>
        
        <?php ?>
      </table></td>
      </tr>
    
    <tr>
      <td width="7%">&nbsp;</td>
      <td width="7%">&nbsp;</td>
      <td width="13%">&nbsp;</td>
      <td><input type="hidden" name="hdn_member_id" id="hdn_member_id" value="<?php echo $contact_person_details['member_id'];?>" />
      <input type="hidden" name="hdn_member_contact_id" id="hdn_member_contact_id" value="0" /></td>
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
      <td colspan="5"><table width="100%"  border="0" align="center" cellpadding="2" cellspacing="2">
         <tr>
          <td width="5%">&nbsp;</td>
          <td width="20%">Title</td>
          <td width="2%">:</td>
          <td width="73%"><label>
            <select name="cmb_title" id="cmb_title">
              <option value="<?php echo $contact_person_details['title'];?>" selected="selected"><?php echo $contact_person_details['title'];?></option>
              <option value="Mr.">Mr.</option>
              <option value="Miss.">Miss.</option>
              <option value="Mrs.">Mrs.</option>
              <option value="Ms.">Ms.</option>
              <option value="Rev.">Rev.</option>
              <option value="Dr.">Dr.</option>
              <option value="Prof.">Prof.</option>
              <option value="Assoc.Prof.">Assoc.Prof.</option>
              <option value="Asst.Prof.">Asst.Prof.</option>
              <option value="Other">Other</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Name</td>
          <td>:</td>
          <td><input name="txt_name" type="text" id="txt_name" size="50" value="<?php echo $contact_person_details['contact_person'];?>" /></td>
        </tr>
        <tr>
          <td height="26">&nbsp;</td>
          <td valign="top">Post</td>
          <td valign="top">:</td>
          <td><input name="txt_post" type="text" id="txt_post" size="40" value="<?php echo $contact_person_details['post'];?>" /></td>
        </tr>
        <tr>
          <td height="26">&nbsp;</td>
          <td valign="top">Address</td>
          <td valign="top">:</td>
          <td><textarea name="txt_address" cols="40" id="txt_address"><?php echo $contact_person_details['contact_address'];?></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Telephone</td>
          <td>:</td>
          <td><label>
            <input name="txt_telephone" type="text" id="txt_telephone" size="40" value="<?php echo $contact_person_details['telephone'];?>" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Fax</td>
          <td>:</td>
          <td><input name="txt_fax" type="text" id="txt_fax" size="25" value="<?php echo $contact_person_details['fax'];?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>E mail</td>
          <td>:</td>
          <td><label>
            <input name="txt_email" type="text" id="txt_email" size="25" value="<?php echo $contact_person_details['email'];?>" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Web site</td>
          <td>:</td>
          <td><label>
            <input name="txt_url" type="text" id="txt_url" size="25" value="<?php echo $contact_person_details['url'];?>" />
          </label></td>
        </tr>
        <?php ?>
      </table></td>
      </tr>
    
    <tr>
      <td width="6%">&nbsp;</td>
      <td width="6%">&nbsp;</td>
      <td width="15%">&nbsp;</td>
      <td width="49%"><input type="hidden" name="hdn_member_id" id="hdn_member_id" value="<?php echo $contact_person_details['member_id'];?>" />
      <input type="hidden" name="hdn_member_contact_id" id="hdn_member_contact_id" value="<?php echo $contact_person_details['contact_person_id'];?>" /></td>
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
