<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//Funciones variadas de arrays
		
		$frutas = ["naranja","platano","manzana","frambuesa"];
		
		$elementos = count($frutas);
		echo $elementos."<br>";
		
		$actual = current ($frutas);
		echo $actual;
		echo "<br>";
		
		end ($frutas);
		$actual = current ($frutas);
		echo $actual;
		echo "<br>";
		
		reset ($frutas);
		
		$meses = [0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril"];
		
		$clave = array_search("Junio",$meses);
		
		if ($clave){
			echo $clave . " " .$meses[$clave];
		}
		else {
			echo "Elemento no encontrado";
		}
		
	?>
</body>
</html>