<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'gallery.class.php');
require_once(ADMIN_CLASS_PATH.'category.class.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script language="JavaScript" type="text/JavaScript" src="scripts/deleteconfirmations.js"></script>
<script language="JavaScript" type="text/JavaScript" src="scripts/image_galary.js"></script>
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

<body onload="MM_preloadImages('images/frontpage2.png','images/user2.png','images/categories.png','images/query.png')">
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
              <td><div align="center"><img src="images/mediamanager.png" name="image" width="48" height="48" border="0" id="image" /><a href="user_manager.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/categories.png',1)"></a><br />
                Image Gallery</div></td>
              <td><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td><div align="center"><img src="images/module.png" width="48" height="48" /><br />
                  Add images </div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist"><h3>Image Gallery</h3></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5">
            <table width="90%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
              
              <tr>
                <td colspan="2"><div id="error">
                  <h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES.'gallery.message.first.php'); ?></h6>
                </div></td>
                </tr>
              <tr>
                <td width="3%">&nbsp;</td>
                <td width="97%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2">
                <form name="form1" id="form1" method="post" action="controlers/gallarycontroler.php?mode=add_gallery" enctype="multipart/form-data">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
          
          <tr align="center">
            <td height="29" align="left">Image 
              Category </td>
            <td colspan="2" align="left"><select name="imgcategory" id="imgcategory">
              <option value="0">Select gallery </option>
              <?php 
					$cat = Gallary :: Getcatagery();
					for($a=0;$a<count($cat);$a++){
						$row = each($cat); 
						
						?>
              <option value="<?php echo $row["value"]["catagary"]; ?>"> <?php echo $row["value"]["catagary"]; ?></option>
              <?php } ?>
            </select></td>
          </tr>
          <tr align="center"> 
            <td height="29" align="left">If New :</td>
            <td width="455" colspan="2" align="left"><input name="imgcategory2" size="40" type="text" id="imgcategory2">            </td>
          </tr>
          <tr align="center"> 
            <td height="29" align="left">Image &nbsp;
              (.jpg 600 X 450 Pixel)</td>
            <td colspan="2" align="left"><input name="up_image" type="file" id="up_image"></td>
          </tr>
          <tr align="center"> 
            <td width="158" align="left">Alt 
              Tag</td>
            <td colspan="2" align="left">
              <input name="alttag" type="text" id="alttag" value="" size="60">              </td>
          </tr>
          <tr align="center"> 
            <td align="left">&nbsp;</td>
            <td colspan="2" align="left">&nbsp;</td>
          </tr>
          <tr align="center">
            <td align="left">&nbsp;</td>
            <td colspan="2" align="left">&nbsp;</td>
          </tr>
          <tr align="center"> 
            <td align="left">&nbsp;</td>
            <td colspan="2" align="left"> 
              <input name="Submit" type="submit" value="Submit">
              <input type="button" name="btn_cancel" value="Cancel" onclick="window.location.href='signindefault.php'">              </td>
          </tr>
          <tr align="center"> 
            <td align="left">&nbsp;</td>
            <td colspan="2" align="left">&nbsp;</td>
          </tr>
          <tr align="center"> 
            <td colspan="3" align="left">&nbsp;</td>
          </tr>
          <tr align="center"> 
            <td colspan="3" align="left">                          </td>
          </tr>
        </table>
        </form>        </td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
               <?php 
							$category = "";
									
								$cat  = Gallary :: SelectImageCatagary();										
								$category =	$cat['mxcat'];
									$start = 0;
									
									if (isset($_REQUEST['start']))
										$start = $_REQUEST['start'];
									
									
									if (isset($_REQUEST['category']))
										$category = $_REQUEST['category'];
										
									$pageSize = 30;
								?> 
              <tr>
                <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>Image Gallery </td>
                  </tr>
                  <tr>
                  	
                    <td><table width="88%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="550" class="verdana11"><?php 
		if (isset($_POST['updatecategory'])){
			$update = Gallary :: Update_Categary($_POST['ocat'],$_POST['updatecategory']);
			$category = $_POST['updatecategory'];
		}
		
		?>               
        <div id="error"><?php include(ADMIN_MESSAGES.'gallery.message.php'); ?></div>         </td>
                        </tr>
                        <tr>
                          <td class="verdana11">
                          <form method="post" name="form2" id="form2" action="controlers/gallarycontroler.php?mode=edit_catagary" >
                          
                             View Category Image :
                                  <select name="cmb_category" id="cmb_category" onchange="image_galary(this.value)">
                                   <option value="0">Select gallery </option>
                					<?php 
										$cat = Gallary :: Getcatagery();
										for($b=0;$b<count($cat);$b++){
										$rowa = each($cat); 
						
									?>
                    					<option value="<?php echo $rowa["value"]["catagary"]; ?>"> <?php echo $rowa["value"]["catagary"]; ?></option>
                    				<?php } ?>
                                  </select>
                                  <!-- <input name="ViewGallery" type="submit" id="ViewGallery" value="View Gallery" />-->
                          Rename
                          Image Category As
                          <input name="hdn_catgory_name" type="hidden" id="hdn_catgory_name" value="<?php echo $category; ?>" />
                          <input name="updatecategory2" type="text" id="updatecategory2" />
                          <input type="submit" name="btn_rename" id="btn_rename" value="Rename" />
                          </form></td>
                        </tr>
                        <tr>
                          <td class="verdana11">&nbsp;</td>
                        </tr>
                        <tr>
                          <td class="verdana11">&nbsp;</td>
                        </tr>
                        <?php 
									
									
									$mquery = "select * from image_gallary where catagary = '".$category."'";
									$numrows = Category::GetAll($mquery);
									
									$pages = 0;
									
									$totRows = count($numrows);	
									if (($totRows % $pageSize)==0)
										$pages = (int)($totRows / $pageSize);
									else
										$pages = (int)(($totRows / $pageSize)+1);
										
									$inqfound =  $totRows;
									
									$lastpagelink = "";
									
									for ($i=0; $i<$pages; $i++){
										if (($start/$pageSize)==$i){
											$lastpagelink .= " " . ($i+1) . " ";
										}
										else {						
											$lastpagelink .= "<a href=image_gallary.php?category=".urlencode($category)."&start=".($i*$pageSize)."><font color=\"#3565CB\">".($i+1)."</font></a> ";
										}
									}
									
									$nx = "";	
									if ($inqfound > ($start + $pageSize))
										$nx = "<a href=image_gallary.php?category=".urlencode($category)."&start=".($start + $pageSize)."><font color=\"#3565CB\">Next</font></a>";
									$pv = "";
									if (($start) > 0)
										$pv = "<a href=image_gallary.php?category=".urlencode($category)."&start=".($start - $pageSize)."><font color=\"#3565CB\">Previous</font></a>";
										
									if($inqfound <= $pageSize){
										$nx = "";
										$pv = "";
									}
												
									
									
									$query = $mquery . " limit ". $start . ", ". $pageSize;
									
									$numrows2 = Category::GetAll($query);
									$lst = $start+ count($numrows2);
									$showing = $start ." - ".$lst;
									$tot = count($numrows2);
									$t = (int)($tot/3);
									$r = $tot%3;
									$results = Category::GetAll($query);
									?>
                        <?php 
									$k = 0;
									for ($i=0; $i <= $t; $i++){
									$row2 = each($results);
									?>
                        <?php 
									} 
									?>
                        <tr>
                          <td class="verdana11">
                          	<div id="txtHint"><b>Gallary Image Will Be Listed Here</b></div>                          </td>
                        </tr>
                        <tr>
                          <td class="verdana11">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table>          </td>
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
