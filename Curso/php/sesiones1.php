<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<pre>
	<?php
		//Trabajando con sesiones
		
		session_id(22);
		echo session_id();
		echo "<br>";
		
		echo session_name();
		session_start();
		echo "<br>";
		
		$_SESSION['iniciada'] = true;
		$_SESSION['nombre'] = "Enrique";
		
		var_dump ($_SESSION);
		echo "<br>";
		echo "Nombre " . $_SESSION['nombre'];
		echo "<br>";
		
		unset ($_SESSION['nombre']);
		
		if (!isset($_SESSION['nombre'])){
			echo "El nombre no existe";
		}
		
		session_destroy();
	?>
</pre>
</body>
</html>