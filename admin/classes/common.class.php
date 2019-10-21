<?php
class Common
{
	public $m_atttitle   	= NULL;
	public $m_attachment 	= NULL;
	public $m_type 			= NULL;
	public $m_record_id		= NULL;

	//constructor
	private function __construct()
	{
		
	}
	
	//Insert new Attachment
	function Uploaded_document($id, $name, $data, $type, $record_type)
	{
		$sql = "INSERT INTO upload_files VALUES(NULL, :id, :name, :data, :type, :record_type)";
		$pdo = CDBCon::GetInstance();
		$stmt = $pdo->prepare($sql);
		return $stmt->execute([ ':id' => $id, ':name' => $name, ':data' => $data, ':type' => $type, ':record_type' => $record_type ]);
	}
	
	//database connection
	function DBConnect()
	{
		$this->m_db = CDBCon::GetInstance();
	}
}
