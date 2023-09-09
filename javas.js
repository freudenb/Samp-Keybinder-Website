

function getdata(htu,a){

var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest(htu);
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange=function()
  {
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("content").innerHTML=xmlhttp.responseText;
    }
  }
if(a == 'g')
{
	xmlhttp.open("GET","getData_ger.php?q="+htu,true);
}
else
{
	xmlhttp.open("GET","getData.php?q="+htu,true);
} 
xmlhttp.send();
}





function createLink(){
var getString = '';
for(var i = 0; i < 24; i++)
{
		var cmd = document.getElementById(i+"_cmd");
		var key1 = document.getElementById(i+"_key1");
		var key2 = document.getElementById(i+"_key2");
		// checken ob alles ok
		
		var replacer = new RegExp(" ","g");
	
		cmd.value = cmd.value.replace(replacer,"_");
		var key2str = key2.value;
		if(key2.value.length == 0)
		{
			key2str = "-1";
		}	
		getString+= i+"_cmd="+cmd.value+"&"+i+"_key1="+key1.value+"&"+i+"_key2="+key2str+"&";
		
}
if(document.getElementById("name").value.length < 3)
{
	alert("Keyset Name: minimum 3 letters!");
	return false;
}

var replacer = new RegExp(" ","g");
var name = document.getElementById("name").value;
name = name.replace(replacer,"_");
getString+= "name="+name;


document.getElementById("content").innerHTML= "<img style='margin-top:50px' src='images/loading.gif'></img>";
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  var htu = 'shareKeybinds'
  xmlhttp=new XMLHttpRequest(htu);
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange=function()
  {
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("content").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET","createLink.php?"+getString,true);
xmlhttp.send();

}





