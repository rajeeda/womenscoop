<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
$member_id =isset($_GET['member_id'])?$_GET['member_id']:'';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
<script language="JavaScript" type="text/JavaScript">
<!--
function reload()
{	
	//document.write("In reload");
	var val_member_name=document.form1.txt_member_name.value ;
	var val_member_abbrevation=document.form1.txt_member_abbrevation.value ;
	var val_member_signature=document.form1.up_member_signature.value ;
	var val_URL=document.form1.txt_URL.value ;
	var val_email=document.form1.txt_email.value ;
	var val_active=document.form1.cmb_active.value ;
	
	
	self.location='new_member_basic_details.php?member_name=' + val_member_name + '&member_abbrevation=' + val_member_abbrevation + '&member_signature=' + val_member_signature + '&URL=' + val_URL+ '&email=' + val_email + '&active=' + val_active;
}



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
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
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
      <table width="300" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="50" height="84"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
          </a><span class="txt_ash">Home</span></div></td>
          <td width="41"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="81"><div align="center"><a href="member.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/user2.png',1)"><img src="images/user.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Member Manager</span> </div></td>
          <td width="41"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="52"><div align="center"><img src="images/support.png" /><br />
            Edit Member </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td valign="middle" bgcolor="#d8d8d8" class="adminlist"><div><h3>New Member Profile --&gt;&gt; Contact person</h3></div></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" enctype="multipart/form-data" action="controlers/membercontroler.php?mode=add_contactperson&member_id=<?php echo $member_id;?>">
          
          <div class="container">
              <div class="row">
                <h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES.'member.message.php'); ?></h6>
              </div>
              <?php
      

        // echo $contact_array=isset($_GET['contact_array'])?$_GET['contact_array']:'';
        // $contact_array=$_GET['contact_array'];
         
         
         //$Street1     =isset($contact_array)?foreach($member_contact_array as $contact_array){$member_contact_array[0];}:'';
         $Street1     =isset($_GET['street1'])?$_GET['street1']:'';
         $Street2       =isset($_GET['Street2'])?$_GET['Street2']:'';
         $City      =isset($_GET['City'])?$_GET['City']:'';
         $Province    =isset($_GET['Province'])?$_GET['Province']:'';
         $Postal_Code   =isset($_GET['Postal_Code'])?$_GET['Postal_Code']:'';
         $Phone_No    =isset($_GET['Phone_No'])?$_GET['Phone_No']:'';
         $Fax_No    =isset($_GET['Fax_No'])?$_GET['Fax_No']:'';
         
         
         //foreach($member_contact_array as $_GET['contact_array'])
         {
         //$member_contact_array  = explode("|",$contact_array);contact_array
         //$member_staff_id = $each_staff_rec['0'];
        ?>
            
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Title :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><select name="cmb_title" id="cmb_title">
                  <option value="select" selected="selected">Select&gt;&gt;</option>
                  <option value="Mr.">Mr.</option>
                  <option value="Miss.">Miss.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Mrs.">Mrs.</option>
                  <option value="Rev.">Rev.</option>
                  <option value="Dr.">Dr.</option>
                  <option value="Prof.">Prof.</option>
                  <option value="Assoc.Prof.">Assoc.Prof.</option>
                  <option value="Asst.Prof.">Asst.Prof.</option>
                  <option value="Other">Other</option>
                                                </select></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Name :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_name" type="text" id="txt_name" size="50" /></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">post :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_post" type="text" id="txt_post" size="40" /></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Address :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><textarea name="txt_address" cols="40" id="txt_address" size="40"></textarea></div>
                </div>

              </div>
              </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Telephone :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_telephone" type="text" id="txt_telephone" size="40" /></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Fax :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_Postal_fax" type="text" id="txt_Postal_fax" size="25" /></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">e-mail :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_email" type="text" id="txt_email" size="25" /></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Web site :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_url" type="text" id="txt_url" size="25" /><input type="hidden" name="hdn_member_id" id="hdn_member_id" value="<?php echo $member_id;?>" /></div>
                </div>
              </div>
            </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right"><input name="btn_add" type="submit" class="button" value="     Add     " id="btn_add" onclick="reload();" /></div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left">
                    <input name="btn_cancel" type="button" class="button" value="   Next   " onclick="window.location.href='new_regulater.php?member_id=<?php echo $member_id; ?>'" id="btn_cancel" /></div>
                </div>
              </div>
              <?php }?>
            </div>

          </form></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td class="adminlist">&nbsp;</td>
  </tr>
  <tr>
    <td><center><?php include (ADMIN_TPL_PATH.'footer.tpl');?></center></td>
  </tr>
</table>
</body>
</html>
