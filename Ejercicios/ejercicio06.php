<?php
	// Crear un formulario que recoja 3 valores (los que sea) y envíe los valores a un documento para que los muestre por pantalla sin utilizar $_GET, $_POST ni $_REQUEST

	parse_str($_SERVER['QUERY_STRING'],$arr);
	echo $arr['primero']."<br>";
	echo $arr['segundo']."<br>";
	echo $arr['tercero']."<br>";
	
?>