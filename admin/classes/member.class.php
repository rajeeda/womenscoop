<?php
//require_once('../classes/fileupload-class.php');
class Member
{
	public $m_member_id = NULL;
	public $m_member_type_id = NULL;
	public $m_member_name  = NULL;
	public $m_member_abbrevation  = NULL;
	public $m_country_id  = NULL;
	public $m_member_sign = NULL;
	public $m_url  = NULL;
	public $m_email  = NULL;
	public $m_street1 = NULL;
	public $m_street2  = NULL;
	public $m_city = NULL;
	public $m_province  = NULL;
	public $m_postal_code  = NULL;
	public $m_phone_no = NULL;
	public $m_fax_no = NULL;
	public $m_registered_date=NULL;
	public $m_updated_date=NULL;
	public $m_active=NULL;
	
	public $m_member_staff_id=NULL;
	public $m_staff_title=NULL;
	public $m_staff_name=NULL;
	public $m_position_no=NULL;
	public $m_Position=NULL;
	
	public $m_title   = NULL;
	public $m_name    = NULL;
	
	
	//add new member basic details
	function New_member_basic($m_member_type_id,$m_member_name,$m_member_abbrevation,$m_member_sign,$m_country_id,$m_url,$m_email,$m_registered_date,$m_active)
	{
	    $sql = "INSERT INTO member (member_id,member_type_id,member_name,member_abbrevation,member_sign,country_id,url,email,registered_date,active) VALUES (NULL,'".$m_member_type_id."','".$m_member_name."','".$m_member_abbrevation."','".$m_member_sign."','".$m_country_id."','".$m_url."','".$m_email."','".$m_registered_date."','".$m_active."')";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	//add new member contact details
	function New_member_contact($m_member_id,$m_street1,$m_street2,$m_city,$m_province,$m_postal_code,$m_phone_no,$m_fax_no,$m_updated_date)
	{	
		
		$sql = "UPDATE member SET street1='".$m_street1."',street2='".$m_street2."',city='".$m_city."',province='".$m_province."',Address='".$m_street1.",".$m_street2.",".$m_city."',postal_code='".$m_postal_code."',phone_no='".$m_phone_no."',fax_no='".$m_fax_no."',updated_date='".$m_updated_date."' WHERE  member_id='".$m_member_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	// Add new Contact Person
	function New_contact_person($m_member_id,$m_title,$m_name,$post,$m_address,$m_telephone,$m_fax,$m_email,$m_url,$m_add_date)
	{
		$sql = "Insert into contactperson values(NULL,'".$m_member_id."','".$m_title."','".$m_name."','".$post."','".$m_address."','".$m_telephone."','".$m_fax."','".$m_email."','".$m_url."','".$m_add_date."',NULL)";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	// insert new Regluter details 
	function New_Regluter($m_member_id,$m_title,$m_reg_name,$m_desc,$m_address,$m_add_date)
	{
		$sql = "Insert into regulator values(NULL,'".$m_member_id."','".$m_title."','".$m_reg_name."','".$m_desc."','".$m_address."','".$m_add_date."',NULL)";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();

	}
	
	
	//add new member staff details
	function member_staff($m_member_id,$m_staff_title,$m_staff_name,$m_position_no,$m_Position)
	{
		$sql = "INSERT INTO member_staff(member_staff_id,member_id,title,name,board_of_directors,possion) VALUES (NULL,'".$m_member_id."','".$m_staff_title."','".$m_staff_name."','".$m_Position."','".$m_position_no."')";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}

	//Update member
	function update_member_basic($m_member_id,$m_member_type_id,$m_member_name,$m_member_abbrevation,$m_member_sign,$m_country_id,$m_url,$m_email,$m_updated_date,$m_active)
	{
		$sql = "UPDATE member "
             . "SET member_type_id = :type_id, member_name = :name, member_abbrevation = :abbr,
                    member_sign = :sign,
                    country_id =  :country_id,
                    url = :url,
                    email = :email,
                    updated_date = :update_date,
                    active= :active
                WHERE member_id = :id ";

        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $m_member_id, ':type_id' => $m_member_type_id, ':name' => $m_member_name,
                        ':abbr' => $m_member_abbrevation, ':sign' => $m_member_sign, ':country_id' => $m_country_id,
                        ':url' => $m_url, ':email' => $m_email, ':update_date' => $m_updated_date, ':active' => $m_active]);
	}
	
	
	
	//Update member contact
	function update_member_contact($m_member_id,$m_street1,$m_street2,$m_city,$m_province,$m_postal_code,$m_phone_no,$m_fax_no)
	{
		$sql = "UPDATE member "
             . "SET street1 = :street1, street2 = :street2, city = :city, province = :province, postal_code = :postal_code,
                phone_no = :phone, fax_no = :fax "
             . "WHERE  member_id = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $m_member_id, ':street1' => $m_street1, ':street2' => $m_street2,
            ':city' => $m_city, ':province' => $m_province, ':postal_code' => $m_postal_code,
            ':phone' => $m_phone_no, ':fax' => $m_fax_no]);
	}
	// update Contact Member details
	function Update_contact_person($m_contact_member_id,$m_title,$m_name,$post,$m_address,$m_telephone,$m_fax,$m_email,$m_url,$m_add_date)
	{
		$sql = "Update contactperson set title='".$m_title."',contact_person ='".$m_name."',post = '".$post."',contact_address ='".$m_address."', telephone ='".$m_telephone."',fax ='".$m_fax."',email ='".$m_email."',url='".$m_url."',update_date='".$m_add_date."'  Where contact_person_id ='".$m_contact_member_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	// Update Regulator Details
	function update_Regluter($m_reglutor_id,$m_title,$m_reg_name,$m_desc,$m_address,$m_add_date)
	{
		$sql = "Update regulator set title ='".$m_title."',reg_name = '".$m_reg_name."',reg_desc='".$m_desc."',reg_address='".$m_address."',update_date='".$m_add_date."' where regulator_id = '".$m_reglutor_id."'";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	
	//update staff members
	function update_member_staff($m_member_id,$m_staff_id,$m_staff_title,$m_staff_name,$m_position_no,$m_Position)
	{
		$sql = "UPDATE member_staff SET title='".$m_staff_title."',name='".$m_staff_name."',board_of_directors='".$m_Position."',possion='".$m_position_no."' WHERE member_id='".$m_member_id."' AND member_staff_id='".$m_staff_id."' ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
	}
	
	
	//get user records	
	function Get_member_id($name)
	{
		$sql ="SELECT * FROM member WHERE member_name= :name ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':name' => $name]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	//Get member details
	function GetMember($id)
	{
		$sql = "SELECT * FROM member WHERE member_id= :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	// get Member Contact Details  
	
	function getContactPerson($id)
	{
		$sql = "SELECT * FROM contactperson WHERE member_id = :id ORDER BY contact_person ASC";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	// Getmember id from Contact membetr
	function getmember_Id($id)
	{
			$sql = "SELECT member_id FROM contactperson WHERE contact_person_id = :id ";
            $pdo = CDBCon::GetInstance();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	//
	
	//getcontact person details 
	function GetContactPersondetails($id)
	{
		$sql = "SELECT * FROM contactperson WHERE contact_person_id = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//get Regulator details
	function getRegulator($id)
	{
		$sql = "SELECT * FROM regulator WHERE member_id = :id ORDER BY reg_name ASC";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	//selectreg it
	function getregulatemem_Id($id)
	{
		$sql = "SELECT member_id FROM regulator WHERE regulator_id = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//slect regulator details 
	function GetRegulatordetails($id)
	{
		$sql = "SELECT * FROM regulator WHERE regulator_id = :id";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	
	function Get_Staff_Member($id)
	{
		$sql = "SELECT * FROM member_staff WHERE member_id = :id ORDER BY member_staff_id ASC";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function Get_Staff_Member_details($id)
	{
		$sql = "SELECT * FROM member_staff WHERE member_staff_id = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}	
	
	
	function GetUser($id)
	{
		$sql = "select * from users where user_id = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//check existance
	function ExistsUser($email)
	{
		$sql = "select * from member where email= :email";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
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
	{///////////////////////////////////////////////////////////////////////////////////////////
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	//delete user
	function DeleteMember($id)
	{
		$sql ="DELETE FROM member WHERE member_id = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);


		$sql ="DELETE FROM member_staff WHERE member_id = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
	
	function Delete_Staff_Member($m_member_id,$id)
	{
		$sql = "DELETE  FROM member_staff WHERE member_staff_id = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
	}
	
	function Delete_contact_Person($id){
		$sql ="DELETE  FROM contactperson WHERE contact_person_id = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
	}
	
	function Delete_regulator($id)
	{
		$sql = "DELETE FROM regulator WHERE regulator_id = :id ";
        $pdo = CDBCon::GetInstance();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
	}
}