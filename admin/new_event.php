<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_PATH.'classes/country.class.php');
include(ADMIN_PATH.'FCKeditor/fckeditor.php') ;
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
    <td width="36%"><div id="content"><table border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td width="48"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
              </a><span class="txt_ash">Home</span></div></td>
              <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="48"><div align="center"><a href="events.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/user2.png',1)"><img src="images/addedit.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
              Events</div></td>
              <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td width="65"><div align="center"><img src="images/generic.png" width="48" height="48" /><br />
                  Add Event</div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist"><h3>New Event Profile</h3></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5"><form action="controlers/eventcontroler.php?mode=add_event" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <table width="80%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
              
              <tr>
                <td width="10%">&nbsp;</td>
                <td colspan="3"><div id="error"><h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES.'event.message.php'); ?></h6></div></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td width="18%">Title</td>
                <td width="1%">:</td>
                <td><input name="txt_event_name" type="text" id="txt_event_name" size="60" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Location / Country</td>
                <td>:</td>
                <td><input name="txt_location" type="text" id="txt_location" size="50" />                  &nbsp;&nbsp;&nbsp;                  <select name="cmb_countryName" id="cmb_countryName">
                    <option value="0">Select Country Name</option>
                    <?php 
						$country = Country:: GetCountry();
						for($a=0;$a<count($country);$a++){
						$row = each($country); 
						
						?>
                    <option value="<?php echo $row["value"]["country_id"];  ?>"><?php echo $row["value"]["country_name"];  ?></option>
                    <?php } ?>
                    </select></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td valign="top">Event image</td>
                <td>:</td>
                <td><label>
                  <input type="file" name="up_event_image" id="up_event_image" />
                  <br />
                  <font size="2" face="Verdana, Arial, Helvetica, sans-serif">(File 
                Types : .jpg / .gif </font>)</label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Starting Date</td>
                <td>:</td>
                <td><input name="txt_start_date" type="text" id="txt_start_date" size="20" />                
                  <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form1.txt_start_date);return false;" ><img class="PopcalTrigger" align="absmiddle" src="date_calander/calbtn.gif" width="34" height="22" border="0" alt=""></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Ending Date</td>
                <td>:</td>
                <td><input name="txt_end_date" type="text" id="txt_end_date" size="20" />
                  <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form1.txt_end_date);return false;" ><img class="PopcalTrigger" align="absmiddle" src="date_calander/calbtn.gif" width="34" height="22" border="0" alt=""></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td width="18%">Short Description</td>
                <td width="1%">:</td>
                <td><input name="txt_short_des" type="text" id="txt_short_des" size="110" maxlength="98" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td valign="top">Event Description </td>
                <td valign="top">:</td>
                <td><?php
$oFCKeditor = new FCKeditor('event_desc') ;
$oFCKeditor->BasePath = 'FCKeditor/';
$oFCKeditor->Height = "500" ;
$oFCKeditor->Value = '';
$oFCKeditor->Create() ;
?></td>
              </tr>
              
              <tr>
                <td>&nbsp;</td>
                <td>Type </td>
                <td>:</td>
                <td><input type="radio" name="rdo_event_type" id="radio" value="Past" />
                  Past Event 
                    <input type="radio" name="rdo_event_type" id="radio2" value="up comming" />
                    <span class="login_text">Up coming Event </span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><label></label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input name="btn_add" type="submit" class="button" value="     Add    " id="btn_add" /> <input name="btn_cancel" type="button" class="button" value="   Cancel   " onclick="window.location.href='events.php'" id="btn_cancel" /></td>
              </tr>
            </table>
          </form></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5" class="adminlist">&nbsp;</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><center><?php include (ADMIN_TPL_PATH.'footer.tpl');?></center></td>
  </tr>
</table>
<iframe width=174 height=189 name="gToday:normal:agenda.js" id="gToday:normal:agenda.js" src="date_calander/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

</body>
</html>
