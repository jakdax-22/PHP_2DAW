<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
	//Estructura de control de flujo if	
	$nota1 = 9;
	$nota2 = 8;
	$nota3 = 5;
	
	if ($nota1 >= 5){
		echo "Nota 1 aprobada";
	}
	echo "<br>";
	if ($nota2 != 0):
		echo "La nota 2 es distinta de 0 <br>";
	endif;
	if ($nota3 == 5){
		echo "Dentro del primer if <br>";
		if ($nota2 < 9){
			echo "Dentro del segundo if <br>";
		}
	}
	
	if ($nota1 >= 5 && $nota2 >= 5){
		echo "Curso aprobado";
	}
	?>
</body>
</html>