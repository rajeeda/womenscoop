<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'member.class.php');
$member_id =isset($_GET['member_id'])?$_GET['member_id']:'';
////////////////////////////////////////////////////////////////////////////////////////////////////////////

$mode=isset($_GET['mode'])?$_GET['mode']:'update_staff';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script language="javascript" type="text/javascript" src="scripts/deleteconfirmations.js"></script>
<script language="JavaScript" type="text/JavaScript" src="scripts/select_staff_member.js">

<!--

function reload()
{	
	//document.write("In reload");
	var val_member_name=document.form1.txt_member_name.value ;
	var val_member_abbrevation=document.form1.txt_member_abbrevation.value ;
	var val_member_signature=document.form1.up_member_signature.value ;
	var val_URL=document.form1.txt_URL.value ;
	var val_email=document.form1.txt_email.value ;
	var val_active=document.form1.cmb_active.value ;
	
	
	self.location='new_member_basic_details.php?member_name=' + val_member_name + '&member_abbrevation=' + val_member_abbrevation + '&member_signature=' + val_member_signature + '&URL=' + val_URL+ '&email=' + val_email + '&active=' + val_active;
}



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
    <td width="64%" height="92" valign="top"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="36%"><div id="content">
      <table width="300" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="50" height="84"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
          </a><span class="txt_ash">Home</span></div></td>
          <td width="41"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="81"><div align="center"><a href="member.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/user2.png',1)"><img src="images/user.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Member Manager</span> </div></td>
          <td width="41"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="52"><div align="center"><img src="images/support.png" /><br />
            Edit Member </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td height="18" valign="middle" bgcolor="#d8d8d8" class="adminlist"><h3>Edit Member Profile -&gt;&gt;Board Of Directors</h3></td>
        </tr>
        <tr>
          <td height="191" valign="top" bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" enctype="multipart/form-data" action="controlers/membercontroler.php?mode=<?php echo $mode;?>&member_id=<?php echo $member_id;?>">
              <?php /*if($_POST['cmb_name']=="new_member"){echo "add_ajax_staff";}
										   else{echo "update_staff";}*/?>
              <table width="80%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
                
                <tr>
                  <td>&nbsp;</td>
                  <td class="title" align="left">&nbsp;</td>
                  <td class="title" align="left">&nbsp;</td>
                  <td colspan="2" align="left" class="title">&nbsp;</td>
                </tr>
                <tr>
                  <td width="4%">&nbsp;</td>
                  <td colspan="4"><div id="error">
                    <?php include(ADMIN_MESSAGES.'member.message.php'); ?>
                  </div></td>
                </tr>
                <tr>
                  <?php 
				$Staff_members=Member::Get_Staff_Member($member_id);
				if(count($Staff_members)==0)
				{
				?>
                </tr>
                <tr>
                  <td width="4%">&nbsp;</td>
                  <td colspan="4"><?php echo '<div id="error">There are no staff members!!!</div>';?> </td>
                </tr>
                <?php 						
				}
				//else
				//{
				?>
                <tr>
                  <td height="26">&nbsp;</td>
                  <td width="16%">Member name</td>
                  <td width="1%">:</td>
                  <td colspan="2"><p>
                      <select name="cmb_name" id="cmb_name" onchange="show_staff_member(this.value,<?php echo $member_id;?>)" >
                        <option value="select" >Select</option>
                        <option value="new_member">New member</option>
                        <?php 
					  	
						for($a=0;$a<count($Staff_members);$a++)
						{
							$row=each($Staff_members);
					  ?>
                        <option value="<?php echo $row['value']['member_staff_id'];?>"><?php echo $row['value']['name'];?></option>
                        <?php       
						}
					  ?>
                      </select>
                  </p></td>
                </tr>
                <?php 
				//}			
				?>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                      <div id="txtHint"><b>User info will be listed here.</b></div>
                  </td>
                  <td valign="bottom"><input name="btn_finish" type="button" class="button" id="btn_finish" value="    Finish     " onclick="window.location.href='member.php'" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><input type="hidden" name="hdn_member_id" id="hdn_member_id" value="<?php echo $_GET['member_id'];?>" /></td>
                  <td>&nbsp;</td>
                </tr>
               <?php // }?>
              </table>
          </form></td>
        </tr>
      </table>
    </td>
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
