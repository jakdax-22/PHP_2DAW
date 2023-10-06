<?php 
	/*Crear un script que represente mediante asteriscos 5 cantidades numéricas introducidas por teclado de tal forma
	que cada asterisco represente 50 unidades, la salida estará ordenada de mayor a menor valor de la cantidad; */ 
	
	$array = [floor($_GET['v1'] / 50),floor($_GET['v2'] / 50),floor($_GET['v3'] / 50),floor($_GET['v4'] / 50)];
	asort($array);
	
?>
	<div>
		<?php foreach ($array as $indice => $valor){
			?><p style="font-family : 'Roboto', sans-serif">V<?php echo $indice +1 ?> : <?php echo str_repeat("*",$valor) ?></p><br><?php
		}//;background-color:#0AF983; width: 50%?>
		
	</div>