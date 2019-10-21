<?php
	class Registration
	{
		public $m_reg_id  				= NULL;
		public $m_event_id  			= NULL;
		public $m_user_level_id			= NULL;
		public $m_name_of_participant 	= NULL;
		public $m_gender				= NULL;
		public $m_name_of_member		= NULL;
		public $m_organization_address	= NULL;
		public $m_country				= NULL;
		public $m_work_phone			= NULL;
		public $m_cell_phone			= NULL;
		public $m_fax					= NULL;
		public $m_email					= NULL;
		public $m_organization_web		= NULL;
		public $m_passport_no			= NULL;
		public $m_place_of_issue		= NULL;
		public $m_date_of_expiration	= NULL;
		public $m_nationality			= NULL;
		public $m_picture				= NULL;
		public $m_badge					= NUll;
		public $m_org_file				= NULL;
		public $m_brief_desc			= NULL;
		public $m_que					= NULL;
		public $m_price1				= NULL;
		public $m_price2				= NULL;
		public $m_price3				= NULL;
		public $m_price4				= NULL;
		public $m_room_type				= NULL;
		public $m_chk_in_date			= NULL;
		public $m_chk_out_date			= NULL;	
		public $m_airline				= NULL;
		public $m_flight_no				= NULL;
		public $m_city					= NULL;
		public $m_airport				= NULL;
		public $m_datetime				= NULL;		
		
		function Get_event_name()
		{
			$sql = "SELECT event_id,event_name FROM event ORDER BY event_starting_date ASC";		//echo $sql; exit;
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
		
		function Get_member_name()
		{
			$sql = "SELECT member_name,member_id FROM member ORDER BY member_name ASC";		//echo $sql; exit;
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
		function GetCountry()
		{
			$sql = "select * from country ORDER BY country_name ASC";
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
	
		
		function Insert_registration($m_event_id)
		{
			$sqlInsert = "INSERT INTO event_registration(event_id) VALUES ('".$m_event_id."')";
			//echo $sqlInsert; exit;
		
			if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
		function Update_registration_formone($m_event_id,$m_reg_id)
			{
				$sqlInsert = "UPDATE event_registration SET event_id='".$m_event_id."' WHERE reg_id='".$m_reg_id."'";
				//echo $sqlInsert; exit;
			
				if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
				{ 
					return false;
				}
				else
				{
					return true;
				}
			}
		
		function Get_registration_id($m_event_id)
		{
			$sql="SELECT MAX(reg_id) as maxregId FROM event_registration WHERE event_id='".$m_event_id."'";
			//echo $sql; exit;
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		}
		
		function Get_registration_data_back($m_reg_id)
		{
			$getdatasql="SELECT * FROM event_registration WHERE reg_id='".$m_reg_id."'";
			//echo $getdatasql; exit;
			$data = CDBCon::GetInstance()->GetRow($getdatasql);
			return $data;
		}
		
		function Get_registration_data_back_form_three($m_reg_id,$m_que)
		{
			$getdatasql="SELECT * FROM registration_price WHERE reg_id='".$m_reg_id."'and question='".$m_que."'";
			//echo $getdatasql; exit;
			$data = CDBCon::GetInstance()->GetRow($getdatasql);
			return $data;
		}
		
		function Insert_registration_form_two($m_reg_id,$m_name_of_participant,$m_gender,$m_name_of_member,$m_organization_address,$m_country,$m_work_phone,$m_cell_phone,$m_fax,$m_email,$m_organization_web,$m_passport_no,$m_place_of_issue,$m_date_of_expiration,$m_nationality,$m_picture,$m_badge,$m_org_file,$m_brief_desc)
		{
			$sqlupdate = "UPDATE event_registration SET name_of_part='".$m_name_of_participant."',gender='".$m_gender."',name_of_member='".$m_name_of_member."',organization_address='".$m_organization_address."',country_id='".$m_country."',work_phone='".$m_work_phone."',cell_phone='".$m_cell_phone."',fax='".$m_fax."',email='".$m_email."',organization_url='".$m_organization_web."',passport_no='".$m_passport_no."',place_of_issue='".$m_place_of_issue."',exp_date='".$m_date_of_expiration."',nationality='".$m_nationality."',up_image='".$m_picture."',name_badge='".$m_badge."',up_file='".$m_org_file."',brief_desc='".$m_brief_desc."' Where reg_id='".$m_reg_id."'";
			//echo $sqlupdate; exit;
		
			if (CDBCon::GetInstance()->Execute($sqlupdate) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
		
		function Insert_registration_form_three($m_reg_id,$m_que,$m_price1,$m_price2,$m_price3,$m_price4)
		{
			$sqlinsert = "INSERT INTO registration_price VALUES('".$m_reg_id."','".$m_que."','".$m_price1."','".$m_price2."','".$m_price3."','".$m_price4."')";
			//echo $sqlinsert; exit;
		
			if (CDBCon::GetInstance()->Execute($sqlinsert) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
		
		
		function update_registration_form_three($m_reg_id,$m_que,$m_price1,$m_price2,$m_price3,$m_price4)
		{
			$sqlupdate = "UPDATE registration_price SET e_price_t='".$m_price1."',e_price_s='".$m_price2."',a_price_t='".$m_price3."',a_price_s='".$m_price4."' Where reg_id='".$m_reg_id."'And question='".$m_que."'";
			//echo $sqlupdate; exit;
		
			if (CDBCon::GetInstance()->Execute($sqlupdate) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
		
		function updateresavation_type($m_reg_id,$m_room_type,$room_type_smoking,$m_chk_in_date,$m_chk_out_date)
		{
				$sqlInsert = "UPDATE event_registration SET room_type='".$m_room_type."',room_type2 = '".$room_type_smoking."', chk_in_date='".$m_chk_in_date."',chk_out_date='".$m_chk_out_date."' WHERE reg_id='".$m_reg_id."'";
				//echo $sqlInsert; exit;
			
				if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
				{ 
					return false;
				}
				else
				{
					return true;
				}
		}
		
		function updatetravel_information_arrival($m_reg_id,$m_airline,$m_flight_no,$m_city,$m_airport,$m_datetime)
		{
				$sqlInsert = "UPDATE event_registration SET a_airline='".$m_airline."',a_flight_no='".$m_flight_no."',a_city='".$m_city."',a_airport='".$m_airport."',a_date_and_time='".$m_datetime."' WHERE reg_id='".$m_reg_id."'";
				//echo $sqlInsert; exit;
			
				if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
				{ 
					return false;
				}
				else
				{
					return true;
				}
		}
		
	function updatetravel_information_departure($m_reg_id,$m_airline,$m_flight_no,$m_city,$m_airport,$m_datetime)
		{
				$sqlInsert = "UPDATE event_registration SET d_airline='".$m_airline."',d_flight_no='".$m_flight_no."',d_city='".$m_city."',d_airport='".$m_airport."',d_date_and_time='".$m_datetime."' WHERE reg_id='".$m_reg_id."'";
				//echo $sqlInsert; exit;
			
				if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
				{ 
					return false;
				}
				else
				{
					return true;
				}
		}
		
		function Get_event_name_by_eventID($event_id)
		{
			$sql = "SELECT event_name FROM event WHERE event_id = '".$event_id."'";		//echo $sql; exit;
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		}
		
		function Get_member_name_BY_ID($member_id)
		{
			$sql = "SELECT member_name,member_id FROM member WHERE member_id='".$member_id."'";		//echo $sql; exit;
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		}
		
		function GetCountryNameBYID($country_id)
		{
			$sql = "select * from country WHERE country_id='".$country_id."'";
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
		
	}
?>