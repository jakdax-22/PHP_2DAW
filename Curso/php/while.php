<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
	//Estructura de control de flujo while
	
	$num = 0;
	$respuesta = "Oporto";
	
	while ($num <= 10){
		echo $num."<br>";
		$num++;
	}
	
	while ($respuesta != "Lisboa"){
		echo "Intento ". $intentos;
		if ($intento == 3){
			$respuesta = "Lisboa";
		}
		$intentos++;
	}
	?>
</body>
</html>