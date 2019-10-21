<?php
class Core_val
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
	function AddcoreVal($title,$description,$add_date)
	{
		//echo m_country_name; exit;
		$sqlInsert = "INSERT INTO core_value(core_id,title,description,add_date,edit) 
		VALUES(NULL , '".$title."','".$description."', '".$add_date."','".$add_date."')";
				
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

	function Getcore_data($m_core_id)
	{
		$sql = "SELECT * FROM core_value where core_id='".$m_core_id."'";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	function Editcore_img($img_id,$up_image1,$up_image2,$up_image3,$updated_date){
		$sqleditcore_img = "update core_value_image set image1='".$up_image1."', image2='".$up_image2."',image3='".$up_image3."',edit_date='".$updated_date."' where img_id='".$img_id."'";
		
		if (CDBCon::GetInstance()->prepare($sqleditcore_img)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}
	function EditcoreVal($core_id,$title,$description,$updated_date){
		$sqleditcore_val = "update core_value set title='".$title."', description='".$description."',edit='".$updated_date."' where core_id='".$core_id."'";
		
		if (CDBCon::GetInstance()->prepare($sqleditcore_val)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}

	
	
	//delete country
	function Deletecoreval($core_id)
	{
		$sqlDelete = "delete from core_value where core_id='".$core_id."'";
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