<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once('sessioncheck.php');
//session_start();
if(!isset($_SESSION['adminid'])){
header("Location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<style type="text/css">
  center{
    background-color: #e1e6ea;
    padding-top: 15px;
    padding-bottom: 15px;
    border-radius: 8px;
    }  

</style>
<script type="text/javascript" src="scripts/tabpane.js"></script>
<script type="text/JavaScript">
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

<body onload="MM_preloadImages('images/addedit2.png','images/db2.png','images/sections2.png','images/impressions.png','images/usrgroups2.png','images/my_pro2.png','images/generic.png','images/query.png','images/menu2.png','images/user2.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
  </tr>

</table>
<div class="row">
  <div class="col-sm-3"><center><a href="country.php"><img src="images/browser.png" width="48" height="48" ></br>Country</a></center></div>
  <div class="col-sm-3"><center><a href="member.php"><img src="images/usrgroups.png" width="48" height="48"></br>Members</a></center></div>
  <div class="col-sm-3"><center><a href="publication_type.php"><img src="images/categories.png" width="48" height="48"></br>Publication Type</a></center></div>
  <div class="col-sm-3"><center><a href="publication_doc.php"><img src="images/my_pro.png" width="48" height="48"></br>Publication Documents</a></center></div>
</div>
</br>
<div class="row">
  <div class="col-sm-3"><center><a href="news.php"><img src="images/massemail.png" width="48" height="48"></br>News</a></center></div>
  <div class="col-sm-3"><center><a href="events.php"><img src="images/addedit.png" width="48" height="48"></br>Events</a></center></div>
  <div class="col-sm-3"><center><a href="images.php"><img src="images/mediamanager.png" width="48" height="48"></br>Image Gallery</a></center></div>
  <div class="col-sm-3"><center><a href="Credit_Union_Solution.php"><img src="images/menu.png" width="48" height="48"></br>Cu Solutions</a></center></div>
</div>
</br>
<div class="row">
  <div class="col-sm-3"><center><a href="about_us.php"><img src="images/langmanager.png" width="48" height="48"></br>about Us</a></center></div>
  <div class="col-sm-3"><center><a href="user_manager.php"><img src="images/user.png" width="48" height="48"></br>Users</a></center></div>
  <div class="col-sm-3"><center><a href="accu_forum_posts.php"><img src="images/resource_forum.gif" width="48" height="48"></br>Internet Forum Posts</a></center></div>
  <div class="col-sm-3"><center><a href="accu_forum_question.php"><img src="images/ph_quality.gif" width="48" height="48"></br>Internet fourm Questions</a></center></div>
</div>
</br>
<div class="row">
  <div class="col-sm-3"><center><a href="about_us_member.php"><img src="images/ph_community.gif" width="48" height="48"></br>New Username for ACCU Website</a></center></div>
  <div class="col-sm-3"><center><a href="about_us_doc.php"><img src="images/ph_documentation.gif" width="48" height="48"></br>Board Member Documents</a></center></div>
  <div class="col-sm-3"><center><a href="bord_member_folder.php"><img src="images/my_pro.png" width="48" height="48"></br>Board Member Folders</a></center></div>
  <div class="col-sm-3"><center><a href="award.php"><img src="images/award.png" width="48" height="48"></br>Awardees</a></div>
</div>
</br>
<div class="row">
  <div class="col-sm-3"><center><a href="o_structure.php"><img src="images/os.png" width="48" height="48"></br>Organizational Structure</a></center></div>
  <div class="col-sm-3"><center><a href="core_value.php"><img src="images/Icon.png" width="48" height="48"></br>Core Value</a></center></div>
  <div class="col-sm-3"><center><a href="testimonials.php"><img src="images/Office.png" width="48" height="48"></br>Testimonials</a></center></div>
  <div class="col-sm-3"><center><a href="network.php"><img src="images/My_Network_Places.png" width="48" height="48"></br>Network Strength</a></center></div>
</div>
</br>
<div class="row">
  <div class="col-sm-3"><center><a href="partners.php"><img src="images/handshake.png" width="48" height="48"></br>Development Partners</a></center></div>
  <div class="col-sm-3"></div>
  <div class="col-sm-3"></div>
  <div class="col-sm-3"></div>
</div>
<!--
<table width="100%" border="0" cellpadding="10" cellspacing="10" bgcolor="#F1F3F5" style="border-style: dotted;">
            
            <tr>
             <td width="23%" align="center" valign="top" class="home_box"><a href="country.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('country','','images/impressions.png',1)"><img src="images/browser.png" alt="Country" name="country" width="48" height="48" border="0" id="country" /></a><br />
                <a href="country.php" style="text-decoration:none">Country </a></td>
              <td width="27%" align="center" valign="top" class="home_box"><a href="member.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Members','','images/usrgroups2.png',1)"><img src="images/usrgroups.png" alt="Members" name="Members" width="48" height="48" border="0" id="Members" /></a><br />
                <a href="member.php" style="text-decoration:none">Members</a></td>
              <td width="25%" align="center" valign="top" class="home_box"><a href="publication_type.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Publication Type','','images/sections2.png',1)"><img src="images/categories.png" alt="Publication Documents" name="Publication Type" width="48" height="48" border="0" id="Publication Type" /></a><br />
                <a href="category_manager.php" style="text-decoration:none">Publication Type</a></td>
              <td width="25%" align="center" valign="top" class="home_box"><a href="publication_doc.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Publication Document','','images/my_pro2.png',1)"><img src="images/my_pro.png" alt="Publication Document" name="Publication Document" width="48" height="48" border="0" id="Publication Document" /></a><br />
                <a href="publication_doc.php" style="text-decoration:none">Publication Documents</a></td>
            </tr>
            <tr>
              <td align="center" valign="top" class="home_box"><a href="news.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('news','','images/generic.png',1)"><img src="images/massemail.png" alt="News" name="news" width="48" height="48" border="0" id="news" /></a><a href="news.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('pcm2','','images/addedit2.png',1)"></a><br />
                News</td>
              <td align="center" valign="top" class="home_box"><a href="events.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('event','','images/addedit2.png',1)"><img src="images/addedit.png" alt="Event" name="event" width="48" height="48" border="0" id="event" /></a><br />
                <a href="events.php" style="text-decoration:none">Events</a></td>
              <td align="center" valign="top" class="home_box"><a href="images.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('image','','images/query.png',1)"><img src="images/mediamanager.png" name="image" width="48" height="48" border="0" id="image" /></a><br />
                Image Gallery</td>
              <td align="center" valign="top" class="home_box"><a href="Credit_Union_Solution.php" class="home_box" onmouseover="MM_swapImage('cusolution','','images/menu2.png',1)" onmouseout="MM_swapImgRestore()"><img src="images/menu.png" alt="Cu Solution" name="cusolution" width="48" height="48" border="0" id="cusolution" /></a><br />
                Cu Solutions</td>
            </tr>
            <tr>
              <td align="center" valign="top" class="home_box"><p><a href="about_us.php"><img src="images/langmanager.png" width="48" height="48" /></a><br />
                about Us</p>
                </td>
              <td align="center" valign="top" class="home_box"><a href="user_manager.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','images/user2.png',1)"><img src="images/user.png" alt="Users" name="Image10" width="48" height="48" border="0" id="Image10" /></a> <br />
                Users</td>
              <td align="center" valign="top" class="home_box"><a href="accu_forum_posts.php" class="home_box"><img src="images/resource_forum.gif" alt="Users" name="Image10" width="37" height="42" border="0" id="Image10" /></a><br />
                Internet Forum Posts</td>
              <td align="center" valign="top" class="home_box"><a href="accu_forum_question.php" class="home_box"><img src="images/ph_quality.gif" width="37" height="37" /></a><br />
                Internet fourm Questions</td>
            </tr>
            <tr>
              <td align="center" valign="top" class="home_box"><a href="about_us_member.php"><img src="images/ph_community.gif" alt="Users" name="Image10" width="36" height="36" border="0" id="Image10" /></a><br />
                Create New Username for ACCU Website
</td>
              <td align="center" valign="top" class="home_box"><a href="about_us_doc.php"><img src="images/ph_documentation.gif" alt="Users" name="Image10" width="36" height="36" border="0" id="Image" /></a><br /> 
                Board Member Documents</td>
              <td align="center" valign="top" class="home_box"><a href="bord_member_folder.php"><img src="images/my_pro.png" alt="Users" name="Image10" width="48" height="48" border="0" id="Image" /></a><br /> 
                Board Member Folders</td>
              <td align="center" valign="top" class="home_box"><a href="award.php"><img src="images/award.png" alt="Users" name="Image10" width="48" height="48" border="0" id="Image" /></a><br />Awardees</td>
            </tr>
            <tr>
              <td align="center" valign="top" class="home_box"><a href="o_structure.php"><img src="images/os.png" alt="Users" name="Image10" width="52" height="36" border="0" id="Image10" /></a><br />
                Organizational Structure
</td>
              <td align="center" valign="top" class="home_box"><a href="core_value.php"><img src="images/Icon.png" alt="Users" name="Image10" width="36" height="36" border="0" id="Image10" /></a><br />Core Value</td>
              <td align="center" valign="top" class="home_box"><a href="testimonials.php"><img src="images/Office.png" alt="Users" name="Image10" width="36" height="36" border="0" id="Image10" /></a><br />Testimonials</td>
              <td align="center" valign="top" class="home_box"><a href="network.php"><img src="images/My_Network_Places.png" alt="Users" name="Image10" width="36" height="36" border="0" id="Image10" /></a><br />Network Strength</td>
            </tr>
            <tr>
              <td align="center" valign="top" class="home_box"><a href="partners.php"><img src="images/handshake.png" alt="Users" name="Image10" width="44" height="44" border="0" id="Image10" /></a><br />
                Development Partners
</td>
              <td align="center" valign="top" class="home_box"></td>
              <td align="center" valign="top" class="home_box"></td>
              <td align="center" valign="top" class="home_box"></td>
            </tr>
          </table>-->
<div width="100%" border="0" cellspacing="0" cellpadding="0">
</br>
</br>
  <center>
    <?php include (ADMIN_TPL_PATH.'footer.tpl');?>
  </center>
</div>
</body>
</html>
