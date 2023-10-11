<?php
	/* Crear una funcion a la que se le pase una cadena y un caracter, la función devolverá un booleano y fuera de la función
	mostrará la frase: "El caracter x está en la cadena x y aparece x veces"), en caso de devolver la cadena no está*/
	
	function contiene ($cadena,$caracter){
		//Recorro la cadena entera y en el caso de coincidencia devuelvo true y se sale de la función
		for ($i = 0; $i < strlen($cadena); $i++){
			if ($cadena[$i] === $caracter)
				return true;
		}
		//Si se ha recorrido entera la cadena y no devuelve true, se devuelve false
		return false;
	};
	$nombre = "Enrique";
	$caracter = "e";
	/*if (contiene ($nombre,$caracter)){
		//$i es desde donde va a empezar strpos y contador son el número de coincidencias
		$i=0;
		$contador = 0;
		//strpos devuelve int o false, controlo que se ejecute el bucle mientras no devuelva false
		while (strpos($nombre,$caracter,$i) !== false){
			//Se va a partir desde 0 y se va a usar strpos para almacenar la posición de la primera coincidencia
			$i = strpos($nombre,$caracter,$i);
			//Aumentamos $i para no caer en bucle infinito
			$i++;
			//Aumenta el contador en 1
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
	}*/
	if (contiene ($nombre,$caracter)){
		echo "El caracter ".$caracter." está en la cadena ".$nombre." y aparece ". substr_count($nombre,$caracter,0);
		if (substr_count($nombre,$caracter,0) == 1){
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