<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once('classes/accu_forum.class.php');

include(ADMIN_PATH.'FCKeditor/fckeditor.php') ;

$question_id = isset($_GET['qid'])?$_GET['qid']:$_GET['qid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script language="JavaScript" type="text/JavaScript" src="scripts/deleteconfirmations.js">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('images/frontpage2.png','images/user2.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="64%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="36%"><div id="content">
      <table border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="48"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
          </a><span class="txt_ash">Home</span></div></td>
          <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="48"><div align="center"><a href="accu_forum_question.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/user2.png',1)"><img src="images/resource_forum.gif" alt="User Manager" name="Image5" width="37" height="42" border="0" id="Image5" /></a><br />
            Forum Questions</div></td>
          <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="65"><div align="center"><img src="images/generic.png" width="48" height="48" /><br />
            Edit Question</div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#F1F3F5"><?php
			$acuu_forum_question = Accu_Forum :: GetQuectionById($question_id);
			if(count($acuu_forum_question)==0)
			{
				echo '<div id="error">Invalid Operation!!!</div>';
			}
			else
			{
			?></td>
        </tr>
        <tr>
            <td colspan="4" class="adminlist" bgcolor="#d8d8d8"><h3>Edit Forum Question</h3></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5"><form action="controlers/accu_forum_controler.php?mode=edit_question" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <table width="95%" border="0" align="center" >
          <tr>
            <td colspan="3">
                 <table class="tborder" cellpadding="6" cellspacing="1" border="0" width="100%" align="center">
  <tr>
    <td class="" width="100%"><div id="error"><h6 style="color:#A52A2A"><?php include('messages/forum.message.php'); ?></h6></div></td>
  </tr>
</table></td>
          </tr>
          <tr>
            <td colspan="3"></td>
          </tr>
          <tr>
            <td colspan="3"><table class="imgBox" cellpadding="6" cellspacing="1" border="0" width="77%" align="center">
              <tr>
                <td height="30" class="nn_text">Title</td>
                <td>&nbsp;</td>
                <td class="nn_text"><input type="hidden" name="hdn_q_id" id="hdn_q_id" value="<?php echo $acuu_forum_question['question_id'];?>"></td>
                </tr>
              <tr>
                <td height="30" colspan="3" class="nn_text"><span id="sprytextfield1">
                  <input name="txt_forum_title" type="text" id="txt_forum_title" size="60" value="<?php echo $acuu_forum_question['question'];?>"/>
                  <span class="textfieldRequiredMsg">*</span></span></td>
                </tr>
              <tr>
                <td height="30" class="nn_text">short message</td>
                <td>&nbsp;</td>
                <td class="nn_text">&nbsp;</td>
              </tr>
              <tr>
                <td height="30" colspan="3" class="nn_text"><span id="sprytextarea1">
                  <textarea name="txa_short_message" id="txa_short_message" cols="45" rows="3"><?php echo $acuu_forum_question['short_desc'];?></textarea>
                  <span class="textareaRequiredMsg">*.</span></span></td>
                </tr>
              <tr>
                <td width="33%" height="30" class="nn_text">Message</td>
                <td width="3%">&nbsp;</td>
                <td width="64%" class="nn_text">&nbsp;</td>
                </tr>
              <tr>
                <td height="30" colspan="3" valign="top" class="nn_text">
                  <div style="padding:5px 0px 5px 0px;">
                    <?php
					$oFCKeditor = new FCKeditor('question_msg') ;
					$oFCKeditor->BasePath = 'FCKeditor/';
					$oFCKeditor->Height = "200" ;
					$oFCKeditor->Value = html_entity_decode (stripslashes ($acuu_forum_question['question_desc']));
					$oFCKeditor->Create() ;
				?>
                    </div>
                  </td>
              </tr>
              <tr>
                <td height="30" colspan="3" class="nn_text">
                <table width="100%" border="0">
                  <tr>
                    <td width="7%" valign="top" class="nn_text">Name</td>
                    <td width="2%" valign="top">:</td>
                    <td width="23%" valign="top"><span id="sprytextfield2">
                      <input type="text" name="txt_name" id="txt_name" value="<?php echo $acuu_forum_question['pname'];?>"/>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    <td width="9%" valign="top" class="nn_text">Country</td>
                    <td width="2%" valign="top">:</td>
                    <td width="28%" valign="top">
                    <select name="cmb_countryName" id="cmb_countryName">
                    <option value="0">Select Country Name</option>
                    <?php 
						$country = Accu_Forum :: GetCountry();
						for($a=0;$a<count($country);$a++){
						$row = each($country); 
						
						?>
                    <option value="<?php echo $row['value']['country_name'];?>"/>                  
                    <?php echo $row['value']['country_name'];?>
                    <?php } ?>
                  </select>
                    </td>
                    <td width="6%" valign="top" class="nn_text">E mail</td>
                    <td width="23%" valign="top"><span id="sprytextfield3">
                    <input type="text" name="txt_email" id="txt_email" value="<?php echo $acuu_forum_question['email'];?>"/>
                    <span class="textfieldRequiredMsg">*</span><span class="textfieldInvalidFormatMsg">*</span></span></td>
                  </tr>
                  </table>
                </td>
                </tr>
              <tr>
                <td height="30" class="nn_text">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              </table></td>
          </tr>
          <tr>
            <td width="5%">&nbsp;</td>
            <td width="49%">&nbsp;</td>
            <td width="46%"><label>
              <input type="submit" name="btn_submit" id="btn_submit" value="      Submit      ">
              </label></td>
          </tr>
        </table>
            
          </form></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5" class="adminlist">&nbsp;</td>
        </tr>
        <?php } ?>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><center><?php include (ADMIN_TPL_PATH.'footer.tpl');?></center></td>
  </tr>
</table>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
//-->
</script>
</body>
</html>
