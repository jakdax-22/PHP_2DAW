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
		$encontrado = false;
		$conn = mysqli_connect($servidor,$usuario,$pass) or die("Error de conexión");
		mysqli_select_db($conn,"usuarios");
		
		$consultar = "SELECT nombre FROM clientes";
		
		$registros = mysqli_query($conn,$consultar);
		
		while ($registro=mysqli_fetch_row($registros)){
			echo "Nombre: " . $registro[0]. "<br>";
			if ($registro[0] == $minombre){
				$encontrado = true;
			}
		}
		if ($encontrado){
			$sql = "DELETE FROM clientes WHERE nombre = '$minombre'";
			mysqli_query($conn,$sql);
			echo $minombre . " borrado de la BD";
		}	
		
		else {
			echo $minombre . " no se encuentra en la BD";
		}
		
	?>
</pre>
</body>
</html>