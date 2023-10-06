<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//Variables
		$edad = 35;
		$estatura = 1.67;
		$nombre = "Enrique Iranzo";
		$frase = "Enrique tiene $edad años";
		$frase2 = 'Enrique tiene $edad años';
		$profesor = false;
		
		echo $edad;
		echo "<br>";
		echo $estatura;		
		echo "<br>";
		echo "Tu nombre es ". $nombre;
		echo "<br>";
		echo json_encode($profesor);
	?>
</body>
</html>