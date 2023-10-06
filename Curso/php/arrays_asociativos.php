<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
	//arrays asociativos
	
	$navegadores = array ("navegador1" => "Chrome", "navegador2" => "Firefox", "navegador3" => "Safari");
	$datos = array ("nombre" => "Enrique", "edad" => 39, "kike" => true);
	echo "Navegador 3: ". $navegadores['navegador3'];
	echo "<br>";
	echo "Nombre: " . $datos['nombre'];
	
	var_dump ($navegadores);
	echo "<br>";
	var_dump ($datos);
	
	?>
</body>
</html>