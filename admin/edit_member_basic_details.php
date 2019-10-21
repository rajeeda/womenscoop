<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'member.class.php');
require_once(ADMIN_CLASS_PATH.'country.class.php');

$member_id	=	isset( $_GET['member_id'])?$_GET['member_id']:$_GET['id'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('images/frontpage2.png','images/user2.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="64%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="36%"><div id="content"><table width="300" border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td width="50" height="84"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
              </a><span class="txt_ash">Home</span></div></td>
              <td width="41"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="81"><div align="center"><a href="member.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/user2.png',1)"><img src="images/user.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Member Manager</span> </div></td>
              <td width="41"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="52"><div align="center"><img src="images/rename_f2.png" /><br />
                  Edit Member </div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist"><h3>Edit Member Profile</h3></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" enctype="multipart/form-data" action="controlers/membercontroler.php?mode=update_basic&member_id=<?php echo $member_id;?>">
            <?php
			$member = Member::GetMember($member_id);
			if(count($member)==0)
			{
				echo '<div id="error">Invalid Operation!!!</div>';
			}
			else
			{
			?>
			<table width="80%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
              
              <tr>
                <td colspan="5"><div id="error"><h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES.'member.message.php'); ?></h6>
                </div></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td width="5%">&nbsp;</td>
                <td width="16%">Member Type</td>
                <td width="1%">:</td>
                <td colspan="2"><select class="txt_boxes" name="cmb_member_type" id="cmb_member_type" >
                 <!-- <option id="Select" value="Select" selected="selected">Select&gt;&gt;</option>-->
                  <option id="Regular_Members" value="1" <?php if($member['member_type_id']  ==1){echo "selected=\"selected\" ";}?>>Regular Members</option>
                  <option id="Associate_Members" value="2" <?php if($member['member_type_id']==2){echo "selected=\"selected\" ";}?>>Associate Members</option>
                  <option id="Affiliate_Member" value="3" <?php if($member['member_type_id'] ==3){echo "selected=\"selected\" ";}?>>Affiliate Member</option>
                  <option id="Supporter_Members" value="4" <?php if($member['member_type_id']==4){echo "selected=\"selected\" ";}?>>Supporter Members</option>
                  <option id="Development Partners" value="5" <?php if($member['member_type_id']==5){echo "selected=\"selected\" ";}?>>Development Partners</option>
                  <option id="Strategic Partners" value="6" <?php if($member['member_type_id']==6){echo "selected=\"selected\" ";}?>>Strategic Partners</option>
                </select></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Member Name</td>
                <td>:</td>
                <td colspan="2"><input name="txt_member_name" type="text" id="txt_member_name" size="50" value="<?php echo $member['member_name'];?>" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Member Abbrevation</td>
                <td>:</td>
                <td colspan="2"><input name="txt_member_abbrevation" type="text" id="txt_member_abbrevation" size="20" value="<?php echo $member['member_abbrevation'];?>" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td valign="top">Member Logo </td>
                <td valign="top">:</td>
                <td width="9%">
                <?php if($member['member_sign']!=NULL){?>
                <img src="../upload_images/member_logos/thumb/<?php echo $member['member_sign']; ?>" />
                <?php }?>
                  <input name="hdn_member_logo" type="hidden" id="hdn_member_logo" value="<?php echo $member['member_sign'];?>" /></td>
                <td width="69%"><input name="up_member_logo" type="file" id="up_member_logo" value="<?php echo $member['member_sign'];?>" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Country</td>
                <td>:</td>
                <td colspan="2"><select name="cmb_countryName" id="cmb_countryName">
                 echo ""
                  <?php 
					$country = Country :: GetCountry();
					for($a=1;$a<=count($country);$a++)
					{
						$row = each($country); 
				?>
						<option value="<?php echo $row['value']['country_id'];?>" <?php if($row['value']['country_id']==$member['country_id']){echo "selected=\"selected\" ";}?>/>
						<?php echo $row['value']['country_name'];?>	
                        </option>
                         			
                 	   <!-- echo "<option value=\" ".$row['value']['country_id']." \" "if($a==$member['country_id']){"selected=\"selected\""}."> ".$row['value']['country_name']."</option>";-->
				  <?php } 
				 ?>
                </select></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>URL</td>
                <td>:</td>
                <td colspan="2"><input name="txt_URL" type="text" id="txt_URL" size="30" value="<?php echo $member['url'];?>" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>e-mail</td>
                <td>:</td>
                <td colspan="2"><input name="txt_email" type="text" id="txt_email" size="30" value="<?php echo $member['email'];?>" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Active</td>
                <td>:</td>
                <td colspan="2"><select name="cmb_active" class="txt_boxes" id="cmb_active">
                  <option value="1" <?php if($member['active']=='1') echo 'selected=\"selected\" ';?>>Yes</option>
                  <option value="0" <?php if($member['active']=='0') echo 'selected=\"selected\" ';?>>No</option>
                </select></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2"><input name="hdn_member_id" type="hidden" id="hdn_member_id" value="<?php echo $member['member_id'];?>" /></td>
              </tr>
              <tr>
                <td height="33">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2"><input name="btn_update" id="btn_update" type="submit" class="button" value="  Update  " />
                  <input name="btn_skip" id="btn_skip" type="button" class="button" value="    Skip     " onclick="window.location.href='edit_member_contact_details.php?member_id=<?php echo $member['member_id'];?>'" /></td>
              </tr>
            </table>
			<?php
			}
			?>
          </form></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td class="adminlist">&nbsp;</td>
  </tr>
  <tr>
    <td><center><?php include (ADMIN_TPL_PATH.'footer.tpl');?></center></td>
  </tr>
</table>
</body>
</html>
