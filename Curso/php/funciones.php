<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//Funciones
		
		$numero1 = 5;
		$numero2 = 10;
		
		function sumar () {
			echo "Soy una función para sumar";
		}
		
		sumar ();
		
		function sumarnumeros ($num1, $num2){
			echo "<br>".$num1 + $num2;
		}
		sumarnumeros ($numero1,4);
		
		function sumarnumerosretorno ($num1,$num2){
			return $num1 + $num2;
		}
		$resultado = sumarnumerosretorno ($numero1,$numero2);
		echo "<br>".$resultado;
	?>
</body>
</html>