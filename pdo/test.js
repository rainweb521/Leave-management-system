var xmlHttp
function showsimple()
{
	var cont=document.getElementById("searchtxt").value;
if (cont=="")
 { 
 alert('查询关键字不能为空');
 //document.getElementById("webpage").innerHTML=""
 return
 }
//获取xmlHttpObject对象，如果为空，提示浏览器不支持ajax
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 } 
 //获取url
var url="searchrst.php"
url=url+"?cont="+cont
url=url+"&sid="+Math.random()
 //回调函数，执行动作
xmlHttp.onreadystatechange=stateChanged 
 //open
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}
function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{ 
//将获取的信息插入到txtHint中
document.getElementById("webpage").innerHTML=xmlHttp.responseText 
} 
}

//获取xml对象
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
// Internet Explorer
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
}// JavaScript Document