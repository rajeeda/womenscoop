<?php
class Publication_Document
{
	public $m_pub_doc_id			= NULL;
	public $m_pub_doc_name			= NULL;
	public $m_pub_doc_type			= NULL;
	public $m_pub_doc_desc			= NULL;
	public $m_pub_doc_image			= NULL;
	public $m_pub_att_file_01		= NULL;
	public $m_pub_att_file_02		= NULL;
	public $m_pub_att_file_03		= NULL;
	
	public $m_record_id				= NULL;
	public $m_file_name				= NULL;
	public $m_file_data				= NULL;
	public $m_file_type				= NULL;
	public $m_record_type			= NULL;

	// get Publication Type 
	function Publication_Doc()
	{
		$sql = "select * from publication_catagary";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
	
	//get Publication catagory type
	function GetPublicationDocumentCatagory($pub_doc_id)
	{
		$sql = "select * from publication_catagary where publication_cat_id='".$pub_doc_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//add new publibation
	function New_Publication_document($m_pub_doc_type,$m_pub_record_type,$m_year,$m_document_name,$add_date)
	{
		$sql = "INSERT INTO publication VALUES(NULL,'".$m_pub_doc_type."','".$m_pub_record_type."','".$m_year."','".$m_document_name."','".$add_date."',NULL)";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();

    }
	
	
	//publication Document File Insert
	function NewPub_doc_Files($pub_doc_name,$pub_doc_description,$pub_file,$pub_file_type,$record_type,$record_id,$add_date,$file_name1)
	{
		$sql = "INSERT INTO pubcation_documents VALUES(NULL,'".$pub_doc_name."','".$pub_doc_description."','".$pub_file."','".$pub_file_type."','".$record_type."','".$record_id."','".$add_date."','".$file_name1."')";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }
	
		// select Pub Document Details
	function GetPublicationDocument($pub_doc_id)
	{
		$sql = "select * from publication where publication_id='".$pub_doc_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	//Get Pubcation Document 
	function Get_ALL_PublicationDocument($rec_type,$rec_id)
	{
		$sql = "SELECT * FROM pubcation_documents where report_type = '".$rec_type."' and record_id = '".$rec_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	// Get Publication Document Details
	function GetPublication_doc($doc_id)
	{
		$sql = "select * from pubcation_documents where pub_doc_id ='".$doc_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//Update Doc File
	function Update_doc_file($m_pub_doc_id,$pub_doc_name,$pub_doc_file,$file_type)
	{
		$sql = "UPDATE pubcation_documents SET pub_doc_name ='".$pub_doc_name."',pub_doc_file ='".$pub_doc_file."',file_type='".$file_type."' WHERE pub_doc_id='".$m_pub_doc_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();

    }

	// Get Pub Type Id
	function GetPubDoc_Id($pub_record_type,$pub_doc_name)
	{
		$sql = "select max(publication_id) as maxval from publication where record_type ='".$pub_record_type."' AND document_name ='".$pub_doc_name."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}

		//check existance
	function ExistsPublication_doc($m_record_type)
	{
		$sql = "select * from publication where record_type ='".$m_record_type."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	// Get Publication Document Document Name
	function getPublicationDocumnetname($pub_cat_id)
	{
		$sql = "select * from publication where publication_cat_id = '".$pub_cat_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function getPubDocname($pub_doc_name)
	{
		$sql = "select * from publication where document_name = '".$pub_doc_name."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	function Update_pub_doc($m_pub_doc_id,$m_pub_cat_id,$m_pub_record_type,$m_pub_year,$month,$m_pub_doc_name,$add_date)
	{
		$sql = "UPDATE publication SET publication_cat_id ='".$m_pub_cat_id."',record_type ='".$m_pub_record_type."',year='".$m_pub_year."',document_name='".$m_pub_doc_name."',add_date='".$add_date."' WHERE publication_id='".$m_pub_doc_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();

    }
	
	function Update_pub_doc_id($pub_rec_id,$pub_doc_id)
	{
		$sql = "Update pubcation_documents set record_id ='".$pub_doc_id."' where record_id = '".$pub_rec_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }
	
	// Uploaded Documents
	function Uploaded_document($m_record_id,$m_file_name,$m_file_data,$m_file_type,$m_record_type)
	{
		$sql = "INSERT INTO upload_files VALUES(NULL,'".$m_record_id."','".$m_file_name."','".$m_file_data."','".$m_file_type."','".$m_record_type."')";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }

	// Update Files
	function Uploaded_document_edit($file_id,$m_record_id,$m_file_name,$m_file_data,$m_file_type,$m_record_type)
	{
		$sql = "UPDATE upload_files SET record_id ='".$m_record_id."',file_name ='".$m_file_name."',file_data ='".$m_file_data."',file_type ='".$m_file_type."' ,record_type='".$m_record_type."'   WHERE file_id ='".$file_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();

    }
	
	
	//check existance
	function ExistsPub_doc($m_pub_doc_name)
	{
		$sql = "select * from publication where document_name='".$m_pub_doc_name."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	

	
	//Get Publication Document type From Pub Id
	function GetPubFiles($pub_doc_id,$pub_type)
	{
		$sql = "SELECT * FROM upload_files WHERE record_id='".$pub_doc_id."' AND record_type ='".$pub_type."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	// Edit Publication Type
	
	function Update_pub_type($m_pub_cat_id,$m_pub_type_name,$m_pub_desc,$m_pub_type_image,$pub_act,$add_date,$up_date)
	{
		$sql = "UPDATE publication_catagary SET pub_cat_name ='".$m_pub_type_name."',description ='".$m_pub_desc."',pub_cat_image='".$m_pub_type_image."',activation='".$pub_act."',add_date='".$add_date."',update_date='".$up_date."' WHERE publication_cat_id='".$m_pub_cat_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();

    }
	
	//delete country
	function DeletepublicationDoc($m_pub_doc_id)
	{
		$sql = "delete from publication  where publication_id ='".$m_pub_doc_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();

    }
	
	function GetAttachFiles($m_pub_doc_id,$type)
	{	
		$sql = "select * from upload_files where record_id='".$m_pub_doc_id."' AND record_type ='".$type."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	
	function GetAll($sql)
	{
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	// delete Publication file
	function deletepubfile($m_file_id)
	{
		$sql = "DELETE FROM pubcation_documents WHERE pub_doc_id='".$m_file_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	function SelectPub_doc_files($m_pub_doc_id)
	{
		$sql = "select record_id,pub_doc_file from pubcation_documents where pub_doc_id='".$m_pub_doc_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	

}