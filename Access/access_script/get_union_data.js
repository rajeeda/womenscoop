
// JavaScript Document using AJAX
var xmlHttp

function showBroker(cu_id,year)
{
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
{
alert ("Browser does not support HTTP Request")
return
}
var url="./access_admin_summary_display.php"
url=url+"?id="+cu_id
url=url+"&y="+year
url=url+"&sid="+Math.random()

xmlHttp.onreadystatechange=stateChangedBro
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}

function stateChangedBro()
{
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{
document.getElementById("txtHint").innerHTML=xmlHttp.responseText
}
}

function showGen(cu_id,year)
{
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
{
alert ("Browser does not support HTTP Request")
return
}
var url="./access_admin_summary_display.php"
url=url+"?id="+cu_id
url=url+"&y="+year
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChangedGen
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}

function stateChangedGen()
{
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{
document.getElementById("txtHint").innerHTML=xmlHttp.responseText
}
}

function showNothing(cu_id,year)
{
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
{
alert ("Browser does not support HTTP Request")
return
}
var url="./access_admin_summary_display.php"
url=url+"?id="+cu_id
url=url+"&y="+year
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChangedGen
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}

function stateChangedGen()
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
