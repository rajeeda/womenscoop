<?php
class Publication
{
    public $m_pub_id = NULL;
    public $m_pub_type_name = NULL;
    public $m_pub_desc = NULL;
    public $m_pub_type_image = NULL;
    //public $m_p					= NULL;

    //add new Publication
    function Add_new_pub_type($m_pub_type_name, $m_pub_desc, $m_pub_type_image, $pub_act, $add_date, $up_date)
    {
        //echo m_country_name; exit;
        $sql = "INSERT INTO publication_catagary(publication_cat_id,pub_cat_name,description,pub_cat_image,activation,add_date,update_date) VALUES(NULL ,'" . $m_pub_type_name . "','" . $m_pub_desc . "', '" . $m_pub_type_image . "','" . $pub_act . "','" . $add_date . "','" . $up_date . "')";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }

    //check existance
    function ExistsPub_type($id)
    {
        $sql = "select * from publication_catagary where pub_cat_name = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // select Pub Type Details
    function GetPublicationtype($id)
    {
        $sql = "select * from publication_catagary where publication_cat_id= :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Edit Publication Type

    function Update_pub_type($m_pub_cat_id, $m_pub_type_name, $m_pub_desc, $m_pub_type_image, $pub_act, $add_date, $up_date)
    {
        $sql = "UPDATE publication_catagary SET pub_cat_name ='" . $m_pub_type_name . "',description ='" . $m_pub_desc . "',pub_cat_image='" . $m_pub_type_image . "',activation='" . $pub_act . "',add_date='" . $add_date . "',update_date='" . $up_date . "' WHERE publication_cat_id='" . $m_pub_cat_id . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }

    //delete country
    function DeletepublicationType($id)
    {
        $sql = "delete from publication_catagary where publication_cat_id = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }


    function GetAll($sql)
    {
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}