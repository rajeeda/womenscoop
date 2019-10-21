<?php 
	session_start();
	$mode=isset($_GET['mode'])?$_GET['mode']:'';
	
	require_once('../cumi_includes/cumi_config.php');
	require_once('../cumi_class/db.class.php');
	require_once('../cumi_class/cumi_class.php');
	
	$rdb_cate		 =isset($_POST['rdb_cate'])?$_POST['rdb_cate']:'';
	$hdn_mi_cate_code=isset($_POST['hdn_mi_cate_code'])?$_POST['hdn_mi_cate_code']:'';
	$hdn_cu_id		 =isset($_POST['hdn_cu_id'])?$_POST['hdn_cu_id']:'';
	switch($mode)
	{
		case 'que':
		//exit;
		
			if($rdb_cate=="")
			{
				echo "<script type=\"text/javascript\" >document.location.replace('../cumi_page.php?msg=1&d=$hdn_cu_id');</script>"; 
			}
			else
			{
				echo "<script type=\"text/javascript\" >document.location.replace('../cumi_form.php?mi_cate_code=$rdb_cate&d=$hdn_cu_id');</script>";
				
			}
		break;
		
		case 'form':
		
			$hdn_mi_cate_code=isset($_POST['hdn_mi_cate_code'])?$_POST['hdn_mi_cate_code']:'';
			$CatCode	=isset($_POST['hdn_mi_cate_code'])?$_POST['hdn_mi_cate_code']:'';
			$comp_id	=isset($_POST['hdn_cu_id'])?$_POST['hdn_cu_id']:'';
			//echo $comp_id; exit;		
			$Year		=isset($_SESSION['year'])?$_SESSION['year']:'';
			$Date		=date('Y-m-d,H:m:s');
			$UserID		="-";
			$Upd		="-";
			$result1=access::get_mi_category_data($hdn_mi_cate_code);
			
			for($a=0;$a<count($result1);$a++)
			{	
				
				$row1=each($result1);
				$CatID		= isset($row1['value']['CatID'])?$row1['value']['CatID']:'';
				$Category	= isset($row1['value']['Category'])?$row1['value']['Category']:'';
				$result2=access::get_mi_caegoryoptions_data($row1['value']['CatID']);
				for($b=0;$b<1;$b++)
				{
					
					$row2=each($result2);
					$MarkOption	= isset($row2['value']['MarkOption'])?$row2['value']['MarkOption']:'';
					$name		= isset($row2['value']['CatID'])?$row2['value']['CatID']:'';
					$Marks_name	= isset($name)?"rdb_".$name:'';
					//echo "rdb_".$name.$_POST[$Marks_name]; 
					$Marks		= isset($Marks_name)?$_POST[$Marks_name]:'';
					$result3	= access::insert_mark_data($comp_id,$MarkOption,$CatID,$CatCode,$Marks,$Year,$Date,$UserID,$Upd);
					
					if($result3==false)	
					{
						echo "<script type=\"text/javascript\" >document.location.replace('../cumi_form.php?msg=2&Category=$Category&mi_cate_code=$CatCode');</script>";
					}		
				}				
			}
			if($result3==true)	
					{
						echo "<script type=\"text/javascript\" >document.location.replace('../cumi_page.php?msg=3&d=$hdn_cu_id');</script>";
					}
			
			
		break;
	
			case 'logging':
				$name	=isset($_POST['txt_name'])?$_POST['txt_name']:'';
				$year	=isset($_POST['cmb_year'])?$_POST['cmb_year']:'';
				$pass	=isset($_POST['txt_Password'])?$_POST['txt_Password']:'';
				$res=access::check($name,$pass);
				if(count($res)!=0)
				{
					$_SESSION['cu_name'] =$res['name'];
					$_SESSION['year']	 =$year;
					$_SESSION['cus_name']=$res['customer_name'];
					$d					 =$res['reg_id'];
					echo "<script type=\"text/javascript\" >document.location.replace('../cumi_page.php?d=$d');</script>";
				}
				else
				{
					echo "<script type=\"text/javascript\" >document.location.replace('../index.php?msg=5');</script>";
				}
				
			
			break;
			
		}
	
?>