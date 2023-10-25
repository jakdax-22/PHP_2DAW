<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//Funciones de redondeo de números
		echo (round(0.60)."<br>");
		echo (round(0.50)."<br>");
		echo (round(0.49)."<br>");
		echo (round(-4.40)."<br>");
		echo (round(-4.60)."<br>");
		echo (round(4.95954,2)."<br>");
		
		echo (round(1.5,0,PHP_ROUND_HALF_UP)."<br>");
		echo (round(1.5,0,PHP_ROUND_HALF_EVEN)."<br>");
		
		echo (ceil(0.60)."<br>");
		echo (ceil(0.40)."<br>");
		echo (ceil(5)."<br>");
		echo (ceil(5.1)."<br>");
		
		echo (floor(0.60)."<br>");
		echo (floor(0.40)."<br>");
		echo (floor(5)."<br>");
		echo (floor(5.1)."<br>");
		
	?>
</body>
</html>