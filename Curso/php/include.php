<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//include
		echo "Soy el primer fichero";
		echo "<br>";
		include "include2.php";
		echo $hola;
		echo "<br>";
		include "include2.php";
	?>
</body>
</html>