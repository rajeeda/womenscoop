<?php
class BoardMemberFolder
{
	public $m_pub_id				= NULL;
	public $m_pub_type_name			= NULL;
	public $m_pub_desc				= NULL;
	public $m_pub_type_image		= NULL;
	//public $m_p					= NULL;
	
	

	//add new Publication
	function Add_new_pub_type($m_pub_type_name,$m_pub_desc,$m_pub_type_image,$pub_act,$add_date,$up_date)
	{
		$sql = "INSERT INTO board_member_folders(folder_id,folders_name,description,folder_image,activation,add_date,update_date) VALUES(NULL ,'".$m_pub_type_name."','".$m_pub_desc."', '".$m_pub_type_image."','".$pub_act."','".$add_date."','".$up_date."')";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	//check existance
	function ExistsPub_type($m_pub_type_name)
	{
		$sql = "select * from board_member_folders where folders_name='".$m_pub_type_name."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	// select Pub Type Details
	function GetPublicationtype($pub_type_id)
	{
		$sql = "select * from board_member_folders where folder_id='".$pub_type_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	// Edit Publication Type
	
	function Update_pub_type($m_pub_cat_id,$m_pub_type_name,$m_pub_desc,$m_pub_type_image,$pub_act,$add_date,$up_date)
	{
		//echo m_country_name; exit;
		$sql = "UPDATE board_member_folders SET folders_name ='".$m_pub_type_name."',description ='".$m_pub_desc."',folder_image='".$m_pub_type_image."',activation='".$pub_act."',add_date='".$add_date."',update_date='".$up_date."' WHERE folder_id='".$m_pub_cat_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	//delete country
	function DeletepublicationType($m_publication_type_id)
	{
		$sql = "delete from board_member_folders where folder_id ='".$m_publication_type_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	
	
	function GetAll($sql)
	{
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	

}