<?php
class User
{
	public $m_user_id = NULL;
	public $m_email = NULL;
	public $m_password  = NULL;
	public $m_first_name  = NULL;
	public $m_last_name  = NULL;
	public $m_active = NULL;
	public $m_registered_date  = NULL;
	public $m_invitor_id  = NULL;
	public $m_query = NULL;

	//constructor
	private function __construct()
	{
		
	}
	
	
	//add new user
	function NewUser($m_email,$m_password,$m_first_name,$m_last_name,$m_invitor_id)
	{
		$sqlInsert = "insert into users (email,password,first_name,last_name,registered_date,invitor_id) values ('".$m_email."','".$m_password."','".$m_first_name."','".$m_last_name."','".date('Y-m-d')."','".$m_invitor_id."')";

		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}
	
	//authenticat user login
	function AuthenticateUser($m_email,$m_password)
	{
		$sql = "select * from users where email='".$m_email."' AND password='".$m_password."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//check existance
	function ExistsUser($m_email)
	{
		$sql = "select * from users where email='".$m_email."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//get user records
	function GetUser($m_user_id)
	{
		$sql = "select * from users where user_id='".$m_user_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//Edit user
	function EditProfile($m_password,$m_first_name,$m_last_name,$m_user_id)
	{
		$sqleditProfile = "update users set password='".$m_password."', first_name='".$m_first_name."', last_name='".$m_last_name."' where user_id='".$m_user_id."'";
		if (CDBCon::GetInstance()->Execute($sqleditProfile) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//get password of user
	function GetPassword($m_email)
	{
		$sql = "select * from users where email='".$m_email."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//activate user account
	function ActivateUser($m_user_id)
	{
		$sqleditProfile = "update users set active='1' where user_id ='".$m_user_id."'";
		if (CDBCon::GetInstance()->Execute($sqleditProfile) === false) 
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
}
?>