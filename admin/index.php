<?php
require_once('config/config.php');
if(isset($_SESSION['adminid']))
{
	session_unset();
	session_destroy();	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel - Login</title>
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link id="Boostrap" type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"  />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><div align="center" id="login">
      <table width="430" height="22" border="0" cellpadding="0" cellspacing="0" bordercolor="#d8d8d8">
        <tr>
                  <td><div>&nbsp;</div></td>
                </tr>
        <tr>

          <td bgcolor="#d8d8d8" style="padding:15px"><table width="100%" border="0" cellspacing="2" cellpadding="2">
            <tr>
              <td width="40%" valign="top">
                <img src="images/security.png" width="64" height="64" />
                <p>Welcome to Site</p>
                <p>Use a valid username and password to gain access to the administration panel.</p> 
				</td>
              <td width="60%" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                <tr>
                  <td><div id="login_title">Login</div></td>
                </tr>
                
                <tr>
                  <td><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
                    <tr>
                      <td bgcolor="#E9ECEF"><div align="left" style="margin-left:5px; margin-right:5px;"><form action="controlers/admincontroler.php?mode=login" method="post"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                        <tr>
                          <td><div id="error"><h6 style="color:#A52A2A"><?php include(ADMIN_PATH.'messages.php');?></h6></div></td>
                        </tr>
                        <tr>
                          <td><div id="lable">Username:</div></td>
                        </tr>
                        <tr>
                          <td><label>
                            <input name="user" type="text" class="form-control login_boxes" id="user"/>
                          </label></td>
                        </tr>
                        <tr>
                          <td><div id="lable">Password:</div></td>
                        </tr>
                        <tr>
                          <td><label>
                            <input name="pass" type="password" class="form-control login_boxes" id="pass" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><label>
                            <input class="btn btn-secondary button" type="submit" name="Submit" value="Login" />
                          </label></td>
                        </tr>
                      </table>
                      </form></div></td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>

    <td><center><?php include (ADMIN_TPL_PATH.'footer.tpl');?></center></td>
  </tr>
</table>

</body>
</html>
