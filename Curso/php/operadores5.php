<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//Operadores lógicos
		$num1 = 5;
		$num2 = 10;
		$num3 = 5;
		$activo1 = true;
		$activo2 = false;
		
		if ($num1 == 5 && $num1 == $num3){
			echo "Dentro del if";
		}
		echo "<br>";
		if ($num1 == 5 || $num1 == $num3){
			echo "Dentro del segundo if";
		}
		echo "<br>";
		if ($num1 == 5 xor $num1 == $num2){
			echo "Dentro del tercer if";
		}
		echo "<br>";
		if (!$activo1){
			echo "Dentro del cuarto if";
		}
	?>
</body>
</html>