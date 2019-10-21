<?php

if ($pa != 0) { 
	$back_page = $pa - $limit;
if($back_page<0){
	$back_page=0;
}
echo("<a class=\"link\" href=\"".$_SERVER["PHP_SELF"]."?pa=".$back_page."&limit=".$limit."\">Latest Events</a>\n");
echo " | ";
}

for ($i=1; $i <= $pages; $i++) 
{
 $ppage = $limit*($i - 1);
 if ($ppage == $pa)
 {
	 echo"<span>";
	 echo($i." \n");
	 echo"</span>";
	 if($pages!="1")
	 {
	 echo " | ";
	 }
 } 
 else
 {
	 echo("<a class=\"link\" href=\"".$_SERVER["PHP_SELF"]."?pa=".$ppage."&limit=".$limit."\">".$i."</a>\n");
	 echo " | ";	
	 	
 }
}

if (!((($pa+$limit) / $limit) >= $pages) && $pages != 1) 
{ 
	$next_page = $pa + $limit;
	echo("<a class=\"link\" href=\"".$_SERVER["PHP_SELF"]."?pa=".$next_page."&limit=".$limit."\">Past Events</a>\n");
}

?>
