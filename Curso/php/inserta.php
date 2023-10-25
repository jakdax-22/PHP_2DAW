<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<pre>
	<?php
		$minombre = $_GET['nombre'];
		
		$servidor = "localhost";
		$usuario = "root";
		$pass = "root";
		
		$conn = mysqli_connect($servidor,$usuario,$pass) or die("Error de conexión");
		mysqli_select_db($conn,"usuarios");
		
		$insertar = "INSERT INTO clientes (nombre) VALUES ('$minombre')";
		mysqli_query($conn,$insertar);
	?>
</pre>
</body>
</html>