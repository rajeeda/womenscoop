<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'publication_doc.class.php');
require_once(ADMIN_CLASS_PATH.'category.class.php');
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
<script language="javascript" type="text/javascript" src="scripts/deleteconfirmations.js"></script>
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
    <td width="36%"><div id="content"><table width="224" border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
              </a><span class="txt_ash">Home</span></div></td>
              <td><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td><div align="center"><img src="images/my_pro.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /><br />
              Publication</div></td>
              <td></td>
              <td>&nbsp;</td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" action="publication_doc.php">
            <table width="100%"  border="0" cellspacing="2" cellpadding="2">
              <tr>
                <td><div id="error">
                 <h6 style="color:#A52A2A"> <?php require_once('messages/publication_doc.message.php'); ?><h6>
                </div></td>
              </tr>
              <tr>
                <td></td>
              </tr>
              <tr>
                <td><a href="new_publication_doc.php" class="link1"><strong>Enter new publication Document</strong></a> </td>
              </tr>
              <tr>
                <td height="204"><?php 
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

$query = "SELECT pd.*,pc.pub_cat_name FROM publication pd INNER JOIN publication_catagary pc ON pd.publication_cat_id = pc.publication_cat_id";

$numrows = Category::GetAll($query);

$numrows = count($numrows);			
if ($numrows==0)
{
	echo $err = "<div id=error>No Publication Types are available</div>"; 
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
		$results = Publication_Document::GetAll($query);
		
	
?>
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="25%" height="18" align="left" class="grid_alternative_row">Total number of Publication Documents - <?php echo $numrows;?></td>
                        <td width="50%" align="center" class="grid_alternative_row">Page No :
                          <?php require(ADMIN_PATH."tpl/paging.tpl"); ?></td>
                        <td width="25%" class="grid_alternative_row">Results per page: <a href="<?php echo $_SERVER['PHP_SELF']; ?>?pa=<?php echo $pa;?>&amp;limit=15">15</a> | <a href="<?php echo $_SERVER['PHP_SELF'];?>?pa=<?php echo $pa;?>&amp;limit=20">20</a> | <a href="<?php echo $_SERVER['PHP_SELF'];?>?pa=<?php echo $pa; ?>&amp;limit=25">25</a> | <a href="<?php echo $_SERVER['PHP_SELF'];?>?pa=<?php echo $pa;?>&amp;limit=30">30</a> </td>
                      </tr>
                    </table>
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="table">
                      <tr class="grid_heading" bgcolor="#d8d8d8">
                        <th width="40%" height="25" align="left" class="adminlist" style="padding-left:5px; font-weight: bold;">publication</th>
                        <th width="20%" align="left" class="adminlist" style="padding-left:5px; font-weight: bold;">Publication Type</th>
                        <th width="14%" align="left" class="adminlist" style="padding-left:5px; font-weight: bold;"><div align="left"><span class="gridheadings" style="padding-left:5px; font-weight: bold;">Add Date</span></div></th>
                        <th width="15%" align="left" class="adminlist" style="padding-left:5px; font-weight: bold;">Updated Date</th>
                        <th width="11%" height="25" align="left" class="adminlist" style="padding-left:5px;"><strong>Action</strong></th>
                      </tr>
                      <?php

for($a=0;$a<count($results);$a++)
{
	$row = each($results);
	
?>
                      <tr <?php if(($a+1)%2==0){echo "class='table_row_color'";} else{echo "class='grid_alternative_row'";}?>>                 
                      
                        <td height="18" style="padding-left:5px;"><?php echo $row["value"]["document_name"];?></td>
                        <td style="padding-left:5px;"><?php echo $row["value"]["pub_cat_name"]; ?></td>
                        <td style="padding-left:5px;"><?php echo $row["value"]["add_date"]; ?></td>
                        <td style="padding-left:5px;"><?php echo $row["value"]["add_date"]; ?></td>
                        <td style="padding-left:5px;"><a href="edit_publication_doc.php?pub_doc_id=<?php echo $row["value"]["publication_id"];?>"><img src="images/edit.gif" alt="Edit" border="0" /></a>  &nbsp;&nbsp;&nbsp;<a onclick="deletepubdoc('<?php echo $row["value"]["publication_id"];?>');" href="#" ><img src="images/delete.gif" alt="Delete" border="0" /></a></td>
                      </tr>
                      <?php
}//end for loop
?>
                      <tr>
                        <td colspan="5">&nbsp;</td>
                      </tr>
                      <tr>
                          <td colspan="5" class="adminlist">&nbsp;</td>
                   	  </tr>
                      <tr>
                        <td colspan="5"><a href="new_publication_doc.php" class="link1"><strong>Enter new publication Document</strong></a><a href="newcategory.php">
                          <?php
} //end else 
?>
                        </a></td>
                      </tr>
                    </table>
                  </td>
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
