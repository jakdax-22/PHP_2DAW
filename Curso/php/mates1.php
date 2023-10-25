<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//Funciones mates
		$edad = 22;
		$nota = 7.34;
		
		echo number_format ("1000000");
		echo "<br>";
		
		echo number_format ("1000000",2);
		echo "<br>";
		
		echo number_format ("1000000",2,",",".");
		
		/*if (is_int($edad)){
			echo "Edad es un entero <br>";
		}
		
		if (is_int($nota)){
			echo "Nota es un entero <br>";
		}
		elseif (is_float($nota)){
			echo "Nota es un número decimal <br>";
		}*/
	?>
</body>
</html>