<?php 
include('../admin_01/FCKeditor/fckeditor.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
		$oFCKeditor = new FCKeditor('news_desc');
		$oFCKeditor->BasePath = 'FCKeditor/';
		$oFCKeditor->Height = "300";
		$oFCKeditor->Value = '';
		$oFCKeditor->Create();
	?>
</body>
</html>