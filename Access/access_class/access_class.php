<?php
	class access
	{	
		public $mi_cate_code	=NULL; 	 	 	 	 	 	 	 	
		public $comp_id			=NULL;
		public $MarkOption		=NULL;
		public $CatID			=NULL;
		public $CatCode			=NULL;
		public $Marks			=NULL;
		public $Year			=NULL;
		public $Date			=NULL;
		public $UserID			=NULL;
		public $Upd				=NULL;
		public $name			=NULL;
		public $pass			=NULL;
		public $user			=NULL;
        function get_mi_category()
		{
			$sql="SELECT  Distinct CatCode,CatProsp FROM access_caegory ";
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
		
		function get_mi_category_CatProsp($mi_cate_code)
		{
			$sql="SELECT * FROM access_caegory WHERE CatCode='".$mi_cate_code."'";
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		} 
		
		function get_mi_category_data($mi_cate_code)
		{
			$sql="SELECT * FROM access_caegory WHERE CatCode='".$mi_cate_code."'";
			//echo "$sql";exit;
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		} 
		
		function get_mi_caegoryoptions_data($mi_cateid)
		{
			$sql="SELECT * FROM access_caegoryoptions WHERE CatID='".$mi_cateid."'";
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		} 
		
		function insert_mark_data($comp_id,$MarkOption,$CatID,$CatCode,$Marks,$Year,$Date,$UserID,$Upd)
		{
			$sql_insert="INSERT INTO access_marks VALUES('".$comp_id."','".$MarkOption."','".$CatID."','".$CatCode."','".$Marks."','".$Year."','".$Date."','".$UserID."','".$Upd."')";
			//echo "$sql_insert";exit;
			if (CDBCon::GetInstance()->Execute($sql_insert) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
		
		
		function get_union()
		{
			$sql="SELECT reg_id,name FROM access_register_data";
			$pdo = CDBCon::GetInstance();
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function check($name,$pass)
		{
			$sql="SELECT * FROM access_register_data where reg_id = :user AND pass = :pass ";
			$pdo = CDBCon::GetInstance();
			$stmt = $pdo->prepare($sql);
			$stmt->execute([':user' => $name, ':pass' => md5($pass)]);
			return $stmt->fetch(PDO::FETCH_ASSOC);
		} 
		
		function check_fill($comp_id,$Year,$CatCode)
		{
			$sql="SELECT * FROM access_marks WHERE comp_id= :id  AND Year= :year AND  CatCode= :code ";
            $pdo = CDBCon::GetInstance();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $comp_id, 'year' => $Year, ':code' => $CatCode]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
		}
		
		function check_summary($comp_id,$Year)
		{
		    $sql="SELECT DISTINCT CatCode FROM access_marks WHERE comp_id= :id AND Year = :year ";
            $pdo = CDBCon::GetInstance();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $comp_id, 'year' => $Year]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function check_summary_dis($name,$Year)
		{
		 $sql="SELECT DISTINCT CatCode FROM access_marks WHERE name='".$name."'  AND Year='".$Year."' ";
		 //echo $sql;exit;
		 $data = CDBCon::GetInstance()->GetAll($sql);
		 return $data;
		}
		
		function get_cu_name($comp_id)
		{
		    $sql="SELECT name FROM access_register_data WHERE reg_id = :id ";
            $pdo = CDBCon::GetInstance();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $comp_id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
		}
		
		function get_mi_category_name($mi_cate_code)
		  {
		   $sql="SELECT CatProsp FROM access_caegory WHERE CatCode='".$mi_cate_code."'";
		   //echo $sql;exit;
		   $data = CDBCon::GetInstance()->GetRow($sql);
		   return $data;
		  } 
		  
		  function get_marks($Year,$comp_id,$CatCode)
		  {
		   $sql="SELECT sum(Marks)as total FROM access_marks WHERE Year='".$Year."' AND comp_id='".$comp_id."' AND CatCode='".$CatCode."'";
		   $data = CDBCon::GetInstance()->GetRow($sql);
		   return $data;
		  }
		  
		 function check_admin($user,$pass)
		 {
             $sql="SELECT * FROM access_admin WHERE user = :id AND pass = :pass ";
             $pdo = CDBCon::GetInstance();
             $stmt = $pdo->prepare($sql);
             $stmt->execute([':id' => $user, ':pass' => md5($pass)]);
             return $stmt->fetch(PDO::FETCH_ASSOC);
		 }
  
	}