<?php 
/*Crear una función que divida el valor correspondiente al índice más pequeño de un array escalar
entre el valor correspondiente con el índice más grande independientemente del orden en el que se hayan metido eliminando ambos elementos del array
y repitiendo la operación hasta que en el array quede 1 o 0 elementos, se mostrará por pantalla el array original,
las secuencias de los resultados de las divisiones y un mensaje cuando la operación haya finalizado*/

	function divideValor ($array) {
	
	}
	function generarArray (&$array){
		for ($i = 0; $i <= rand (15,30); $i++){
			$key = rand(1,100);
			while (key_exists($key,$array)){
				$key = rand (1,100);
			}
			$valor = rand (1,200);
			while (in_array($valor,$array)){
				$valor = rand (1,100);
			}
			$array [$clave] = $valor;
		}
	}
	generarArray($numeros);
	
?>