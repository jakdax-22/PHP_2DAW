<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//capturar las variables que se han propagado
		session_start();
		
		if (isset($_SESSION['iniciada'])){
			echo "identificador de la sesión: ".session_id();
			echo "<br>";
			echo "Nombre de la sesión: ".session_name();
			echo "<br>";
			
			echo "Nombre: ". $_SESSION['nombre'] ."<br>";
			echo "Edad: ". $_SESSION['edad'] ."<br>";
		}
		else {
			echo "No se ha definido la sesión";
		}
	?>
</body>
</html>