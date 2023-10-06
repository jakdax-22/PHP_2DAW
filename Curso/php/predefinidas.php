<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//Predefinidas
		
		$numero = 33;
		
		echo "Nombre del servidor ". $_SERVER['SERVER_NAME'];
		echo "<br>";
		echo "Software del servidor ". $_SERVER['SERVER_SOFTWARE'];
		echo "<br>";
		echo "Puerto del servidor ". $_SERVER['SERVER_PORT'];
		echo "<br>";
		echo "La variable número es: ". $GLOBALS['numero'];
	?>
</body>
</html>