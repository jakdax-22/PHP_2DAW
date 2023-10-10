<pre>
	<?php
		/* Crear una funcion denominada array_flip2 */
		/*function array_flip2 (&$array) {
			$auxiliar;
			foreach ($array as $clave => $valor){
				$array[$valor] = $clave;
				//$valor = $array[$clave]; 
				
				
			}
			$array = array_reverse($array);
			$elementos = count ($array);
			for ($i = 0; $i < $elementos / 2; $i++){
				array_pop($array);
			}
		}*/
		function array_flip2 ($array) {
			$arraydevolver;
			foreach ($array as $clave => $valor){
				$arraydevolver[$valor] = $clave;
			}
			return $arraydevolver;
		}
		$ingredientes = ["tomate" => 1, "lechuga" => 4, "pan" => 34];
		print_r ($ingredientes);
		$ingredientes = array_flip2($ingredientes);
		print_r ($ingredientes);
	?>
</pre>