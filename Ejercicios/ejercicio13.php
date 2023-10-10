<?php
	/* Crear una funcion a la que se le pase una cadena y un caracter, la función devolverá un booleano y fuera de la función
	mostrará la frase: "El caracter x está en la cadena x y aparece x veces"), en caso de devolver la cadena no está*/
	
	function contiene ($cadena,$caracter){
		for ($i = 0; $i < strlen($cadena); $i++){
			if ($cadena[$i] === $caracter)
				return true;
		}
		return false;
	};
	$nombre = "Enrique";
	$caracter = "e";
	if (contiene ($nombre,$caracter)){
		$i=0;
		$contador = 0;
		while (strpos($nombre,$caracter,$i) !== false){
			$i = strpos($nombre,$caracter,$i);
			$i++;
			$contador++;
		}
		echo "El caracter ".$caracter." está en la cadena ".$nombre." y aparece ".$contador;
		if ($contador === 1){
			echo " vez";
		}
		else {
			echo " veces";
		}
	}
	else {
		echo "El caracter no se encuentra en la cadena proporcionada";
	}

?>