<?php
echo "<hr></hr>";
$myFile = "downloads.txt";
$fh = fopen($myFile, 'r');
$i = 0;
while(($line = fgets($fh, 4096)) != false ){
	echo "<div><p>".$line."</p></div>";
	$i++;
	if($i%4 == 0){
		echo "<hr></hr>";
	}
}
fclose($fh);



?>