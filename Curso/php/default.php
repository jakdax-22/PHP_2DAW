<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		// Obtener y modificar la zona horaria
		echo "zona horaria" . date_default_timezone_get()."<br>";
		
		date_default_timezone_set("America/Los Angeles");
		echo date_default_timezone_get();
		
		
	?>
</body>
</html>