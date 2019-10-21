<?php
	class user_level
	{
		public $m_user_id			=NULL;
		public $m_user_level_id		=NULL;
		public $m_type				=NULL;
		public $m_txt_discription	=NULL;
		public $m_hdn_level_id		=NULL;
		public $m_txt_first_name	=NULL;
		public $m_txt_last_name		=NULL;
		public $m_txt_email			=NULL;
		public $m_txt_tpNo			=NULL;
		public $m_txt_fax			=NULL;
		public $m_txt_user_name		=NULL;
		public $m_txt_pass			=NULL;
		public $m_u_id				=NULL;
		public $m_u_le_id			=NULL;
		
		public $m_update_date		=NULL;
		public $m_add_date			=NULL;

		
		
	/////////////////////////////////////////////////////////////////////////////////////////////
								//For  about_us_member.php//
	/////////////////////////////////////////////////////////////////////////////////////////////
		function GetAll($m_query)
		{
			//$data = CDBCon::GetInstance()->GetAll($m_query);		
			//$pdo = CDBCon::GetInstance();
			$pdo = CDBCon::GetInstance();
        	$stmt = $pdo->prepare($m_query);
        	$stmt->execute();
        	return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}		 		/////////////////////////////////////////////////////////////////////////////////////////////
								
	
		
	/////////////////////////////////////////////////////////////////////////////////////////////
			 //For  new_about_us_member_type.php AND new_about_us_member.php//
	/////////////////////////////////////////////////////////////////////////////////////////////		
		
		//Get user type details from user_level table for combo box......
		function get_user_type()
		{
			$sql="SELECT * FROM user_level";
			$pdo = CDBCon::GetInstance();
        	$stmt = $pdo->prepare($sql);
        	$stmt->execute();
        	return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		
		//Insert User type for user_level table.............
		function insert_user_type($m_type,$m_txt_discription)
		{
			$sqlInsert="INSERT INTO user_level VALUES(NULL,'".$m_type."','".$m_txt_discription."')";
			if (CDBCon::GetInstance()->prepare($sqlInsert)->execute() === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
		
		//Get user type id 
		function get_user_type_id($m_type)
		{
			$sql="SELECT * FROM user_level WHERE user_level_name='".$m_type."'";
			$pdo = CDBCon::GetInstance();
			$stmt = $pdo->prepare($sql); 
			$stmt->execute(); 
			$data = $stmt->fetch();
			return $data;	
		}
		
		//Get user type data 
		function get_user_type_data($m_user_level_id)
		{
			$sql="SELECT * FROM user_level WHERE user_level_id='".$m_user_level_id."'";
			$pdo = CDBCon::GetInstance();
			$stmt = $pdo->prepare($sql); 
			$stmt->execute(); 
			$data = $stmt->fetch();
			return $data;	
		}
		
		//Insert member details for user_level_data table....
		function insert_member_data($m_hdn_level_id,$m_txt_first_name,$m_txt_last_name,$m_txt_email,$m_txt_tpNo,$m_txt_fax,$m_txt_user_name,$m_txt_pass,$m_add_date,$m_update_date)
		{
			$sqlInsert="INSERT INTO user_level_data VALUES(NULL,'".$m_hdn_level_id."','".$m_txt_first_name."','".$m_txt_last_name."','".$m_txt_email."','".$m_txt_tpNo."','".$m_txt_fax."','".$m_txt_user_name."','".md5($m_txt_pass)."','".$m_add_date."','".$m_update_date."')";
			
			if (CDBCon::GetInstance()->prepare($sqlInsert)->execute() === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
		
/////////////////////////////////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////////////////////////////////
                    //For  edit_about_us_member_type.php AND edit_about_us_member.php//
	/////////////////////////////////////////////////////////////////////////////////////////////

		function get_user_level_type($m_user_level_id)
		{
			$sql_level="SELECT * FROM user_level WHERE user_level_id='".$m_user_level_id."'";
			$pdo = CDBCon::GetInstance();
			$stmt = $pdo->prepare($sql_level); 
			$stmt->execute(); 
			$data = $stmt->fetch();
			return $data;
		}

		
		function get_user_data_all($m_user_id,$m_user_level_id)
		{
			$sql="SELECT * FROM user_level_data WHERE user_id='".$m_user_id."' AND user_level_id='".$m_user_level_id."'";
			$pdo = CDBCon::GetInstance();
			$stmt = $pdo->prepare($sql); 
			$stmt->execute(); 
			$data = $stmt->fetch();
			return $data;
		}
		
		function get_user_member_data($m_user_id)
		{
			$sql="SELECT * FROM user_level_data WHERE user_id='".$m_user_id."' ";
			$pdo = CDBCon::GetInstance();
			$stmt = $pdo->prepare($sql); 
			$stmt->execute(); 
			$data = $stmt->fetch();
			return $data;
		}
		
		function update_user_data($m_type,$m_txt_discription,$m_u_id)
		{
			$sql_update="UPDATE user_level_data,user_level SET user_level_data.user_level_id='".$m_type."',user_level.user_level_description='".$m_txt_discription."' WHERE user_level_data.user_id='".$m_u_id."' AND user_level.user_level_id='".$m_type."'";
			
			if (CDBCon::GetInstance()->prepare($sql_update)->execute() === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
		
		function update_user_type($type,$txt_type,$txt_discription)
		{
			$sql_update="UPDATE user_level SET user_level_name='".$txt_type."',	 	user_level_description='".$txt_discription."' WHERE user_level_id='".$type."'";
			if (CDBCon::GetInstance()->prepare($sql_update)->execute() === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
		
		function update_user_member_data_basic($m_u_id,$m_u_le_id,$m_txt_first_name,$m_txt_last_name,$m_txt_email,$m_txt_tpNo,$m_txt_fax,$m_update_date)
		{
			$sql_update="UPDATE user_level_data SET user_level_id='".$m_u_le_id."',user_first_name='".$m_txt_first_name."',user_last_name='".$m_txt_last_name."',email='".$m_txt_email."',tel='".$m_txt_tpNo."',fax='".$m_txt_fax."',update_date='".$m_update_date."'  WHERE user_id='".$m_u_id."'";
			if (CDBCon::GetInstance()->prepare($sql_update)->execute() === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
		
		function update_user_member_data_security($m_u_id,$m_txt_user_name,$m_txt_pass,$m_update_date)
		{
			$sql_update="UPDATE user_level_data SET user_name='".$m_txt_user_name."',pass='".md5($m_txt_pass)."',update_date='".$m_update_date."'  WHERE user_id='".$m_u_id."'";
			if (CDBCon::GetInstance()->prepare($sql_update)->execute() === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}

/////////////////////////////////////////////////////////////////////////////////////////////
		
		function Delete_about_us_member($m_u_id)
		{
			
			$sql_delete="DELETE FROM user_level_data WHERE user_id='".$m_u_id."' ";
			//echo $sql_delete; exit; 
			if (CDBCon::GetInstance()->prepare($sql_delete)->execute() === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
			
		function DBConnect()
		{
			$this->m_db = CDBCon::GetInstance();
		}	
			
			
	}
?>