<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'about_us.class.php');
$pa  =0;
$limit =0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />

<script language="JavaScript" type="text/JavaScript" src="scripts/deleteconfirmations.js"></script>
<script>
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
              <td><div align="center"><img src="images/langmanager.png" width="48" height="48" /><br />
              About Us</div></td>
            </tr>
          </table></div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#F1F3F5"><table width="100%"  border="0" cellspacing="2" cellpadding="2">
            <tr>
              <td><div id="error"><h6 style="color:#A52A2A"><?php require_once('messages/aboutus.message.php'); ?></h6></div></td>
            </tr>
            <tr>
              <td>
                  
              </td>
            </tr>
            <tr>
              <td><a href="new_aboutus.php" class="link1"><strong>Insert New Details</strong></a> </td>
            </tr>
            <tr>
              <td>
			  <?php 
				if(isset($_GET['pa'])){
				$pa = $_GET['pa'];
			 	}
			  
			  if(isset($_GET['limit'])){
				$limit = $_GET['limit'];
			  }
				if (!($limit))
				{
					$limit = 15;
				} 
				if (!($pa))
				{
					$pa = 0;
				} 
				
				$query = "SELECT * FROM about_us Order by type ASC";
					
				$numrows = AboutUS ::GetAll($query);
				
				$numrows = count($numrows);			
				if ($numrows==0)
				{
					echo $err = "<div id=error>No users available</div>"; 
				}
				else
				{
					$pages = intval($numrows/$limit); 
					if ($numrows%$limit) {
						$pages++;
					}
					$current = ($pa/$limit) + 1; 
					if (($pages < 1) || ($pages == 0)) {
						$total = 1;
					} 
					else 
					{
						$total = $pages;
					} 
					$first = $pa + 1; 
					if (!((($pa + $limit) / $limit) >= $pages) && $pages != 1) 
					{
						$last = $pa + $limit;
					} 
					else
					{
						$last = $numrows;
					} 
						$query = $query." limit ".$pa.", ".$limit;
						$results = AboutUS :: GetAll($query);
						//echo $results;exit;
			?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
 
 <tr>
   <td width="22%" height="35" align="left" class="grid_alternative_row">Total number of Details - <?php echo $numrows;?></td>
   <td width="51%" align="center" class="grid_alternative_row">Page No :<?php require(ADMIN_PATH."tpl/paging.tpl"); ?></td>
   <td width="27%" class="grid_alternative_row">Results per page: <a href="<?php echo $_SERVER['PHP_SELF']; ?>?pa=<?php echo $pa;?>&amp;limit=15">15</a> | <a href="<?php echo $_SERVER['PHP_SELF'];?>?pa=<?php echo $pa;?>&amp;limit=20">20</a> | <a href="<?php echo $_SERVER['PHP_SELF'];?>?pa=<?php echo $pa; ?>&amp;limit=25">25</a> | <a href="<?php echo $_SERVER['PHP_SELF'];?>?pa=<?php echo $pa;?>&amp;limit=30">30</a> </td>
 </tr>
</table>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" class="table">
  <tr class="grid_heading" bgcolor="#d8d8d8">
    <th width="39%" align="left" class="adminlist" style="padding-left:5px; font-weight: bold;"><span class="gridheadings" style="padding-left:5px; font-weight: bold;">  Name</span></th>
    <th width="13%" align="left" class="adminlist" style="padding-left:5px; font-weight: bold;"><span class="gridheadings" style="padding-left:5px; font-weight: bold;"> Country</span></th>
    <th width="13%" align="left" class="adminlist" style="padding-left:5px; font-weight: bold;">About us categary</th>
    <th width="19%" align="left" class="adminlist" style="padding-left:5px; font-weight: bold;"><span class="gridheadings" style="padding-left:5px; font-weight: bold;">Date</span></th>
    <th height="25" colspan="2" align="left" class="adminlist" style="padding-left:5px;"><strong>Action</strong></th>
  </tr>
  

<?php
for($a=0;$a<count($results);$a++)
{

$row = each($results);
?>
  <tr <?php if(($a+1)%2==0){echo "class='table_row_color'";} else{echo "class='grid_alternative_row'";}?>>
    <td height="27" valign="middle" style="padding-left:5px;"><?php echo $row["value"]["title"].$row["value"]["mem_name"];?></td>
    <td height="18" valign="middle" style="padding-left:5px;">
	   <?php
		   $country = AboutUS :: Getcountry($row["value"]["country"]);
		   echo $country["country_name"]; 
	   ?>
    </td>
    <td valign="middle" style="padding-left:5px;"><?php if($row["value"]["type"] == 'bod'){ echo 'Board of Directors'; } elseif($row["value"]["type"] == 'Staff'){ echo 'Staff'; } elseif($row["value"]["type"] == 'ps'){ echo 'Project Staff'; } else { echo 'ALMI';
	} ?></td>
    <td valign="middle" style="padding-left:5px;"><?php echo $row["value"]["edit_date"];?></td>
    <td width="3%" valign="middle" style="padding-left:5px;"><a href="edit_aboutus.php?aboutus_id=<?php echo $row["value"]["about_us"];?>"><img src="images/edit.gif" alt="Edit" border="0"></a></td>
    <td width="13%" valign="middle" style="padding-left:5px;">
   		 <a onclick="deleteAboutUS('<?php echo $row["value"]["about_us"];?>');" href="#" ><img src="images/delete.gif" alt="Delete" border="0" /></a>    </td>
  </tr>
<?php
}//end for loop
?>
<tr>
  <td colspan="6">&nbsp;</td>
</tr>
<tr>
  <td colspan="6" class="adminlist">&nbsp;</td>
</tr>
<tr>
  <td colspan="6"><a href="new_aboutus.php" class="link1"><strong>Insert New Details</strong></a><a href="new_aboutus.php"></a></td>
</tr>
</table>
<?php
} //end else 
?></td>
            </tr>
          </table></td>
        </tr>
      </table></div></td>
  </tr>
  <tr>
    <td><center><?php include (ADMIN_TPL_PATH.'footer.tpl');?></center></td>
  </tr>
</table>
</body>
</html>
