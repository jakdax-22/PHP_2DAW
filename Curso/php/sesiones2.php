<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		session_start();
		
		$_SESSION['iniciada'] = true;
		$_SESSION['nombre'] = "Enrique";
		$_SESSION ['edad'] = 22;
		
		echo "identificador de la sesión: ".session_id();
		echo "<br>";
		echo "Nombre de la sesión: ".session_name();
		echo "<br>";
		
		echo "Nombre: ". $_SESSION['nombre'] ."<br>";
		echo "Edad: ". $_SESSION['edad'] ."<br>";
		
		echo "<a href='sesion3.php'>Comprobar las variables en otra web </a>";
		echo "<br>";
		echo "<a href='sesion4.php'>Finalizar la sesión </a>";
		echo "<br>";
		
	?>
</body>
</html>