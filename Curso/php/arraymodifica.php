<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<pre>
		<?php
			//Funciones para modificar arrays 
			
			$frutas = ["naranja","platano","manzana","frambuesa"];
			
			print_r ($frutas);
			echo "<br>";
			
			$eliminado = array_pop($frutas);
			echo $eliminado . "<br>";
			print_r ($frutas);
			echo "<br>";
			
			array_push ($frutas, "pera");
			print_r ($frutas);
			
			/*$eliminado = array_shift ($frutas);
			echo $eliminado ."<br>";
			print_r ($frutas);
			
			array_unshift ($frutas,"pera");
			echo "<br>";
			print_r ($frutas);*/
		?>
	</pre>
</body>
</html>