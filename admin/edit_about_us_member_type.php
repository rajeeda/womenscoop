<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once('classes/about_us_member.class.php');
$u_le_id=isset($_GET['u_le_id'])?$_GET['u_le_id']:'';
$u_id=isset($_GET['u_id'])?$_GET['u_id']:'';
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

<body onload="MM_preloadImages('images/frontpage2.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="64%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="36%"><div id="content"><table border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
              </a><span class="txt_ash">Home</span></div></td>
              <td><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td><div align="center"><a href="about_us_member.php"><img src="images/ph_community.gif" alt="" width="36" height="36" /></a><br />
                <span class="txt_ash">Board Member</span></div></td>
              <td><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td><div align="center"><img src="images/ph_consulting.gif" width="36" height="36" /><br />
                  Edit Board Member type</div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" action="controlers/about_us_member_controler.php?mode=edit_type_reg">
            <table width="100%"  border="0" cellspacing="2" cellpadding="2">
              <tr>
                <td colspan="5" class="adminlist" bgcolor="#d8d8d8"><h3>New User Profile</h3></td>
                </tr>
              <tr>
                <td width="8%">&nbsp;</td>
                <td colspan="4"><div id="error"><h6 style="color:#A52A2A"><?php include('messages/about_us_member.message.php'); ?></h6></div></td>
                </tr>
              <tr>
                <td><input type="hidden" name="hdn_u_le_id" id="hdn_u_le_id" value="<?php echo $u_le_id;?>" />
                  <input type="hidden" name="hdn_u_id" id="hdn_u_id" value="<?php echo $u_id ;?>" /></td>
                <td width="17%">Member Type </td>
                <td width="1%">:</td>
                <?php 
					$level_data=user_level::get_user_level_type($u_le_id);
					$result=user_level::get_user_type();
					//echo $level_data['user_level_id'];exit;
				?>
                <td colspan="2">
                  <select name="cmb_type" id="cmb_type">
                  	<option id="Select" value="Select" selected="selected">Select>></option>
                    <?php
						for($a=0;$a<count($result);$a++)
						{
							$row=each($result);
							
					?>
                    <option value="<?php echo $row['value']['user_level_id'];?>" <?php if($row['value']['user_level_id']==$level_data['user_level_id']){?>selected="selected"<?php }?>><?php echo $row['value']['user_level_name'];?></option>
                    <?php		
						}
					?>
                  </select>
                  <label>If want to Rename Member type</label> 
                  <input name="txt_type" type="text" id="txt_type" size="30" />
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Discription</td>
                <td>:</td>
                <td colspan="2"><label>
                  <textarea name="txt_discription" id="txt_discription" cols="35" rows="5"><?php echo $level_data['user_level_description'];?></textarea>
                  <br />
                  (If want to change member type discription)
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td width="60%"><input name="Submit" type="submit" class="button" value="Update" />
                  <input name="Submit2" type="button" class="button" value="Cancel" onclick="window.location.href='about_us_member.php'" /></td>
                <td width="14%"><input name="btn_skip" id="btn_skip" type="button" class="button" value="Skip&gt;&gt;" onclick="window.location.href='edit_about_us_member.php?u_le_id=<?php echo $u_le_id;?>&u_id=<?php echo $u_id;?>'" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="5" class="adminlist">&nbsp;</td>
                </tr>
            </table>
          </form></td>
        </tr>
      </table></div></td>
  </tr>
  <tr>
    <td><center><?php include (ADMIN_TPL_PATH.'footer.tpl');?></center></td>
  </tr>
</table>
</body>
</html>
