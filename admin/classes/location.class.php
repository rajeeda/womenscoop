<?php
class Location
{
	public $m_location_id 				= NULL;
	public $m_location_name 			= NULL;
	public $m_location_name_czech  		= NULL;	
	public $m_active 			= NULL;
	public $m_registered_date  	= NULL;
	public $m_invitor_id  		= NULL;
	public $m_query 			= NULL;
	
	//constructor
	private function __construct()
	{
		
	}
	
	
	
	//add new category
	function NewLocation($m_category,$m_description,$m_active)
	{
		$sqlInsert = "insert into category (category_name,description,active,registered_date) values ('".$m_category."','".$m_description."','".$m_active."','".date('Y-m-d')."')";		
		
		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}
	
	//get category records
	function Getlocation()
	{
		$sql = "select location_id,location_name from location";
		$ret = CDBCon::GetInstance()->GetRow($sql);
		return $ret;
	}
	
	//check existance
	function ExistsCategory($m_category)
	{
		$sql = "select * from category where category_name='".$m_category."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//check existance
	function ExistsCategoryEdit($m_category, $m_category_id)
	{
		$sql = "select * from category where category_name='".$m_category."' and category_Id !=" . $m_category_id ;		
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//Edit category
	
	function EditCategory($m_category,$m_description,$m_active,$m_category_id)
	{
			
		$sqleditCategory = "update category set category_name='".$m_category."', description='".$m_description."', active='".$m_active."' where category_id='".$m_category_id."'";
		
		//echo $sqleditCategory ;
		//exit;
		
		if (CDBCon::GetInstance()->Execute($sqleditCategory) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//get all category
	function GetAllLOcations($m_query)
	{
		$data = CDBCon::GetInstance()->GetAll($m_query);		
		return $data;
	}
	
	//delete category
	function DeleteCategory($m_category_id)
	{
		$sqlDelete = "delete from category where category_id='".$m_category_id."'";
		if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
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