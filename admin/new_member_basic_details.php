<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_PATH.'classes/country.class.php');
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
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
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
      <table width="315" border="0" cellpadding="2" cellspacing="2">
        <tr>
          <td width="80" height="84"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
          </a><span class="txt_ash">Home</span></div></td>
          <td width="43"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="62"><div align="center"><a href="member.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/user2.png',1)"><img src="images/usrgroups.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Member </span> </div></td>
          <td width="40"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="58"><div align="center"><img src="images/help_f2.png" /><br />
            New Member </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist"><h3>New Member Profile -&gt;&gt; Basic Details</h3></td>
        </tr>
        <tr>
          <td bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" enctype="multipart/form-data" action="controlers/membercontroler.php?mode=rgister_basic">
          <div class="container">
              <div class="row">
                <h6 style="color:#A52A2A"><?php include(ADMIN_MESSAGES.'member.message.php'); ?></h6>
              </div>
              <?php
        
         $member_type     =isset($_GET['member_type'])?$_GET['member_type']:'';
         $member_name       =isset($_GET['member_name'])?$_GET['member_name']:'';
         $member_abbrevation=isset($_GET['member_abbrevation'])?$_GET['member_abbrevation']:'';
         $member_signature  =isset($_GET['member_signature'])?$_GET['member_signature']:'';
         $country_Name      =isset($_GET['member_signature'])?$_GET['member_signature']:'';
         $URL           =isset($_GET['URL'])?$_GET['URL']:'';
         $email           =isset($_GET['email'])?$_GET['email']:'';
         $active        =isset($_GET['active'])?$_GET['active']:'';
        ?>
            
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Member Type :<span class="style1">*</span>:</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><select class="txt_boxes" name="cmb_member_type" id="cmb_member_type" >
                <option id="Select" value="Select" selected="selected">Select>></option>
                <option id="Regular_Members" value="1" <?php if($member_type==1){echo "selected=\"selected\" ";}?>>Regular Members</option>
                <option id="Associate_Members" value="2" <?php if($member_type==2){echo "selected=\"selected\" ";}?>>Associate Members</option>
                <option id="Affiliate_Member" value="3" <?php if($member_type==3){echo "selected=\"selected\" ";}?>>Affiliate Member</option>
                <option id="Supporter_Members" value="4" <?php if($member_type==4){echo "selected=\"selected\" ";}?>>Supporter Members</option>
                <option id="Development Partners" value="5" <?php if($member_type==3){echo "selected=\"selected\" ";}?>>Development Partners</option>
                <option id="Strategic Partners" value="6" <?php if($member_type==4){echo "selected=\"selected\" ";}?>>Strategic Partners</option>
                </select></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Member Name :<span class="style1">*</span>:</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_member_name" type="text" id="txt_member_name" size="50" value="<?php echo $member_name;?>" /></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Member Abbrevation :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_member_abbrevation" type="text" id="txt_member_abbrevation" size="20" value="<?php echo $member_abbrevation;?>" /></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Member Logo :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="up_member_signature" type="file" id="up_member_signature" value="<?php echo $_POST['up_member_signature'];?>" /></div>
                </div>

              </div>
              </br>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Country :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><select name="cmb_countryName" id="cmb_countryName">
                  <option value="0">Select Country Name</option>
                  <?php 
            $country = Country :: GetCountry();
            for($a=0;$a<count($country);$a++){
            $row = each($country); 
            
            ?>
                  <option value="<?php echo $row["value"]["country_id"];  ?>"><?php echo $row["value"]["country_name"];  ?></option>
                  <?php } ?>
                </select></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">URL :</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_URL" type="text" id="txt_URL" size="30" value="<?php echo $URL;?>" /></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">e-mail <span class="style1">*</span>:</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><input name="txt_email" type="text" id="txt_email" size="30" value="<?php echo $email;?>" /></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <div class="pull-right">Active <span class="style1">*</span>:</div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left"><select name="cmb_active" class="txt_boxes" id="cmb_active">
                  <option id="Select" value="Select" selected="selected">Select>></option>  
                  <option id="Yes" value="1" <?php if($active==1){echo "selected=\"selected\" ";}?>>Yes</option>
                  <option id="No" value="2" <?php if($active==2){echo "selected=\"selected\" ";}?>>No</option>
                </select></div>
                </div>
              </div>
            </br>
              <div class="row" >
                <div class="col-sm-6 text-right">
                  <div class="pull-right"><input name="btn_add" type="submit" class="button" value="    Add    " id="btn_add" onclick="reload();" /></div>
                </div>
                <div class="col-sm-6">
                  <div class="pull-left">
                    <input name="btn_cancel" type="button" class="button" value="   Cancel   " onclick="window.location.href='member.php'" id="btn_cancel" /></div>
                </div>
              </div>

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
