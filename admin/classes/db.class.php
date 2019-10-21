<?php
class CDBCon
{
    /**
     * @var PDO
     */
	static private $m_instance = NULL;
	
	private function __construct()
	{
		
	}
	
	public static function GetInstance()
	{
		if ( self::$m_instance == NULL )
		{
            self::$m_instance = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DB, DB_USER, DB_PWD);
            self::$m_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		
		return self::$m_instance;
	}
}