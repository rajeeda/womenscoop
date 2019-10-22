<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/background.gif">
  <tr>
    <td width="44%" height="41">
   <div id="header_title">Admin Panel</div>
    </td>
    <td width="56%" valign="top"><div align="right"><img src="images/header_blue.jpg" width="552" height="38" /></div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td class="txt_bigblack" height="30" style="background-image:url(images/bg.gif); background-repeat:repeat-x;"><div align="left" style="margin-left:10px; margin-right:10px;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><div id="header_version">Version 1.0</div></td>
          <td width="25%">
          <div id="header_logout" align="right">
          <?php	
		   if(isset($_SESSION['adminid'])) { ?><a href="controlers/admincontroler.php?mode=logout">Logout</a> Admin 
          </div>
          <?php } else { echo "&nbsp;";}?>
          </td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  
  
  
</table>

