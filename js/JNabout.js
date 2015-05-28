/*
Program: JNabout.js
Purpose: database functions
Author: Jacob Naiyeju
Last Updated: 2014-03-02
*/

function displayAbout(){
	var htmlString='<script src="local:///chrome/webworks.js" type="'
	+ 'text/javascript" ></script>';
	
	$("#aboutUsScript").html(htmlString);
	
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","config.xml",false);
	xmlhttp.send();
	xmlDoc=xmlhttp.responseXML;
	txtname=xmlDoc.getElementsByTagName("name")[0].childNodes[0].nodeValue;
	txtauthor=xmlDoc.getElementsByTagName("author")[0].childNodes[0].nodeValue;
	txtversion=xmlDoc.getElementsByTagName("feature")[0].getAttribute("version");
	
	var info='<p class="'
	+'formatInfo">Name: '+txtname+'</p>'
	+'<p class="'
	+'formatInfo">Author: '+txtauthor+'</p>'
	+'<p class="'
	+'formatInfo">Version: '+txtversion+'</p>';
	
	$("#info").html(info);
	
	
}
