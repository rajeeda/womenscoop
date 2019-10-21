<?php

class AboutUS
{
    public $m_aboutus_id = null;
    public $m_mem_title = null;
    public $m_mem_name = null;
    public $m_mem_image = null;
    public $m_mem_societynmae = null;
    public $m_start_date = null;
    public $m_end_date = null;
    public $m_edit_date = null;
    public $m_country_id = null;
    public $m_post = null;
    public $m_type = null;
    public $m_query = null;

    //add new event
    function Add_Aboutus(

        $m_mem_title,
        $m_mem_name,
        $m_post,
        $m_mem_societynmae,
        $m_country_id,
        $m_mem_image,
        $m_type,
        $m_position,
        $m_start_date,
        $m_end_date,
        $description,
        $project,
        $active
    ) {
         echo $m_country_id;
        $sql = "INSERT INTO about_us VALUES (NULL,
                  :title,
                  :name,
                  :post,
                  :society,
                  :country,
                  :image,
                  :type,
                  :position,
                  :start,
                  :end,
                  :description,
                  :project,
                  :active)";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':title'       => $m_mem_title,
            ':name'        => $m_mem_name,
            ':post'        => $m_post,
            ':society'     => $m_mem_societynmae,
            ':country'     => $m_country_id,
            ':image'       => $m_mem_image,
            ':type'        => $m_type,
            ':position'    => $m_position,
            ':start'       => $m_start_date,
            ':end'         => $m_end_date,
            ':description' => $description,
            ':project'      =>$project,
            ':active'   =>1
        ]);
    }

    //add new project
    function Addproject($new_project){
        $sql = "INSERT INTO projects VALUES (NULL,
                  :project_name,
                  :active)";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':project_name'=> $new_project,
            ':active'   =>1
        ]);

    }

    //get project
    function GetNewProject($new_project)
    {
        $sql = "select id from projects where project_name='" . $new_project . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql); 
        $stmt->execute(); 
        $data = $stmt->fetch();
        return $data;
    }

    //check existance
    function ExistsNews($m_news_name)
    {
        $sql = "select * from news where news_name='" . $m_news_name . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function Getcountry($m_country_id)
    {
        $sql = "select * from country where country_id='" . $m_country_id . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //get News records
    function GetMemberName()
    {
        $sql = "select member_name,member_id from member ORDER BY member_name ASC";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function Get_about_us($id)
    {
        $sql = "SELECT * FROM about_us WHERE about_us='" . $id . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    //update new event
    function edit_Aboutus(
        $m_aboutus_id,
        $m_mem_title,
        $m_mem_name,
        $m_post,
        $m_mem_societynmae,
        $m_country_id,
        $m_mem_image,
        $m_type,
        $description,
        $position
    ) {
        $sql = "UPDATE about_us SET
                      title = :title,
                      mem_name = :mem_name,
                      possion = :post,
                      society_name = :society,
                      country = :country,
                      image = :image,
                      type = :type,
                      edit_date = NOW(),
                      description = :description,
                      position = :position
                      WHERE about_us = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':title'       => $m_mem_title,
            ':mem_name'    => $m_mem_name,
            ':post'        => $m_post,
            ':society'     => $m_mem_societynmae,
            ':country'     => $m_country_id,
            ':image'       => $m_mem_image,
            ':type'        => $m_type,
            ':id'          => $m_aboutus_id,
            ':position'    => $position,
            ':description' => $description
        ]);
    }


    //get all users
    function GetAll($sql)
    {
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getAllByType($type)
    {
        $sql = "SELECT * FROM about_us WHERE type = :type ORDER BY position ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':type' => $type]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //delete user
    function DeleteAboutus($m_news_id)
    {
        $sql = "DELETE FROM about_us WHERE about_us='" . $m_news_id . "'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }

    function getProjects()
    {
        $sql = "select * from projects ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}