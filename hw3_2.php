<?php
$factor = $_POST["factor"];
$break = "<br>";



?>

<!DOCTYPE html>
<html>
<body>
<h1>The James Times Table</h1>
<span><?php for ($multiplier = 0; $multiplier<=10; $multiplier=$multiplier + 1) {
	print "$factor x $multiplier = ";
	print $factor * $multiplier.$break; 
	} 
?></span>
</body>
</html>
