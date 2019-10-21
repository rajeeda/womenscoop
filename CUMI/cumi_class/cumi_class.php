<?php

class access
{
    public $mi_cate_code = NULL;
    public $comp_id = NULL;
    public $MarkOption = NULL;
    public $CatID = NULL;
    public $CatCode = NULL;
    public $Marks = NULL;
    public $Year = NULL;
    public $Date = NULL;
    public $UserID = NULL;
    public $Upd = NULL;

    function get_mi_category()
    {
        $sql = "SELECT  Distinct CatCode,CatProsp FROM cumi_category ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function get_mi_category_CatProsp($id)
    {
        $sql = "SELECT * FROM cumi_category WHERE CatCode= :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function get_mi_category_data($id)
    {
        $sql = "SELECT * FROM cumi_category WHERE CatCode = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function get_mi_caegoryoptions_data($id)
    {
        $sql = "SELECT * FROM cumi_indicators WHERE CatID = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function insert_mark_data($comp_id, $MarkOption, $CatID, $CatCode, $Marks, $Year, $Date, $UserID, $Upd)
    {
        $sql = "INSERT INTO cumi_marks VALUES('" . $comp_id . "','" . $MarkOption . "','" . $CatID . "','" . $CatCode . "','" . $Marks . "','" . $Year . "','" . $Date . "','" . $UserID . "','" . $Upd . "')";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }


    function get_union()
    {
        $sql = "SELECT reg_id,name FROM cumi_register_data";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    function check($name, $pass)
    {
        $sql = "SELECT * FROM cumi_register_data where user= :name AND pass = :pass ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':name' => $name, ':pass' => md5($pass)]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function check_fill($comp_id, $Year, $CatCode)
    {
        $sql = "SELECT * FROM cumi_marks WHERE comp_id = :id  AND Year = :year AND  CatCode = :code ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $comp_id, ':year' => $Year, ':code' => $CatCode]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function check_summary($comp_id, $Year)
    {
        $sql = "SELECT DISTINCT CatCode FROM cumi_marks WHERE comp_id = :id  AND Year = :year ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $comp_id, ':year' => $Year]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function get_mi_category_name($mi_cate_code)
    {
        $sql = "SELECT CatProsp FROM cumi_category WHERE CatCode = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $mi_cate_code]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function get_marks($Year, $comp_id, $CatCode)
    {
        $sql = "SELECT sum(Marks)as total FROM cumi_marks WHERE Year = :year AND comp_id = :id AND CatCode = :code ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $comp_id, ':year' => $Year, ':code' => $CatCode]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}