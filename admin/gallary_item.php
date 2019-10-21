<?php 
	require_once('config/config.php');
	
	require_once (ADMIN_CLASS_PATH.'gallery.class.php');
	require_once(ADMIN_CLASS_PATH.'category.class.php');
	require_once(CLASS_PATH.'db.class.php');
    $category=$_GET['name']; 
	
$pa = '';
$limit = '';

?>
<form name="form1" id="form1" action="controlers/gallarycontroler.php" method="post">
<table width="80%" border="0" align="left" cellpadding="0" cellspacing="0">					
<?php 
$mquery = "select * from image_gallary where catagary ='".$category."' ";	

	if(isset($_GET['pa'])){
	  $pa = $_GET['pa'];
	  }
	
	if(isset($_GET['limit'])){
	  $limit = $_GET['limit'];
			  }
if (!($limit))
{
	$limit = 3;
} 
if (!($pa))
{
	$pa = 0;
} 
if($category=='Select_gallery')
{
	echo $err ="<div id=error>No selected image gallery catagory.</div>";
}
else
{
$query = "select * from image_gallary where catagary ='".$category."' ";
	 
$result= Category::GetAll($query);

$numrows = count($result);			
if ($numrows==0)
{
	echo $err = "<div id=error>No image available</div>"; 
}
else
{		
?>
  <!--<tr>
    <td colspan="3" class="verdana11" align="left">
        Rename <font color="#FF0000">&quot;<font color="#FF0000"><?php echo $category; ?></font>&quot;</font> Image Category As :
        <input name="ocat" type="hidden" id="ocat" value="<?php echo $category; ?>" />
        <input name="rename_category" type="text" id="rename_category" />
        <input type="button" name="btn_rename" id="btn_rename" value="Rename" onclick="window.location.href='controlers/gallarycontroler.php?mode=edit_catagary&category_name=<?php echo $category;?>'" />   </td>
  </tr>-->
  <tr>
    <td colspan="3" class="verdana11" align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Images 
      on <?php echo $category; ?> Category </strong></font></td>
  </tr>
  <tr>
    <td colspan="3" class="verdana11" align="left">&nbsp;</td>
  </tr>
   <tr>
   <td width="33%" height="19" align="left" class="verdana11">Total number of images - <?php echo $numrows;?></td>
   <td width="33%" align="center" class="grid_alternative_row"></td>
   <td width="34%" align="center" class="grid_alternative_row"></td>
  </tr>	
  <tr><td colspan="4" align="center"><table width="80%" border="0" align="left" cellpadding="2" cellspacing="2">
  <?php 
  		for($a=0;$a<intval($numrows)/4;$a++)
		{	
			?>
<tr><?php
			for($b=0;$b<4;$b++)
			{
				$row2 = each ($result);
				if($row2!=NULL)
				{
				?><td width="20%" align="left" valign="middle" class="grid_alternative_row"><?php	
					echo "<a href=#imgs><img name=imgs src=../upload_images/Gallary/thumb/".$row2["value"]["image_name"]." class=imgBox alt=\"".$row2["value"]["alt_text"]."\"></a>";	
					echo "<br>";
					echo "<a href=edit_image_gallary.php?image_id=".$row2['value']['image_id']."><img  src='images/edit.gif' alt='Edit' border='0' /></a>&nbsp;&nbsp;" ;
					echo "<a onclick= deleteImage('".$row2['value']['image_id']."') href=#><img src='images/delete.gif' alt='Delete' border='0' /> </a>";
					//echo $row2["value"]["alt_text"]; 
				 ?> 
                 </td>
	      <?php 
				} 
				else
				{
					?><td width="25%" align="center" valign="middle" class="grid_alternative_row">&nbsp;</td><?php
				}
			}
			?></tr><?php
		}
?></table></td></tr><?php
	}
}		
  ?>
</table>
</form>