<html>
<head>
<style type="text/css">
body {background-color:lightblue;}
hr {
	border: 0;
	color: black;
	background-color: black;
	height: 1px;
}
</style>
</head>
<body>
<h2>Downloadhistory</h2>
<?php
echo "<hr></hr>";
$myFile = "downloader.txt";
$fh = fopen($myFile, 'r');
$i = 0;
while(($line = fgets($fh, 4096)) != false ){
	echo "<p>".$line."</p>";
	$i++;
	if($i%4 == 0){
		echo "<hr></hr>";
	}
}
fclose($fh);



?>

</body>
</html>