<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
	<pre>
		<?php
			//Arrays y ordenación
			$dias = ["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
			
			/*print_r ($dias);
			echo "<br>";
			
			//sort ($dias);
			asort ($dias);
			print_r ($dias);
			echo "<br>";*/
			
			$numeros = array (10,11,8,103,99,54);
			$nombres = ["Enrique" => "29", "Patricia" => "18", "Emilio" => "26"];
			print_r ($nombres);
			echo "<br>";
			ksort ($nombres);
			print_r ($nombres);
			
		?>
	</pre>
</body>
</html>