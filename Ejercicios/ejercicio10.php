<?php 
	/*Crear un script que represente mediante asteriscos 5 cantidades numéricas introducidas por teclado de tal forma
	que cada asterisco represente 50 unidades, la salida estará ordenada de mayor a menor valor de la cantidad; */ 
	
	$array = [floor($_GET['v1'] / 50),floor($_GET['v2'] / 50),floor($_GET['v3'] / 50),floor($_GET['v4'] / 50)];
	arsort($array);
	
?>
		<?php
			if (isset($_GET['enviar'])){
			foreach ($array as $indice => $valor){
				?><p style="font-family : 'Roboto', sans-serif">V<?php echo $indice +1 ?>(<?=$_GET["v".($indice + 1)]?>) : <?php echo str_repeat("*",$valor) ?></p><br><?php
			}//;background-color:#0AF983; width: 50% 
			}
			else {
				?>
				<form action = "" method="GET">
					<label for="v1">Valor1</label>
					<input type="text" name="v1"/><br>
					<label for="v2">Valor2</label>
					<input type="text" name ="v2"/><br>
					<label for="v3">Valor3</label>
					<input type="text" name ="v3"/><br>
					<label for="v4">Valor4</label>
					<input type="text" name ="v4"/><br>
					<input type="submit" value="Enviar" name="enviar"/>
				</form>
				<?php
			}
		
