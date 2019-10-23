<?php
require_once('config/config.php');
require_once(ADMIN_PATH . 'header_includes.php');
require_once(ADMIN_PATH . 'classes/country.class.php');
require_once(ADMIN_PATH . 'classes/about_us.class.php');
include(ADMIN_PATH . 'FCKeditor/fckeditor.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
    <script language="JavaScript" type="text/JavaScript">
        <!--
        function MM_swapImgRestore() { //v3.0
            var i, x, a = document.MM_sr;
            for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
        }

        function MM_preloadImages() { //v3.0
            var d = document;
            if (d.images) {
                if (!d.MM_p) d.MM_p = new Array();
                var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                for (i = 0; i < a.length; i++)
                    if (a[i].indexOf("#") != 0) {
                        d.MM_p[j] = new Image;
                        d.MM_p[j++].src = a[i];
                    }
            }
        }

        function MM_findObj(n, d) { //v4.01
            var p, i, x;
            if (!d) d = document;
            if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                d = parent.frames[n.substring(p + 1)].document;
                n = n.substring(0, p);
            }
            if (!(x = d[n]) && d.all) x = d.all[n];
            for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
            for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
            if (!x && d.getElementById) x = d.getElementById(n);
            return x;
        }

        function MM_swapImage() { //v3.0
            var i, j = 0, x, a = MM_swapImage.arguments;
            document.MM_sr = new Array;
            for (i = 0; i < (a.length - 2); i += 3)
                if ((x = MM_findObj(a[i])) != null) {
                    document.MM_sr[j++] = x;
                    if (!x.oSrc) x.oSrc = x.src;
                    x.src = a[i + 2];
                }
        }
        //-->
    </script>
</head>
<?php
$aboutus_id = isset($_GET['aboutus_id']) ? $_GET['aboutus_id'] : $_GET['id'];
$result = AboutUS::Get_about_us($aboutus_id);
?>
<body onload="MM_preloadImages('images/frontpage2.png','images/user2.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td><?php include(ADMIN_TPL_PATH . 'overall_top.tpl'); ?></td>
    </tr>
    <tr>
        <td>
            <table width="100%" border="0" cellspacing="2" cellpadding="2">
                <tr>
                    <td width="61%"><?php include(ADMIN_TPL_PATH . 'cpannel.tpl'); ?></td>
                    <td width="39%">
                        <div id="content">
                            <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
                                <tr>
                                    <td width="93">
                                        <div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()"
                                                               onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img
                                                    src="images/frontpage.png" alt="Home" name="Image4" width="48"
                                                    height="48" border="0" id="Image4"/></a><a href="signindefault.php"
                                                                                               onmouseout="MM_swapImgRestore()"
                                                                                               onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a
                                                href="select.php" onmouseout="MM_swapImgRestore()"
                                                onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br/>
                                            </a><span class="txt_ash">Home</span></div>
                                    </td>
                                    <td width="44">
                                        <div align="center"><img src="images/icon_right_arrow.png" width="20"
                                                                 height="20"/><img src="images/icon_right_arrow.png"
                                                                                   width="20" height="20"/></div>
                                    </td>
                                    <td width="65">
                                        <div align="center"><a href="about_us.php"><img src="images/langmanager.png"
                                                                                        width="48"
                                                                                        height="48"/></a><br/>
                                            Board Members
                                        </div>
                                    </td>
                                    <td width="46">
                                        <div align="center"><img src="images/icon_right_arrow.png" width="20"
                                                                 height="20"/><img src="images/icon_right_arrow.png"
                                                                                   width="20" height="20"/></div>
                                    </td>
                                    <td width="84">
                                        <div align="center"><a href="about_us.php"><img src="images/addedit.png"
                                                                                        width="41"
                                                                                        height="39"/></a><br/>
                                            Edit Board Members
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <div id="content">
                <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
                    <tr>
                        <td bgcolor="#F1F3F5" class="adminlist">
                            <div align="left" bgcolor="#d8d8d8"><h3>Update Board Member Details</h3></div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#F1F3F5">
                            <form action="controlers/aboutuscontroler.php?mode=edit_aboutus" method="post"
                                  enctype="multipart/form-data" name="form1" id="form1">
                                <table width="80%" border="0" align="center" cellpadding="2" cellspacing="2"
                                       class="cls_border">

                                    <tr>
                                        <td width="4%">&nbsp;</td>
                                        <td colspan="3">
                                            <div
                                                id="error"><h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES . 'aboutus.message.php'); ?></h6></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><input type="hidden" id="hdn_id" name="hdn_id"
                                                   value="<?php echo $aboutus_id; ?>"/>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td width="15%">Title</td>
                                        <td width="1%">:</td>
                                        <?php // echo $result['title'];exit;?>
                                        <td><select name="cmb_title" id="cmb_title">
                                                <option value="select">Select>></option>
                                                <option value="Mr." <?php if ($result['title'] == "Mr.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Mr.
                                                </option>
                                                <option value="Miss." <?php if ($result['title'] == "Miss.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Miss.
                                                </option>
                                                <option value="Ms." <?php if ($result['title'] == "Ms.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Ms.
                                                </option>
                                                <option value="Mrs." <?php if ($result['title'] == "Mrs.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Mrs.
                                                </option>
                                                <option value="Rev." <?php if ($result['title'] == "Rev.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Rev.
                                                </option>
                                                <option value="Atty." <?php if ($result['title'] == "Atty.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Atty.
                                                </option>
                                                <option value="Drs." <?php if ($result['title'] == "Drs.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Drs.
                                                </option>
                                                <option value="Dr." <?php if ($result['title'] == "Dr.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Dr.
                                                </option>
                                                <option value="Engr." <?php if ($result['title'] == "Engr.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Engr.
                                                </option>
                                                <option value="Prof." <?php if ($result['title'] == "Prof.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Prof.
                                                </option>
                                                <option
                                                    value="Asst. Prof." <?php if ($result['title'] == "Asst. Prof.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Asst. Prof.
                                                </option>
                                                <option
                                                    value="Assoc. Prof" <?php if ($result['title'] == "Assoc. Prof.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Assoc. Prof.
                                                </option>
                                                <option value="Maj. Gen" <?php if ($result['title'] == "Maj. Gen.") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Maj. Gen.
                                                </option>
                                                <option value="Other" <?php if ($result['title'] == "Other") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Other.
                                                </option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Name</td>
                                        <td>:</td>
                                        <td><input name="txtname" type="text" id="txtname" size="50"
                                                   value="<?php echo $result['mem_name']; ?>"/></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Post</td>
                                        <td>:</td>
                                        <td><label>
                                                <input name="txtpost" type="text" id="txtpost" size="30"
                                                       value="<?php echo $result['possion']; ?>"/>
                                            </label></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Image</td>
                                        <td>:</td>
                                        <td>
                                            <input type="hidden" id="hdn_image" name="hdn_image"
                                                   value="<?php echo $result['image']; ?>"/>
                                            <?php
                                            if ($result['image'] != null) {
                                                ?>
                                                <img
                                                    src="../upload_images/AboutUS/thumb/<?php echo $result['image']; ?>"/>
                                                <?php
                                            }
                                            ?>
                                            <input type="file" name="txtimg" id="txtimg"/></td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td valign="top">Society name</td>
                                        <td valign="top">:</td>
                                        <td><input name="cmbsociety" type="text" id="cmbsociety" size="40"
                                                   value="<?php echo $result['society_name']; ?>"/></td>
                                    </tr>


                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>country</td>
                                        <td>:</td>
                                        <td><label>
                                                <select name="cmb_countryName" id="cmb_countryName">
                                                    <option value="0">Select Country Name</option>
                                                    <?php
                                                    $country = Country:: GetCountry();
                                                    for ($a = 0; $a < count($country); $a++) {
                                                        $row = each($country);

                                                        ?>
                                                        <option
                                                            value="<?php echo $row["value"]["country_id"]; ?>" <?php if ($row["value"]["country_id"] == $result['country']) {
                                                            echo "selected=\"selected\" ";
                                                        } ?>><?php echo $row["value"]["country_name"]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </label></td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Categary</td>
                                        <td>:</td>
                                        <td>
                                            <select name="cmbcatagary" id="cmbcatagary">
                                                <option value="bod"<?php if ($result['type'] == "bod") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Board of Directors
                                                </option>
                                                <option value="Staff"<?php if ($result['type'] == "Staff") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Staff
                                                </option>
                                                <option value="ps"<?php if ($result['type'] == "ps") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>Project Staff
                                                </option>
                                                <option value="ALMI"<?php if ($result['type'] == "ALMI") {
                                                    echo "selected=\"selected\" ";
                                                } ?>>ALMI
                                                </option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>position</td>
                                        <td>:</td>
                                        <td><select name="cmb_position_no" id="cmb_position_no">
                                                <option value="select">Select&gt;&gt;</option>
                                                <?php
                                                for ($a = 1; $a <= 30; $a++) { ?>
                                                    <option
                                                        value=<?php echo $a; ?> <?php if ($result['position'] == $a) {
                                                        echo "selected=\"selected\" ";
                                                    } ?>><?php echo $a; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Description</td>
                                        <td>:</td>
                                        <td><textarea rows="20" cols="80" name="description"><?php echo $result['description'];?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td height="28">&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <div align="right">
                                                <input name="btn_Update" type="submit" class="button"
                                                       value="     Update   " id="btn_Update"/>
                                                <input name="btn_cancel" type="button" class="button"
                                                       value="   Cancel   "
                                                       onclick="window.location.href='about_us.php'" id="btn_cancel"/>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#F1F3F5" class="adminlist">&nbsp;</td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td><center><?php include (ADMIN_TPL_PATH.'footer.tpl');?></center></td>
    </tr>
</table>
</body>
</html>
