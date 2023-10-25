<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//Definir cookies propias
		
		setcookie("noexpira",1);
		
		//setcookie("micookie",2,time()+20);
		
		setcookie("idioma","esp");
		
		if (isset($_COOKIE['idioma']) && $_COOKIE['idioma'] === "esp"){
			echo "Se ha definido una cookie con el idioma en español";
		}
		
		setcookie("idioma","",time()-1);
		var_dump($_COOKIE);
	?>
</body>
</html>