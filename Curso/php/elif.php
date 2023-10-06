<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
	$valor1 = 2;
	$valor2 = 6;
	$dia = 4;
	
	//Estructura de flujo elseif
	
	if ($valor1 > $valor2){
		echo "$valor1 es mayor que $valor2 <br>";
	}
	elseif ($valor1 == $valor2){
		echo "$valor1 es igual que $valor2 <br>";
	}
	else {
		echo "$valor1 es menor que $valor2 <br>";
	}
	
	if ($dia == 1){
		echo "Es lunes";
	}
	
	elseif ($dia == 2) {
		echo "Es martes";
	}
	elseif ($dia == 3) {
		echo "Es miércoles";
	}
	?>
</body>
</html>