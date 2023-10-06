<?php
	echo "Tu dirección IP es: ", $_SERVER['SERVER_ADDR'],"<br>";
	echo "Tu ordenador tiene como nombre: ", $_ENV['COMPUTERNAME'] ,"<br>";
	echo "Utilizas como lenguaje: " , substr($_SERVER['SERVER_SOFTWARE'],22,3), "<br>";
	echo "Tu microprocesador es: ", $_ENV['PROCESSOR_IDENTIFIER'];
?>