<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//"Estructura de control de flujo do while"
		
		$valor = 10;
		
		while ($valor != 10){
			echo "Dentro del while";
		}
		
		do {
			echo "Dentro del do while";
		}
		while ($valor != 10);
	?>
</body>
</html>