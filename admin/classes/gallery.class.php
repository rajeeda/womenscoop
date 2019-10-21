<?php
class Gallary
{
	public $m_image_id = NULL;
	public $m_image_name = NULL;
	public $m_image_cat = NULL;
	public $m_alt_text = NULL;

	//select image cat
	function Getcatagery()
	{
		$sql = "SELECT distinct catagary FROM image_gallary";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function Insert_Gallery($m_image_name,$m_image_cat,$m_alt_text)
	{	
		$sql2="SELECT Category_name FROM image_gallary_catogry WHERE Category_name='".$m_image_cat."'";
		$pdo2 = CDBCon::GetInstance();
        $stmt2 = $pdo2->prepare($sql2);
        $stmt2->execute();
        $cat = $stmt2->fetch(PDO::FETCH_ASSOC);
        if(!$cat){
        	$sql3 = "INSERT INTO image_gallary_catogry VALUES (NULL,'".$m_image_cat."','".$m_image_name."')";
        	$pdo3 = CDBCon::GetInstance();
        	$stmt3 = $pdo3->prepare($sql3);
        	$stmt3 = $stmt3->execute();
        }
		$sql = "INSERT INTO image_gallary VALUES (NULL,'".$m_image_name."','".$m_image_cat."','".$m_alt_text."')";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();


	}
	
	//select Images for catagary
	function SelectImageCatagary()
	{
		$sql = "SELECT min(catagary) as mxcat FROM image_gallary";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//update Categary
	function Update_Categary($m_olt_cat,$m_image_cat)
	{
		$sql = "UPDATE image_gallary SET catagary='".$m_image_cat."' where catagary='".$m_olt_cat."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	
	
	// Select  Image gallery by cat
	function GetImagegallery($cat)
	{
		$sql = "SELECT * FROM image_gallary WHERE catagary='".$cat."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	//Slect Image
	function ImageFromImageid($img_id)
	{
		$sql = "SELECT * FROM image_gallary WHERE image_id='".$img_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//Update Image Gallery
	function Update_image($img_id,$img_name,$img_catagary,$alt_text)
	{
		$sql = "UPDATE image_gallary SET image_name ='".$img_name."', catagary='".$img_catagary."',alt_text ='".$alt_text."'  where image_id='".$img_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	function DeleteImage($m_image_id)
	{
		$sql = "delete from image_gallary where image_id ='".$m_image_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	function DeleteImageAll($albumid)
	{
		$sql = "delete from image_gallary where catagary ='".$albumid."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $sql = "delete from image_gallary_catogry where Category_name ='".$albumid."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        return $stmt->execute();
	}

}