<?php
class Accu_Forum
{
	public $m_question_id 		= NULL;
	public $m_question			= NULL;
	public $m_short_desc  		= NULL;	
	public $m_question_desc		= NULL;
	public $m_cat_id		  	= NULL;
	public $m_add_date  		= NULL;
	public $m_update_date		= NULL;
	public $m_pname				= NULL;
	public $m_country			= NULL;
	public $m_email				= NULL;
	
	
	//constructor
	private function __construct()
	{
		
	}
	
	
	
	//add new category
	function NewQuestion($m_category,$m_description,$m_active)
	{
		//$sqlInsert = "insert into category (category_name,description,active,registered_date) values ('".$m_category."','".$m_description."','".$m_active."','".date('Y-m-d')."')";		
//		
//		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
//		{ 
//			return false;
//		}
//		else
//		{
//			return true;
//		}
	}
	
	//get category records
	function GetQuestion()
	{
		$sql = "select * from forum_questions";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	//check existance
	function GetQuectionById($m_question_id)
	{
		$sql = "select * from forum_questions where question_id='".$m_question_id."'";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	//Get Country
	function GetCountry()
	{
		$sql = "select * from country ORDER BY country_name ASC";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	//check existance
	function ExistsQuestion($m_question)
	{
		$sql = "select * from forum_questions where question='".$m_question."'";		
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	//Edit category
	
	function EditQuestion($m_question_id,$m_question,$m_short_desc ,$m_question_desc)
	{
			
		$sqleditCategory = "update forum_questions set question='".$m_question."',short_desc='".$m_short_desc."',question_desc='".$m_question_desc."' where question_id ='".$m_question_id."'";
		
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
	
	
	//Update Post
	function EditPost($m_post_id,$m_post,$m_post_desc,$m_pname,$pcountry,$pmail)
	{
			
		$sqleditCategory = "update  forum_posts set post_title='".$m_post."',post_desc='".$m_post_desc."',pname='".$m_pname."',country='".$pcountry."',emailid='".$pmail."' where post_id='".$m_post_id."'";
		
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
	
	//get all category
	function GetAll($m_query)
	{
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($m_query); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	//Get Forum POst
	function GetpostById($m_post_id)
	{
		$sql = "select * from forum_posts where post_id='".$m_post_id."'";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql); 
		$stmt->execute(); 
		$data = $stmt->fetch();
		return $data;
	}
	
	//delete category
	function Deletequestion($m_question_id)
	{
		$sqlDelete = "delete from forum_questions where question_id='".$m_question_id."'";
		if (CDBCon::GetInstance()->prepare($sqlDelete)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//delete posts
	function DeletePost($m_post_id)
	{
		$sqlDelete = "delete from forum_posts where post_id='".$m_post_id."'";
		if (CDBCon::GetInstance()->prepare($sqlDelete)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//update Question Ststus posts
	function UpdateQuestionStstus($m_question_id,$status)
	{
		$sqlupdate = "Update forum_questions SET status = '".$status."' where question_id='".$m_question_id."'";
		if (CDBCon::GetInstance()->prepare($sqlupdate)->execute() === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//update Question Ststus posts
	function UpdatePostStstus($m_post_id,$status)
	{
		$sqlupdate = "Update forum_posts SET status = '".$status."' where post_id ='".$m_post_id."'";
		if (CDBCon::GetInstance()->prepare($sqlupdate)->execute() === false) 
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