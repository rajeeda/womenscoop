<?php 
	
	class register
	{
	
	
		public $reg_id			=	NULL;
		public $country_name	=	NULL;
		public $district		=	NULL;
		public $name			=	NULL;
		public $address			=	NULL;
		public $city			=	NULL;
		public $country			=	NULL;
		public $reg_no			=	NULL;
		public $phone_no		=	NULL;
		public $fax				=	NULL;
		public $email			=	NULL;
		public $operation_area	=	NULL;
		public $employee_male	=	NULL;
		public $employee_female	=	NULL;
		public $establish		=	NULL;
		public $service_type	=	NULL;
		public $share_amount	=	NULL;
		public $deposit			=	NULL;
		public $savings			=	NULL;
		public $loan			=	NULL;
		public $reserve			=	NULL;
		public $assest			=	NULL;
		public $pass			=   NULL;
		public $txt_pass		=   NULL;
				
		function org_data($country_name,$district,$name,$address,$city,$country,$reg_no,$phone_no,$fax,$email,$txt_pass,$operation_area,$employee_male,$employee_female,$establish,$service_type,$share_amount,$deposit,$savings,$loan,$reserve,$assest)
		{
			$query	=	"INSERT INTO access_register_data VALUES(NULL,'".$country_name."','".$district."','".$name."','".$address."','".$city."','".$country."','".$reg_no."','".$phone_no."','".$fax."','".$email."','".md5($txt_pass)."','".$operation_area."','".$employee_male."','".$employee_female."','".$establish."','".$service_type."','".$share_amount."','".$deposit."','".$savings."','".$loan."','".$reserve."','".$assest."')";
            $pdo = CDBCon::GetInstance();
            $stmt = $pdo->prepare($query);
            return $stmt->execute();
		}
		
		function check_available($reg_no)
  		{
   			$sql="SELECT * FROM access_register_data WHERE reg_no = :id ";
			$pdo = CDBCon::GetInstance();
			$stmt = $pdo->prepare($sql);
			$stmt->execute([':id' => $reg_no]);
			return $stmt->fetch(PDO::FETCH_ASSOC);
  		}
  
	}
?>