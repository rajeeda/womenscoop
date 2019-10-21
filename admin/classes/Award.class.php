<?php
class Award
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
	function NewAward($awd_year,$country_name,$txt_catagory_name,$txt_awd_name,$active,$Add_date)
	{
		//echo m_country_name; exit;
		$sqlInsert = "INSERT INTO awards(award_id,award_catagory,award_year,country,awader,active,add_date,edit_date) 
		VALUES(NULL , '".$txt_catagory_name."','".$awd_year."', '".$country_name."', '".$txt_awd_name."','".$active."', '".$Add_date."','".$Add_date."')";
				
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

	function GetAwardCatagory()
	{
		$sql = "select * from awardees_category";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	function GetAwards()
	{
		$sql = "SELECT awardees_category.category_name,awards.award_id,awards.award_year,awards.awader,awards.active,awards.country,country.country_name FROM
awards
INNER JOIN awardees_category ON awards.award_catagory = awardees_category.category_id
INNER JOIN country ON country.country_id = awards.country";
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
	
	function GetAwards_data($m_awards_id)
	{
		$sql = "SELECT awardees_category.category_id,awardees_category.category_name,awards.award_id,awards.award_year,awards.awader,awards.active,country.country_name,awards.country FROM
awards
INNER JOIN awardees_category ON awards.award_catagory = awardees_category.category_id
INNER JOIN country ON country.country_id = awards.country where awards.award_id ='".$m_awards_id."'";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	function EditAward($award_id,$awd_year,$country_name,$txt_catagory_name,$txt_awd_name,$active,$updated_date){
		$sqleditaward = "update awards set award_catagory='".$txt_catagory_name."', award_year='".$awd_year."',country='".$country_name."' 
		,awader='".$txt_awd_name."' ,active='".$active."' ,edit_date='".$updated_date."' where award_id='".$award_id."'";
		
		if (CDBCon::GetInstance()->prepare($sqleditaward)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}
	function Editos($os_name,$up_image,$updated_date){
		$sqleditos = "update organizationalstructure set image='".$up_image."', description='".$os_name."',update_id='".$updated_date."' where id='1'";
		
		if (CDBCon::GetInstance()->prepare($sqleditos)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}

	
	
	//delete country
	function Deleteaward($award_id)
	{
		$sqlDelete = "delete from awards where award_id='".$award_id."'";
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

	function organizationalstructure()
	{
		$sql = "select image,description from organizationalstructure where  id='1'";		
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