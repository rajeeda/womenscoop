<?php

class News
{
    public $m_news_id = NULL;
    public $m_news_name = NULL;
    public $m_news_image = NULL;
    public $m_news_start_date = NULL;
    public $m_news_end_date = NULL;
    public $m_country_id = NULL;
    public $m_news_description = NULL;
    public $m_type = NULL;
    public $m_location_description = NULL;
    public $m_query = NULL;


    //add new event
    function Add_news($name, $date, $id, $desc, $loc, $img, $home = 0)
    {
        $sql = " INSERT INTO news (news_name, news_date, country_id, description, location_name, news_img, news_home) "
            . " VALUES (:name, :date, :id, :desc, :loc, :img, :home)";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':name' => $name,
            ':date' => $date,
            ':id' => $id,
            ':desc' => $desc,
            ':loc' => $loc,
            ':img' => $img,
            ':home' => $home
        ]);
    }

    function updateNews($id, $name, $date, $countryId, $desc, $location, $img)
    {
        $sql = "UPDATE news 
                  SET news_name = :name, news_date = :date, country_id = :countryId, description = :desc, location_name = :location, 
                      news_img = :newsImg "
              . "WHERE news_id = :id";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':name' => $name,
            ':date' => $date,
            ':countryId' => $countryId,
            ':desc' => $desc,
            ':location' => $location,
            ':newsImg' => $img
        ]);
    }


    //check existance
    function ExistsNews($m_news_name)
    {
        $sql = "select * from news where news_name='" . $m_news_name . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        return (count($rows) !== 0);
    }


    function getNewsByName($m_news_name)
    {
        $sql = "select * from news where news_name='" . $m_news_name . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }


    //get News records
    function GetNews($m_news_id)
    {
        $sql = "select * from news where news_id='" . $m_news_id . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //get user records
    function GetAttachFiles($m_news_id, $type)
    {
        $sql = "select * from upload_files where record_id='" . $m_news_id . "' AND record_type ='" . $type . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    //Edit user
    function EditProfile($m_password, $m_first_name, $m_last_name, $m_active, $m_user_id)
    {
        $sql = "update users set password='" . $m_password . "', first_name='" . $m_first_name . "', last_name='" . $m_last_name . "', active='" . $m_active . "' where user_id='" . $m_user_id . "'";
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
    function Deletenews($m_news_id)
    {
        $sql = "DELETE FROM news WHERE news_id='" . $m_news_id . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }

    //Delete File
    function Deletefile($m_file_id)
    {
        $sql = "DELETE FROM upload_files WHERE file_id='" . $m_file_id . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }

    //select news details from Filr
    function GetNewsDetailsFromFile($file_id)
    {
        $sql = "select * from upload_files where file_id='" . $file_id . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //pass news documents
    function passnewsDocuments($id, $type)
    {
        $sql = "SELECT * FROM upload_files where record_type = :type AND record_id = :id";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':type' => $type, ':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function passnewsid($m_name)
    {
        $sql = "SELECT * from news where news_name='" . $m_name . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function NewsHome($m_news_id, $m_home)
    {
        $sql = "UPDATE news SET news_home='" . $m_home . "' WHERE news_id='" . $m_news_id . "' ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }
}
