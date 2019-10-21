<?php
require_once('../config/config.php');
require_once(CLASS_PATH . 'db.class.php');
require_once(ADMIN_CLASS_PATH . 'about_us.class.php');
require_once('upload_controller.php');

$mode = isset($_GET['mode']) ? $_GET['mode'] : '';
$mode = isset($_POST['mode']) ? $_POST['mode'] : $mode;

$file_path = "../../upload_images/AboutUS/";
$file_path_thumb = "../../upload_images/AboutUS/thumb/";
$up_image = '';

//$type 					= "N";

switch ($mode) {

    case 'add_aboutus':

        $mem_title = isset($_POST['cmb_title']) ? $_POST['cmb_title'] : '';
        $mem_name = isset($_POST['txtname']) ? $_POST['txtname'] : '';
        $post = isset($_POST['txtpost']) ? $_POST['txtpost'] : '';
        $mem_image = isset($_FILES['txtimg']) ? $_FILES['txtimg'] : '';
        $society_name = isset($_POST['cmbsociety']) ? $_POST['cmbsociety'] : '';
        $country = isset($_POST['cmb_countryName']) ? $_POST['cmb_countryName'] : '';
        $categary = isset($_POST['cmbcatagary']) ? $_POST['cmbcatagary'] : '';
        $possition = isset($_POST['cmb_position_no']) ? $_POST['cmb_position_no'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $project = isset($_POST['cmbprojects']) ? $_POST['cmbprojects'] : '';
        $new_project = isset($_POST['new_project']) ? $_POST['new_project'] : '';
        $added_date = date('Y-m-d');
        $updated_date = date('Y-m-d');
        $description=addslashes($description);


        $file_name = 'txtimg';
        $page = "new_aboutus.php";
        if($new_project){
            $projects=AboutUS::Addproject($new_project);
           if($projects){
               $result01=AboutUS::GetNewProject($new_project);
                        $project=$result01['id']; 
                    }
        }
        if ($mem_title == 'select') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_aboutus.php?msg=1');</script>";
        } elseif ($mem_name == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_aboutus.php?msg=2');</script>";
        } elseif ($post == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_aboutus.php?msg=3');</script>";
        } elseif ($categary == 'select') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_aboutus.php?msg=11');</script>";
        }elseif ($possition == 'select') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_aboutus.php?msg=12');</script>";
        } else {
            //echo $_FILES['txtimg']['name']; exit;
            if ($_FILES['txtimg']['name'] != '') {

                $up_image = File_upload::Image_upload('', $file_path, $file_path_thumb, $mem_image, $file_name,
                    "new_aboutus.php", $file_p);
            }
            $regResult = AboutUS::Add_Aboutus($mem_title, $mem_name, $post, $society_name, $country, $up_image,
                $categary, $possition, $added_date, $updated_date, $description,$project,$active);

            if ($regResult == true) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../about_us.php?msg=4');</script>";

            } elseif ($regResult == false) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_aboutus.php?msg=5');</script>";
            }

        }
        break;


    case 'uploads':

        $news_id = isset($_POST['hdn_news_id']) ? $_POST['hdn_news_id'] : '';
        $doc_title = isset($_POST['txt_news_attachment']) ? $_POST['txt_news_attachment'] : '';
        $attachment = isset($_FILES['attach_document']) ? $_FILES['attach_document'] : '';
        $add_date = date('Y-m-d');
        $file_name = 'attach_document';
        $page = "news_attechments.php";
        $type = "NRD";

        if ($doc_title == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news_attechments.php?news_id=" . $news_id . "&msg=11');</script>";
        } else {
            if ($_FILES['attach_document']['name'] != '') {
                $regResult = File_upload:: Attach_File_upload($news_id, $file_path, $doc_title, $attachment,
                    "attach_document", $page, $file_p, $type);
            }

            if ($regResult == true) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news_attechments.php?news_id=" . $news_id . "&msg=12');</script>";

            } elseif ($regResult == false) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news_attechments.php?news_id=" . $news_id . "&msg=13');</script>";
            }

        }
        break;

    case 'uploadsnews':

        $news_id = isset($_POST['hdn_news_id']) ? $_POST['hdn_news_id'] : '';
        $doc_title = isset($_POST['txt_news_attachment']) ? $_POST['txt_news_attachment'] : '';
        $attachment = isset($_FILES['attach_document']) ? $_FILES['attach_document'] : '';
        $add_date = date('Y-m-d');
        $file_name = 'attach_document';
        $page = "news_attechments2.php";
        $type = "NRN";

        if ($doc_title == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news_attechments2.php?news_id=" . $news_id . "&msg=11');</script>";
        } else {
            if ($_FILES['attach_document']['name'] != '') {
                $regResult = File_upload:: Attach_File_upload($news_id, $file_path, $doc_title, $attachment,
                    "attach_document", $page, $file_p, $type);
            }

            if ($regResult == true) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news_attechments2.php?news_id=" . $news_id . "&msg=12');</script>";

            } elseif ($regResult == false) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news_attechments2.php?news_id=" . $news_id . "&msg=13');</script>";
            }

        }
        break;


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    case 'edit_aboutus':

        $id = isset($_POST['hdn_id']) ? $_POST['hdn_id'] : '';
        $mem_title = isset($_POST['cmb_title']) ? $_POST['cmb_title'] : '';
        $mem_name = isset($_POST['txtname']) ? $_POST['txtname'] : '';
        $post = isset($_POST['txtpost']) ? $_POST['txtpost'] : '';
        $mem_image = isset($_FILES['txtimg']) ? $_FILES['txtimg'] : '';
        $hdn_image = isset($_POST['hdn_image']) ? $_POST['hdn_image'] : '';
        $society_name = isset($_POST['cmbsociety']) ? $_POST['cmbsociety'] : '';
        $country = isset($_POST['cmb_countryName']) ? $_POST['cmb_countryName'] : '';
        $categary = isset($_POST['cmbcatagary']) ? $_POST['cmbcatagary'] : '';
        $position = isset($_POST['cmb_position_no']) ? $_POST['cmb_position_no'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $added_date = date('Y-m-d');
        $updated_date = date('Y-m-d');
        $description=addslashes($description);

        //echo $mem_image; exit;
        $file_name = 'txtimg';
        $page = "edit_aboutus.php";
        $file_p = $hdn_image;
        if ($mem_title == 'select') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_aboutus.php?msg=1');</script>";
        } elseif ($mem_name == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_aboutus.php?msg=2');</script>";
        } elseif ($post == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_aboutus.php?msg=3');</script>";
        } else {

            if ($_FILES['txtimg']['name'] == '') {
                $up_image = $hdn_image;
            } else {
                $up_image = File_upload::Image_upload($id, $file_path, $file_path_thumb, $mem_image, $file_name,
                    "edit_aboutus.php", $file_p);
            }
            $regResult = AboutUS::edit_Aboutus($id, $mem_title, $mem_name, $post, $society_name, $country, $up_image,
                $categary, $description, $position);

            if ($regResult == true) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../about_us.php?msg=7');</script>";

            } elseif ($regResult == false) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_aboutus.php?msg=6');</script>";
            }

        }
        break;


    case 'deleteaboutus':

        $aboutus = isset($_GET['aboutusid']) ? $_GET['aboutusid'] : $aboutus;
        $deleteResults = AboutUS:: DeleteAboutus($aboutus);

        if ($deleteResults == true) {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../about_us.php?msg=9');</script>";
        } elseif ($deleteResults == false) {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../about_us.php?msg=10');</script>";
        }

        break;


}
?>