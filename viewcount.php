<html>
<head>

<title>SA-MP Keybinder: DOWNLOADS</title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<script type='text/javascript'>
var xmlhttp;

function init(){
	refresh();
	window.setInterval(function(){refresh()},1000*60);
}


function refresh(){


if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
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

	xmlhttp.open("GET","count.php",true);
	
xmlhttp.send();
}

</script>
<style type="text/css">
body {background-color:lightblue;}
hr {
	border: 0;
	color: black;
	background-color: black;
	height: 1px;
}
p{

	color:black;
	font-weight:bold;
	font-size:40pt;
	font-family:verdana;
}

h2{

	font-family:verdana;
}

div{

	width:200px;
	margin-left:auto;
	margin-right:auto;
	
}
</style>
</head>
<body onload='init();'>
<div><h2>Downloads</h2></div>
<div id='content'></div>
<div><button type="button" name='Refresh' value='refresh' onclick='refresh();'>Refresh</button></div>
</body>
</html>