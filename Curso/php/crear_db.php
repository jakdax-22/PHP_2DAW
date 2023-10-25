<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<pre>
	<?php
		$servidor = "localhost";
		$usuario = "root";
		$password = "root";
		
		$conexion = mysqli_connect($servidor,$usuario,$password);
		
		if (!$conexion){
			echo "conexion fallida";
		}
		else {
			$sql = "CREATE DATABASE usuarios";
			if (mysqli_query($conexion,$sql)){
				echo ("Base de datos creada con éxito");
			}
			else {
				echo ("error ". mysqli_error($conexion));
			}
			mysqli_select_db($conexion,"usuarios");
			$sql2 = "CREATE TABLE clientes (nombre VARCHAR(20))";
			mysqli_query($conexion,$sql2);
		}
	?>
</pre>
</body>
</html>