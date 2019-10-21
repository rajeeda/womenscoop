<?php
class Admin
{
	public $m_adminId = NULL;
	public $m_userName = NULL;
	public $m_pass = NULL;
	public $m_email = NULL;

	//constructor
	private function __construct()
	{
		
	}
	
	//authenticat admin login
	function AuthenticateAdmin($user,$pass)
	{
		$sql = "select * from uses where userName=  :user AND pass= :pass ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':user' => $user, ':pass' => $pass]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//get admin records
	function GetAdmin($m_adminId)
	{
		$sql = "select * from uses where adminId='".$m_adminId."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//Edit admin
	function editProfile($m_pass,$m_email,$m_adminId)
	{
		$sqleditProfile = "update uses set pass='".$m_pass."', email='".$m_email."' where adminId='".$m_adminId."'";
		if (CDBCon::GetInstance()->Execute($sqleditProfile) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//send password to admin
	function SendPassword($m_userName)
	{
		$sql = "select * from uses where userName='".$m_userName."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//database connection
	function DBConnect()
	{
		$this->m_db = CDBCon::GetInstance();
	}
}
?>