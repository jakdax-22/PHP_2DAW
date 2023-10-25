<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//destruir la sesión
		session_start();
		
		if (isset($_SESSION['iniciada'])){
			session_unset();
			session_destroy();
			if (isset($_SESSION['nombre'])){
				
			}
			else {
				echo "La variable de sesión nombre no está definida<br>";
			}
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