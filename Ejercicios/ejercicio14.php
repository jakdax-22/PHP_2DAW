<pre>
<?php 
/*Crear una función que divida el valor correspondiente al índice más pequeño de un array escalar
entre el valor correspondiente con el índice más grande independientemente del orden en el que se hayan metido eliminando ambos elementos del array
y repitiendo la operación hasta que en el array quede 1 o 0 elementos, se mostrará por pantalla el array original,
las secuencias de los resultados de las divisiones y un mensaje cuando la operación haya finalizado*/

	function divideValor (&$array) {
		//Defino las variables con los límites incrementados en 1 para que siempre en la primera iteración se convierta en mayor y menor
		$mayor;
		$menor;
		//Como es una función recursiva establezco que cuando quede solo 1 elemento o 0 salga y no sea infinita
		if (count ($array) === 1 || count ($array) === 0){
			echo "Las operaciones han finalizado"."<br>";
			return;
		}
		//Si quedan más de un elemento hago lo siguiente
		else {
			//mayor se convierte en el resultado de sacar el máximo valor del array cambiando sus claves por valores, lo mismo con menor pero con min
			$mayor = max (array_flip($array));
			$menor = min (array_flip($array));
			//Muestro por pantalla los valores y el resultado de la división
			echo "La division de ".$array[$menor]. " entre ".$array[$mayor]." es de : ". floor($array[$menor] / $array[$mayor]). "<br>";
			//Desdefino las posiciones del array que acabo de coger
			unset($array[$mayor]);
			unset($array[$menor]);
			//Vuelvo a llamar a la función
			return divideValor($array);
		}
	}
	function generarArray (&$array){
		//Las iteraciones del bucle son marcadas por la función aleatoria rand
		for ($i = 0; $i < rand (15,30); $i++){
			//$key se convierte en el resultado de un aleatorio entre 1 y 100
			$key = rand(1,100);
			//Si ya existe dentro del array se vuelve a generar un aleatorio hasta que no existe esa clave
			while (key_exists($key,$array)){
				$key = rand (1,100);
			}
			//Lo mismo con $valor
			$valor = rand (1,200);
			while (in_array($valor,$array)){
				$valor = rand (1,100);
			}
			//Almaceno el valor en la posición correspondiente del array
			$array [$key] = $valor;
		}
	}
	$numeros = [];
	generarArray($numeros);
	print_r ($numeros);
	divideValor($numeros);
	print_r($numeros);
	
?>
</pre>