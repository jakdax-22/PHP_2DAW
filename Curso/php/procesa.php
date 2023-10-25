<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		if (isset($_POST['usuario'])){
			if (!empty($_POST['usuario'])){
				echo ("El nombre del usuario es: ").$_POST['usuario'];
			}
		}
		if (isset($_POST['password'])){
			if (!empty($_POST['password'])){
				echo ("La contraseña del usuario es: ").$_POST['password'];
			}
		}
	?>
</body>
</html>