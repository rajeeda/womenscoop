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
	
	function NewUser($m_user_name,$m_password,$m_email,$m_active)
	{
		$sql = "INSERT INTO uses values (NULL, :name, :pass, :email, :active,'".date('Y-m-d')."')";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':name' => $m_user_name, ':pass' => $m_password, ':email' => $m_email,
            ':active' => $m_active]);
	}
	
	//get user records
	function GetUser($id)
	{
		$sql = "select * from uses where adminId= :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//check existance
	function ExistsUser($id)
	{
		$sql = "select * from uses where email= :id";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	//Edit user
	function EditProfile($m_password,$username,$m_active,$m_user_id)
	{
		$sql = "update uses set userName= :name,   	pass=  :pass, active= :active where adminId= :id";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':name' => $username, ':pass' => $m_password, ':id' => $m_user_id,
            ':active' => $m_active]);
	}
	
	//get all users
	function GetAll($sql)
	{
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	//delete user
	function DeleteUser($m_user_id)
	{
		echo $m_user_id;
		$sqlDelete = "delete from uses where adminId='".$m_user_id."'";
		if (CDBCon::GetInstance()->prepare($sqlDelete)->execute() === false) 
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