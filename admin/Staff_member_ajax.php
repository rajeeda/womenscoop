<?php 
	require_once('config/config.php');
	require_once(ADMIN_PATH.'header_includes.php');
	require_once(ADMIN_CLASS_PATH.'member.class.php');
	
	$staff_id  = $_GET['q'];
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
	$Staff_Member_details=Member::Get_Staff_Member_details($staff_id);
    if($staff_id=="new_member")
	{
	?>
    <table width="75%"  border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td width="2%">&nbsp;</td>
      <td width="19%">Title</td>
      <td width="1%">:</td>
      <td colspan="2"><label>
        <select name="cmb_title" id="cmb_title">
          <option value="select">Select&gt;&gt;</option>
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
      <td>Name</td>
      <td>:</td>
      <td colspan="2"><input name="txt_name" type="text" id="txt_name" size="45" /></td>
    </tr>
    <tr>
      <td height="26">&nbsp;</td>
      <td>Borde Of Derector</td>
      <td>:</td>
      <td colspan="2"><select name="cmb_position_no" id="cmb_position_no">
          <option value="select">Select&gt;&gt;</option>
          <?php 
						for($a=1;$a<=30;$a++)
						{                  
                    		echo "<option value=\" ".$a."\">".$a."</option>";
						}
					?>
        </select>
          <input name="txt_Position" type="text" id="txt_Position" />      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="hidden" name="hdn_member_id2" id="hdn_member_id2" value="<?php echo $_GET['member_id'];?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="28">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="54%"><input name="btn_add" type="submit" class="button" value="Add" id="btn_add"  />
          <!-- <input name="btn_cancel" type="button" class="button" value="Cancel" onclick="window.location.href='new_member_basic_details.php'" id="btn_cancel" /> -->      </td>
      <td width="24%"><label></label></td>
    </tr>
  </table>
  <?php
	}
	elseif($staff_id=="select"/*count($Staff_Member_details)==0*/)
	{
		echo '<div id="error">Select Staff members!!!</div>';
	}
	else
	{	
	
	?>
    <table width="75%"  border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td width="2%">&nbsp;</td>
      <td width="19%">Title</td>
      <td width="1%">:</td>
      <td colspan="3"><label>
        <select name="cmb_title" id="cmb_title">
          <option value="Mr." <?php if($Staff_Member_details['title']  =="Mr."){echo "selected=\"selected\" ";}?>>Mr.</option>
          <option value="Miss." <?php if($Staff_Member_details['title']=="Miss."){echo "selected=\"selected\" ";}?>>Miss.</option>
          <option value="Ms." <?php if($Staff_Member_details['title']=="Ms."){echo "selected=\"selected\" ";}?>>Ms.</option>
          <option value="Mrs." <?php if($Staff_Member_details['title'] =="Mrs."){echo "selected=\"selected\" ";}?>>Mrs.</option>
          <option value="Rev." <?php if($Staff_Member_details['title'] =="Rev."){echo "selected=\"selected\" ";}?>>Rev.</option>
          <option value="Dr." <?php if($Staff_Member_details['title']  =="Dr."){echo "selected=\"selected\" ";}?>>Dr.</option>
          <option value="Prof." <?php if($Staff_Member_details['title']  =="Prof."){echo "selected=\"selected\" ";}?>>Prof.</option>
          <option value="Assoc.Prof." <?php if($Staff_Member_details['title']  =="Assoc.Prof."){echo "selected=\"selected\" ";}?>>Assoc.Prof.</option>
          <option value="Asst.Prof." <?php if($Staff_Member_details['title']  =="Asst.Prof."){echo "selected=\"selected\" ";}?>>Asst.Prof.</option>
          <option value="Other" <?php if($Staff_Member_details['title'] =="Other"){echo "selected=\"selected\" ";}?>>Other</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Name</td>
      <td>:</td>
      <td colspan="3"><input name="txt_name" type="text" id="txt_name" size="45" value="<?php echo $Staff_Member_details['name'];?>" /></td>
    </tr>
    <tr>
      <td height="26">&nbsp;</td>
      <td>Borde Of Derector</td>
      <td>:</td>
      <td colspan="3"><select name="cmb_position_no" id="cmb_position_no">
          <?php 
						for($a=1;$a<=30;$a++)
						{  ?>
          <option value="<?php echo $a?>" <?php if($Staff_Member_details['possion'] =="$a"){echo "selected=\"selected\" ";}?>><?php echo $a;?></option>
          <?php				}  ?>
        </select>
          <input name="txt_Position" type="text" id="txt_Position" value="<?php echo $Staff_Member_details['board_of_directors'];?>"/>      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><input type="hidden" name="hdn_member_id" id="hdn_member_id" value="<?php echo $member_id;?>" />
      <input type="hidden" name="hdn_staff_id" id="hdn_staff_id" value="<?php echo $staff_id;?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="34%"><input name="btn_update" type="submit" class="button" value="Update" id="btn_update" />
          <!-- <input name="btn_cancel" type="button" class="button" value="Cancel" onclick="window.location.href='new_member_basic_details.php'" id="btn_cancel" /> -->      </td>
      <td width="20%"><label>
        <input type="button" name="btn_delete" id="btn_delete" class="button" value="Delete" onclick="window.location.href='controlers/membercontroler.php?mode=delete_staff_member&staff_id=<?php echo $staff_id;?>&member_id=<?php echo $member_id;?> '" />
        <!-- "delete_staff_member(<?php //echo $staff_id;?>,<?php //echo $member_id;?>);"-->
      </label></td>
      <td width="24%"><label></label></td>
    </tr>
  </table>
<?php } ?>

</body>
</html>
