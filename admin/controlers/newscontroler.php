<?php
require_once('../config/config.php');
require_once(CLASS_PATH . 'db.class.php');
require_once('../classes/news.class.php');
require_once('upload_controller.php');

$mode = isset($_GET['mode']) ? $_GET['mode'] : '';
$mode = isset($_POST['mode']) ? $_POST['mode'] : $mode;


$file_path = "../../upload_images/News_images/";
$file_path_thumb = "../../upload_images/News_images/thumb/";
$type = "N";
$file_p = '';
$up_image = '';

switch ($mode) {

    case 'add_news':
        $news_name = isset($_POST['txt_news_name']) ? $_POST['txt_news_name'] : $news_name;
        $news_location = isset($_POST['txt_location']) ? $_POST['txt_location'] : $news_location;
        $news_country = isset($_POST['cmb_countryName']) ? $_POST['cmb_countryName'] : $news_country;
        $news_image = isset($_FILES['up_news_image']) ? $_FILES['up_news_image'] : $news_image;
        $news_date = isset($_POST['news_date']) ? $_POST['news_date'] : $end_date;
        $news_description = isset($_POST['news_desc']) ? $_POST['news_desc'] : $event_description;
        $file_name = 'up_news_image';
        $page = "new_news.php";
        $news_description=addslashes($news_description);


        if ($news_name == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_news.php?msg=1');</script>";
        } elseif ($news_description == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_news.php?msg=2');</script>";
        } elseif ($news_date == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_news.php?msg=3');</script>";
        } else {
            $isExists = News::ExistsNews($news_name);
            if ($_FILES['up_news_image']['name'] != '') {
                $up_image = File_upload::Image_upload('', $file_path, $file_path_thumb, $news_image, $file_name, "new_news.php", $file_p);
            }
            if ($isExists == true) {
                $news = News::getNewsByName($news_name);
                $regResult = News::Add_news($news['news_id'], $news_name, $news_date, $news_country, $news_description, $news_location, $up_image);
                $news_id = $news['news_id'];
            } elseif ($isExists == false) {


                $regResult = News::Add_news($news_name, $news_date, $news_country, $news_description, $news_location, $up_image);

                if ($regResult == true) {
                    $news = News:: passnewsid($news_name);
                    $news_id = $news['news_id'];

                    echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?news_id=" .$news_id. "&msg=5');</script>";

                } elseif ($regResult == false) {
                    echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_news.php?msg=6');</script>";
                }
            }
        }
        break;


    case 'uploads':

        $news_id = isset($_POST['hdn_news_id']) ? $_POST['hdn_news_id'] :$news_id;
        $doc_title = isset($_POST['txt_news_attachment']) ? $_POST['txt_news_attachment'] : $doc_title;
        $attachment = isset($_FILES['attach_document']) ? $_FILES['attach_document'] : $attachment;
        $add_date = date('Y-m-d');
        $file_name = 'attach_document';
        $page = "news.php";
        $type = "NRD";

        if ($doc_title == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?news_id=" . $news_id . "&msg=11');</script>";
        } else {
            if ($_FILES['attach_document']['name'] != '') {
                $regResult = File_upload :: Attach_File_upload($news_id, $file_path, $doc_title, $attachment, "attach_document", $page, $file_p, $type);
            }

            if ($regResult == true) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?news_id=" . $news_id . "&msg=13');</script>";

            } elseif ($regResult == false) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?news_id=" . $news_id . "&msg=14');</script>";
            }

        }
        break;

    case 'uploadsnews':

        $news_id = isset($_POST['hdn_news_id']) ? $_POST['hdn_news_id'] : $news_id;
        $doc_title = isset($_POST['txt_news_attachment']) ? $_POST['txt_news_attachment'] : $doc_title;
        $attachment = isset($_FILES['attach_document']) ? $_FILES['attach_document'] : $attachment;
        $add_date = date('Y-m-d');
        $file_name = 'attach_document';
        $page = "news.php";
        $type = "NRN";

        if ($doc_title == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php.php?news_id=" . $news_id . "&msg=11');</script>";
        } else {
            if ($_FILES['attach_document']['name'] != '') {
                $regResult = File_upload:: Attach_File_upload($news_id, $file_path, $doc_title, $attachment, "attach_document", $page, $file_p, $type);
            }

            if ($regResult == true) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php.php?news_id=" . $news_id . "&msg=13');</script>";

            } elseif ($regResult == false) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php.php?news_id=" . $news_id . "&msg=14');</script>";
            }

        }
        break;


    case 'edit_news':

        $news_id = isset($_POST['news_id']) ? $_POST['news_id'] : $news_id;
        $news_name = isset($_POST['txt_news_name']) ? $_POST['txt_news_name'] : $news_name;
        $news_location = isset($_POST['txt_location']) ? $_POST['txt_location'] : $news_location;
        $news_country = isset($_POST['cmb_countryName']) ? $_POST['cmb_countryName'] : $news_country;
        $news_image = isset($_FILES['up_news_image']) ? $_FILES['up_news_image'] : $news_image;
        $news_date = isset($_POST['news_date']) ? $_POST['news_date'] : $end_date;
        $news_description = isset($_POST['news_desc']) ? $_POST['news_desc'] : $event_description;
        $img_file = isset($_POST['hdn_news_img']) ? $_POST['hdn_news_img'] : $img_file;
        $news_description=addslashes($news_description);
        $file_name = 'up_news_image';
        $page = "edit_news.php";

        if ($news_name == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_news.php?msg=1');</script>";
        } elseif ($news_description == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_news.php?msg=2');</script>";
        } elseif ($news_date == '') {
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_news.php?msg=3');</script>";
        } else {
            if ($_FILES['up_news_image']['name'] != '') {
                $up_image = File_upload::Image_upload('', $file_path, $file_path_thumb, $news_image, $file_name, "edit_news.php", $file_p);
            } else {
                $up_image = $img_file;
            }

            $regResult = News:: updateNews($news_id, $news_name, $news_date, $news_country, $news_description, $news_location, $up_image);
            if ($regResult == true) {

                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?news_id=" . $news_id . "&msg=7');</script>";

            } elseif ($regResult == false) {
                echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../edit_news.php?msg=8');</script>";
            }

        }

        break;

    case 'delete':

        $news_id = isset($_GET['newsid']) ? $_GET['newsid'] : $news_id;
        $deleteResults = News::Deletenews($news_id);

        if ($deleteResults == true)
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?msg=9');</script>";
        elseif ($deleteResults == false)
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?msg=10');</script>";

        break;

    case 'deletefile':

        $file_id = isset($_GET['fileid']) ? $_GET['fileid'] : $file_id;
        $news_file = News:: GetNewsDetailsFromFile($file_id);
        $deleteResults = News:: Deletefile($file_id);


        if ($deleteResults == true)
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?news_id=" . $news_file['record_id'] . "&msg=15');</script>";
        elseif ($deleteResults == false)
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?news_id='" . $news_file['record_id'] . "'&msg=16');</script>";

        break;

    case 'deletefile2':

        $file_id = isset($_GET['fileid']) ? $_GET['fileid'] : $file_id;
        $news_file = News:: GetNewsDetailsFromFile($file_id);
        $deleteResults = News:: Deletefile($file_id);


        if ($deleteResults == true)
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?news_id=" . $news_file['record_id'] . "&msg=15');</script>";
        elseif ($deleteResults == false)
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?news_id='" . $news_file['record_id'] . "'&msg=16');</script>";

        break;


    case 'newshome':

        $news_id = isset($_GET['newsid']) ? $_GET['newsid'] : $news_id;
        $news_home = isset($_GET['homenews']) ? $_GET['homenews'] : $news_home;
        //echo $news_id."  ".$news_home;
        $updateResults = News:: NewsHome($news_id, $news_home);

        if ($updateResults == true)
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?msg=11');</script>";
        elseif ($updateResults == false)
            echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../news.php?msg=12');</script>";

        break;


}
?>