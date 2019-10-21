<?php
class Gallary
{
	public $m_image_id = NULL;
	public $m_image_name = NULL;
	public $m_image_cat = NULL;
	public $m_alt_test = NULL;
	
	//constructor
	private function __construct()
	{
		
	}

	//select image cat
	function Getcatagery ()
	{
		$sql = "SELECT distinct catagary FROM image_gallary";
	}
	

	//database connection
	function DBConnect()
	{
		$this->m_db = CDBCon::GetInstance();
	}

}
?>