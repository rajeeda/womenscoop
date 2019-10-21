<?php
class Country
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
	
	//constructor
	private function __construct()
	{
		
	}
	
	//add new category
	function New_Country($m_country_name,$m_country_flag,$m_added_date,$m_updated_date)
	{
		//echo m_country_name; exit;
		$sqlInsert = "INSERT INTO country(country_id,country_name,country_flag,added_date,updated_date) VALUES(NULL , '".$m_country_name."','".$m_country_flag."', '".$m_added_date."', '".$m_updated_date."')";
				
		if (CDBCon::GetInstance()->prepare($sqlInsert)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}
	
	//get Country records
	function GetCountry()
	{
		$sql = "select * from country ORDER BY country_name ASC";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	//check existance
	function ExistsCountry($m_country_name)
	{
		$sql = "select * from country where country_name='".$m_country_name."'";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	//Insert CountryProfile
	function New_Country_Profile($m_country_id,$m_population_million,$m_popul_growth_anual,$m_gdp_billion,$m_gni_per_capi,$m_exchange_rate,$m_cu_pentration,$m_added_date,$m_updated_date)
	{
		//echo m_country_name; exit;
		$sqlInsert = "INSERT INTO country_profile VALUES(NULL , '".$m_country_id."','".$m_population_million."','".$m_popul_growth_anual."','".$m_gdp_billion."','".$m_gni_per_capi."','".$m_exchange_rate."','".$m_cu_pentration."','".$m_added_date."', '".$m_updated_date."')";
				
		if (CDBCon::GetInstance()->prepare($sqlInsert)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}
	
	function GetCountry_data($m_country_id)
	{
		$sql = "select c.* from country c where c.country_id ='".$m_country_id."'";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	function GetCountry_Profile($m_country_id)
	{
		$sql = "select * from country_profile where country_id ='".$m_country_id."'";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	
	function GetCountry_profile_country_name($m_country_name)
	{
		$sql="SELECT c1.* FROM country_profile c1 inner join country c on c.country_id = c1.country_id where c.country_name='".$m-country_name."'";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	function ISProfileExists($m_country_id)
	{
		$sql = "select * from country_profile where country_id='".$m_country_id."'";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	
	// Edit  Country 
	function EditCountry($m_country_id,$m_country_name,$m_country_flag,$m_updated_date)
	{
			
		$sqleditCategory = "update country set country_name='".$m_country_name."', country_flag='".$m_country_flag."',updated_date='".$m_updated_date."' where country_id='".$m_country_id."'";
		
		//echo $sqleditCategory ;
		//exit;
		
		if (CDBCon::GetInstance()->prepare($sqleditCategory)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	function EditCountryProfile($m_country_id,$m_population_million,$m_popul_growth_anual,$m_gdp_billion,$m_gni_per_capi,$m_exchange_rate,$m_cu_pentration,$m_updated_date)
	{
			
		$sqleditCategory = "update country_profile set population_milion='".$m_population_million."', popul_growth_anual='".$m_popul_growth_anual."',gdp_billion='".$m_gdp_billion."',gni_per_capi='".$m_gni_per_capi."',exchange_rate='".$m_exchange_rate."',cu_pentration='".$m_cu_pentration."',updated_date='".$m_updated_date."' where country_id='".$m_country_id."'";
		
		//echo $sqleditCategory ;
		//exit;
		
		if (CDBCon::GetInstance()->prepare($sqleditCategory)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	
	
	
	//delete country
	function DeleteCountry($m_country_id)
	{
		$sqlDelete = "delete from country where country_id='".$m_country_id."'";
		if (CDBCon::GetInstance()->prepare($sqlDelete)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			$sqlDelete = "delete from country_profile where country_id='".$m_country_id."'";
			if (CDBCon::GetInstance()->prepare($sqlDelete)->execute() === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}	
			
			
		}	
	}
	
	//delete country profile
 	function DeleteCountryProfile($m_country_id)
	{
		$sqlDelete = "delete from country_profile where country_id='".$m_country_id."'";
		if (CDBCon::GetInstance()->prepare($sqlDelete)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	


	
	
	
	
	function ExistsCategoryEdit($m_category, $m_category_id)
	{
		$sql = "select * from category where category_name='".$m_category."' and category_Id !=" . $m_category_id ;		
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	//Edit category
	
	function EditCategory($m_category,$m_description,$m_active,$m_category_id)
	{
			
		$sqleditCategory = "update category set category_name='".$m_category."', description='".$m_description."', active='".$m_active."' where category_id='".$m_category_id."'";
		
		//echo $sqleditCategory ;
		//exit;
		
		if (CDBCon::GetInstance()->prepare($sqlDelete)->execute() === false) 
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
		$data = CDBCon::GetInstance()->GetAll($m_query);		
		return $data;
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