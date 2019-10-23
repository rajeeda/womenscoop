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

<body onload="MM_preloadImages('images/frontpage2.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td><?php include(ADMIN_TPL_PATH . 'overall_top.tpl'); ?></td>
    </tr>
    <tr>
        <td>
            <table width="100%" border="0" cellspacing="2" cellpadding="2">
                <tr>
                    <td width="62%"><?php include(ADMIN_TPL_PATH . 'cpannel.tpl'); ?></td>
                    <td width="38%">
                        <div id="content">
                            <table width="94%" border="0" align="center" cellpadding="2" cellspacing="2">
                                <tr>
                                    <td width="82">
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
                                    <td width="49">
                                        <div align="center"><img src="images/icon_right_arrow.png" width="20"
                                                                 height="20"/><img src="images/icon_right_arrow.png"
                                                                                   width="20" height="20"/></div>
                                    </td>
                                    <td width="62">
                                        <div align="center"><a href="about_us.php"><img src="images/langmanager.png"
                                                                                        width="48"
                                                                                        height="48"/></a><br/>
                                            About Us
                                        </div>
                                    </td>
                                    <td width="41">
                                        <div align="center"><img src="images/icon_right_arrow.png" width="20"
                                                                 height="20"/><img src="images/icon_right_arrow.png"
                                                                                   width="20" height="20"/></div>
                                    </td>
                                    <td width="77">
                                        <div align="center"><img src="images/addedit.png" width="41" height="34"/><br/>
                                            Add About Us
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
                            <div align="left" bgcolor="#d8d8d8"><h3>Insert New Board Member</h3></div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#F1F3F5">
                            <form action="controlers/aboutuscontroler.php?mode=add_aboutus" method="post"
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
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td width="15%">Title</td>
                                        <td width="1%">:</td>
                                        <td><select name="cmb_title" id="cmb_title">
                                                <option value="select">Select>></option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Rev.">Rev.</option>
                                                <option value="Atty.">Atty.</option>
                                                <option value="Drs.">Drs.</option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Engr.">Engr.</option>
                                                <option value="Prof.">Prof.</option>
                                                <option value="Asst. Prof.">Asst. Prof.</option>
                                                <option value="Assoc. Prof.">Assoc. Prof.</option>
                                                <option value="Maj. Gen.">Maj. Gen.</option>
                                                <option value="Other">Other.</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Name</td>
                                        <td>:</td>
                                        <td><input name="txtname" type="text" id="txtname" size="50"/></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Post</td>
                                        <td>:</td>
                                        <td><label>
                                                <input name="txtpost" type="text" id="txtpost" size="30"/>
                                            </label></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Image</td>
                                        <td>:</td>
                                        <td><input type="file" name="txtimg" id="txtimg"/></td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td valign="top">Society name</td>
                                        <td valign="top">:</td>
                                        <td><input name="cmbsociety" type="text" id="cmbsociety" size="40"/></td>
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
                                                    for ($a; $a < count($country); $a++) {
                                                        $row = each($country);

                                                        ?>
                                                        <option
                                                            value="<?php echo $row["value"]["country_id"]; ?>"><?php echo $row["value"]["country_name"]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </label></td>
                                    </tr>

                                    
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Categary</td>
                                        <td>:</td>
                                        <td><select name="cmbcatagary" id="cmbcatagary">
                                                <option value="select" selected="selected">Select>></option>
                                                <option value="bod">Board of Directors</option>
                                                <option value="Staff">Staff</option>
                                                <option value="ps">Project Staff</option>
                                                <option value="ALMI">ALMI</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Project</td>
                                        <td>:</td>
                                        <td><select name="cmbprojects" id="cmbprojects" required>
                                                <option value="select" selected="selected">Select>></option>
                                                <?php
                                                $projects= AboutUS:: getProjects();
                                                for ($i; $i < count($projects); $i++) {
                                                        $row = each($projects);
                                                ?>
                                                <option
                                                            value="<?php echo $row["value"]["id"]; ?>"><?php echo $row["value"]["project_name"]; ?></option>
                                                <?php } ?>
                                            </select>
                                            If new projecct <input type="text" value="" id="new_project" name="new_project" size="40"></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>position</td>
                                        <td>:</td>
                                        <td><select name="cmb_position_no" id="cmb_position_no" required>
                                                <option value="select">Select>></option>
                                                <?php
                                                for ($a = 1; $a <= 30; $a++) {
                                                    echo "<option value=\" " . $a . "\">" . $a . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Description</td>
                                        <td>:</td>
                                        <td><textarea rows="20" cols="80" name="description"></textarea></td>
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
                                                <input name="btn_add" type="submit" class="button" value="     Add    "
                                                       id="btn_add"/>
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
