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
  <div class="col-sm-3"><center><a href="about_us.php"><img src="images/langmanager.png" width="48" height="48"></br>about Us</a></center></div>
  <div class="col-sm-3"><center><a href="member.php"><img src="images/usrgroups.png" width="48" height="48"></br>Services</a></center></div>
  <div class="col-sm-3"><center><a href="news.php"><img src="images/massemail.png" width="48" height="48"></br>News</a></center></div>
  <div class="col-sm-3"><center><a href="events.php"><img src="images/addedit.png" width="48" height="48"></br>Events</a></center></div>
</div>
</br>
<div class="row">  
  <div class="col-sm-3"><center><a href="images.php"><img src="images/mediamanager.png" width="48" height="48"></br>Image Gallery</a></center></div>
  <div class="col-sm-3"><center><a href="user_manager.php"><img src="images/user.png" width="48" height="48"></br>Users</a></center></div>
  <div class="col-sm-3"><center><a href="o_structure.php"><img src="images/os.png" width="48" height="48"></br>Organizational Structure</a></center></div>
  <div class="col-sm-3"><center><a href="testimonials.php"><img src="images/Office.png" width="48" height="48"></br>Testimonials</a></center></div>
</div>
</br>
<div class="row">
  <div class="col-sm-3"><center><a href="network.php"><img src="images/My_Network_Places.png" width="48" height="48"></br>Network Strength</a></center></div>
  <div class="col-sm-3"></div>
  <div class="col-sm-3"></div>
  <div class="col-sm-3"></div>
</div>
</br>

<div width="100%" border="0" cellspacing="0" cellpadding="0">
</br>
</br>
  <center>
    <?php include (ADMIN_TPL_PATH.'footer.tpl');?>
  </center>
</div>
</body>
</html>
