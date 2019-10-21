<?php
require_once('../config/config.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'page.class.php');

$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;

switch( $mode)
{
	case 'update' :
	
	$page_id	=	isset( $_POST['page_id'])?$_POST['page_id']:$page_id;
	$lang	=	isset( $_POST['lang'])?$_POST['lang']:$lang;
	$title	=	isset( $_POST['title'])?$_POST['title']:$title;
	$content	=	isset( $_POST['content'])?$_POST['content']:$content;
	
	if ( get_magic_quotes_gpc() )
		$content = htmlspecialchars( addslashes( $content ) ) ;
	else
		$content = htmlspecialchars( $content ) ;
	
	$updateResult = Page::EditPage($page_id,$content,$title,$lang);
	
	if($updateResult==true)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../page_manager.php?msg=8');</script>";
	elseif($updateResult==false)
	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../page_manager.php?msg=9');</script>";
	
	break;
	
}	
?>