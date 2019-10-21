<?php
	require_once('access_includes/access_config.php');
	require_once ('access_class/db.class.php');
	require_once ('access_class/access_class.php');
	//session_start();
	//$id=isset($_GET['id'])?$_GET['id']:'';
	//$y =isset($_GET['y'])?$_GET['y']:'';
	if(!isset($_SESSION['name'])||!isset($_SESSION['year']))
	{
		echo "<script type=\"text/javascript\" >document.location.replace('access_admin_summary.php?msg=9');</script>";
	}
	$id=isset($_SESSION['name'])?$_SESSION['name']:'';
	$y =isset($_SESSION['year'])?$_SESSION['year']:'';
	//$id=$_SESSION['name'];
	//$y =$_SESSION['year'];
	
	//echo $id." ".$y; 
	if($id==-1 && $y==-1 )
	{
		echo "Select correct name And year.";
	}
	elseif($id==-1)
	{
		echo "Select correct credit union name. ";	
	}
	elseif($y==-1)
	{
		echo "Select correct year.";	
	}
	else
	{
		
		//echo "fgfdfghhghhshshhsdf ";exit;
?> 
<table width="100%">
	<tr>
        <td width="75%" height="23" align="center" bgcolor="#D6EBFF" class="banner_text">
    <?php
            $cu_name=access::get_cu_name($id);
            echo $cu_name['name'];
        ?>        </td>
        <td width="24%" align="left" bgcolor="#D6EBFF" class="banner_text">
        <?php  echo $y;?>        </td>
    </tr>
</table>

<table width="100%" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
     <?php 
    
	// echo $id." ".$y;exit;
    $cate_code=access::check_summary($id,$y);
    if(count($cate_code)>0)
	{
		//echo count($cate_code);			
	?>	
    			
<tr>
                    <td width="74%" height="23" bgcolor="#DDDDDD" class="banner_text">&nbsp;&nbsp;&nbsp;&nbsp;Question Category</td>
                    <td width="24%" align="center" bgcolor="#DDDDDD" class="banner_text">Marks</td>
                </tr>
<?php 
	 $marks = 0;
     for($a=0;$a<count($cate_code);$a++)
     {
    	 $row=each($cate_code);
     ?>
          
                    <tr>
                      <td height="23" bgcolor="#D6EBFF" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;
                      <?php
                       $CatProsp=access::get_mi_category_name($row['value']['CatCode']);
      echo $CatProsp['CatProsp'];
                      ?></td>
                      <td align="center" bgcolor="#D6EBFF" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;<?php
                       $total=access::get_marks($y,$id,$row['value']['CatCode']);
      echo $total['total'];
	  $marks = $marks + $total['total'];
                      ?></td>
                    </tr>
                      <?
       
	 }
	 
     ?>
     
     <?php }?>                 <tr>
     
       <td height="23" bgcolor="#D6EBFF" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;Total Score Points</td>
         <td bgcolor="#D6EBFF" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $marks; ?></td>
                      </tr>
                      <tr>
                        <td height="23" bgcolor="#D6EBFF" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;Percentage</td>
                        <td bgcolor="#D6EBFF" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php 
        	$pmarks = ($marks/348)*100;
        	echo round($pmarks,2)." % ";
			
		
       ?></td>
                      </tr>
                      <tr>
                      <td height="23" bgcolor="#D6EBFF" class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;Branding</td>
                      <td bgcolor="#D6EBFF" class="intro_text">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php 
	
	  				 if($marks>=313)
						{
							echo "Platinum.";
						}
						elseif(313>$marks && $marks>=279)
						{
							echo "Gold.";
						}
						elseif(279>$marks && $marks>=243)
						{
							echo "Silver.";
						}
						elseif($marks>=208)
						{
							echo "Bronze.";
						}
						else
						{
							echo " Below the Standed. ";
						}
       				?>                      </td>
                    </tr>
<?php
	}
	else
	{
	?>
	   <tr>
        	<td colspan="2" align="center" bgcolor="#FF5E5E"><strong>There are no data to display.</strong></td>
       </tr>
	<?php 
	}
	?>
</table>
         
    <?php 
		
		unset($_SESSION['name']);
		unset($_SESSION['year']);
		//session_unset();
	}//close else
              