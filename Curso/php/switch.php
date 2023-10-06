<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
	//Estructura de control de flujo switch
	
	$dia = 32;
	switch ($dia){
		case 1:
			echo "Lunes";
		break;
		case 2:
			echo "Martes";
		break;
		case 3:
			echo "Miércoles";
		break;
		case 4:
			echo "Jueves";
		break;
		case 5:
			echo "Viernes";
		break;
		case 6:
			echo "Sábado";
		break;
		case 7:
			echo "Domingo";
		break;
		default:
			echo"Día incorrecto";
	}
	
	$diasemana = "Miércoles";
	
	switch ($diasemana){
		case "LUNES":
			echo 1;
		break;
		case "MARTES":
			echo 2;
		break;
		case "Miércoles":
			echo 3;
	}
	?>
</body>
</html>