<?php
class Testimonials
{
	public $m_country_id				= NULL;
	public $m_country_name				= NULL;
	public $m_population_million		= NULL;
	public $m_popul_growth_anual		= NULL;	
	public $m_gdp_billion				= NULL;
	public $m_gni_per_capi				= NULL;
	public $m_exchange_rate				= NULL;
	public $m_cu_pentration				= NULL;
	public $m_country_flag 				= NULL;
	public $m_added_date				= NULL;
	public $m_updated_date				= NULL; 
	
	
	public $m_registered_date  			= NULL;
	public $m_invitor_id  				= NULL;
	public $m_query 					= NULL;
	public $m_awards_id					= NULL;
	
	//constructor
	private function __construct()
	{
		
	}
	
	//add new category
	function Addtesy($txt_testy_name,$txt_tesy_writer,$testy_name)
	{
		//echo m_country_name; exit;
		$sqlInsert = "INSERT INTO testimonials(testimonial_ref,t_heading,t_message,t_writter,order_id) 
		VALUES(NULL , '".$txt_testy_name."','".$testy_name."', '".$txt_tesy_writer."','1')";
				
		if (CDBCon::GetInstance()->prepare($sqlInsert)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}

	function New_partner($partner_name,$partner_url,$up_image)
	{
		$sqlInsert = "INSERT INTO homepage_partners(partner_id,partner_name,partner_logo,partner_url,active) 
		VALUES(NULL , '".$partner_name."','".$up_image."', '".$partner_url."','1')";
				
		if (CDBCon::GetInstance()->prepare($sqlInsert)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}

	function Edit_partner($partner_id,$partner_name,$partner_url,$up_image){
		$sqleditpartner = "update homepage_partners set partner_name='".$partner_name."', partner_logo='".$up_image."',partner_url='".$partner_url."' where partner_id='".$partner_id."'";
				
		if (CDBCon::GetInstance()->prepare($sqleditpartner)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}
	
	//get Country records
	function Getvalue()
	{
		$sql = "select * from core_value";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	function GetvalueImage()
	{
		$sql = "select * from core_value_image where img_id='1' ";
        $pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}

	function Getpartner_data($partner_id)
	{
		$sql = "select * from homepage_partners where partner_id='".$partner_id."'";
        $pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}

	function GetTesty_data($testy_id)
	{
		$sql = "SELECT * FROM testimonials where testimonial_ref='".$testy_id."'";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	function Edittesy($tesy_id,$txt_testy_name,$txt_tesy_writer,$testy_name){

		$sqledittesy = "update testimonials set t_heading='".$txt_testy_name."', t_message='".$testy_name."',t_writter='".$txt_tesy_writer."' where testimonial_ref='".$tesy_id."'";
		
		if (CDBCon::GetInstance()->prepare($sqledittesy)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}


	
	//delete country
	function Deletetesty($testy_id)
	{
		$sqlDelete = "delete from testimonials where testimonial_ref='".$testy_id."'";
			if (CDBCon::GetInstance()->prepare($sqlDelete)->execute() === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}	
			
			
			
	}
	function Deletepartner($partner_id)
	{
		$sqlDelete = "delete from homepage_partners where partner_id='".$partner_id."'";
			if (CDBCon::GetInstance()->prepare($sqlDelete)->execute() === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}	
	}

	function GetNetwork_data()
	{
		$sql = "SELECT * FROM networkstrength where networkstrength_id='1'";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}

	function Editnetwork($txt_mem,$txt_coop,$txt_asset,$txt_volunteers,$txt_employee){
		$sqleditnetwork = "update networkstrength set individual_members='".$txt_mem."', financial_cooperatives='".$txt_coop."',billion_asset='".$txt_asset."',volunteers='".$txt_volunteers."',employees='".$txt_employee."' where networkstrength_id='1'";
		
		if (CDBCon::GetInstance()->prepare($sqleditnetwork)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}

	
	//get all category
	function GetAll($m_query)
	{
		$pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($m_query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	
	
	//database connection
	function DBConnect()
	{
		$this->m_db = CDBCon::GetInstance();
	}
	
	function test() {
		print('xxxx');
	}
	
}
?>