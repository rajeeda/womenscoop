<?php

//$event_id =$_GET['event_id'];
class Event
{
	public $m_event_id            = NULL;
	public $m_event_name          = NULL;
	public $m_event_image         = NULL;
	public $m_start_date 	      = NULL;
	public $m_end_date 		      = NULL;
	public $m_country_id  		  = NULL;
	public $m_event_description   = NULL;
	public $m_type                = NULL;
	public $m_location_description= NULL;
	public $m_query               = NULL;
	
	//add new event
	function ADDEvent($m_event_name,$m_start_date,$m_end_date,$m_country_id,$m_event_description,$m_type,$m_location_description,$m_event_image,$txt_short_des)
	{      
		$sql = "INSERT INTO event VALUES (NULL,'".$m_event_name."','".$m_start_date."','".$m_end_date."','".$m_country_id."','".$m_event_description."','".$txt_short_des."','".$m_type."','".$m_location_description."','".$m_event_image."',0)";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	//update new event
	function updateEvent($m_event_id,$m_event_name,$m_start_date,$m_end_date,$m_country_id,$m_event_description,$m_type,$m_location_description,$m_event_image,$txt_short_des)
	{  
		$sql = "UPDATE event SET event_name='".$m_event_name."',event_starting_date='".$m_start_date."',event_end_date='".$m_end_date."',country_id='".$m_country_id."',event_short_description='".$txt_short_des."',description='".$m_event_description."',type='".$m_type."',location_description='".$m_location_description."',event_image='".$m_event_image."' WHERE event_id='".$m_event_id."' ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	//get user records
	function GetEvent($m_event_id)
	{	
		$sql = "select * from event where event_id='".$m_event_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//check existance
	function ExistsEvent($m_event_name)
	{
		$sql = "select * from event where event_name='".$m_event_name."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//Edit user
	function EditProfile($m_password,$m_first_name,$m_last_name,$m_active,$m_user_id)
	{
		$sql = "update users set password='".$m_password."', first_name='".$m_first_name."', last_name='".$m_last_name."', active='".$m_active."' where user_id='".$m_user_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
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
	function DeleteEvent($m_event_id)
	{
		$sql = "DELETE FROM event WHERE event_id='".$m_event_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	function GetAttachFiles($m_news_id,$type)
	{	
		$sql = "select * from upload_files where record_id='".$m_news_id."' AND record_type ='".$type."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	//pass news documents
	function passevntDocuments($m_event_id,$type)
	{
		$sql = "SELECT * FROM upload_files where record_type ='".$type."' and record_id ='".$m_event_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function EventsHome($m_event_id,$m_home)
	{
		$sql = "UPDATE event SET event_home='".$m_home."' WHERE event_id='".$m_event_id."' ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
}