<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//Estructura de control de flujo foreach
		
		$array1 = [1,2,3,4];
		$valores = ["uno" => 1, "dos" => 2, "tres" => 3];
		
		foreach ($array1 as $valor){
			echo $valor."<br>";
		}
		foreach ($valores as $clave => $valor){
			echo $clave . " => " . $valor . "<br>";
		}
	?>
</body>
</html>