// JavaScript Document
var xmlHttp

function show_staff_member(str,member_id)
{  
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	 {
		 alert ("Browser does not support HTTP Request")
		 return
	 }
	var url="Staff_member_ajax.php"
	url=url+"?q="+str
	url=url+"&r="+member_id
	url=url+"&sid="+Math.random()
	xmlHttp.onreadystatechange=stateChanged 
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}

function stateChanged() 
{ 
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	 { 
	 document.getElementById("txtHint").innerHTML=xmlHttp.responseText 
	 } 
}
function GetXmlHttpObject()
{
	var xmlHttp=null;
	try
	 {
	 // Firefox, Opera 8.0+, Safari
	 xmlHttp=new XMLHttpRequest();
	 }
	catch (e)
	 {
	 //Internet Explorer
	 try
	  {
	  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
	  }
	 catch (e)
	  {
	  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	 }
	return xmlHttp;
}