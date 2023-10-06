<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<pre>
		<?php
			//Funciones para comparar arrays
			
			$numeros1 = [11,22,33];
			$numeros2 = [11,33,55];
			
			$colores1 = ["color1" => "rojo", "color2" => "verde", "color3" => "azul", "color4" => "naranja"];
			$colores2 = ["color1" => "verde", "color2" => "azul", "color3" => "amarillo"];
		
			$diferencias1 = array_diff ($numeros1,$numeros2);
			$diferencias2 = array_diff ($colores1,$colores2);
			
			print_r ($diferencias1);
			echo "<br>";
			print_r ($diferencias2);
			
		?>
	</pre>
</body>
</html>