<?php /* Crear un documento que represente un formulario con 3 items numéricos, n1, n2 y n3 y dos botones
 Un botón con una flecha hacia arriba y otro con otra hacia abajo, introduciremos 3 números al pulsar la flecha hacia arriba
 van ordenados de menos a mayor y con la de abajo de mayor a menor*/
 
	 if (isset($_GET['primero']) && isset($_GET['segundo']) && isset($_GET['tercero'])){
		 $primero = $_GET['primero'];
		 $segundo = $_GET['segundo'];
		 $tercero = $_GET['tercero'];
		 $auxiliar = 0;
		 if (isset($_GET['descendente'])){
			if ($primero > $segundo && $primero > $tercero) {
				if ($segundo > $tercero){
					
				}
				else {
					$auxiliar = $tercero;
					$tercero = $segundo;
					$segundo = $auxiliar;
				}
			}
			elseif ($segundo > $primero && $segundo > $tercero){
				if ($primero > $tercero){
					$auxiliar = $primero;
					$primero = $segundo;
					$segundo = $auxiliar;
				}
				else {
					$auxiliar = $primero;
					$primero = $segundo;
					$segundo = $auxiliar;
					$segundo = $tercero;
					$tercero = $auxiliar;
					
				}
			}
			elseif ($tercero > $primero && $tercero > $segundo){
				if ($primero > $segundo){
					$auxiliar = $primero;
					$primero = $tercero;
					$tercero = $auxiliar;
					$auxiliar = $segundo;
					$segundo = $tercero;
					$tercero = $auxiliar;
					
				}
				else {
					$auxiliar = $primero;
					$primero = $tercero;
					$tercero = $auxiliar;
				}
			}
		 }
	 
		 else {
			if ($primero < $segundo && $primero < $tercero) {
				if ($segundo < $tercero){
					
				}
				else {
					$auxiliar = $tercero;
					$tercero = $segundo;
					$segundo = $auxiliar;
				}
			}
			elseif ($segundo < $primero && $segundo < $tercero){
				if ($primero < $tercero){
					$auxiliar = $primero;
					$primero = $segundo;
					$segundo = $auxiliar;
				}
				else {
					$auxiliar = $primero;
					$primero = $segundo;
					$segundo = $auxiliar;
					$segundo = $tercero;
					$tercero = $auxiliar;
				}
			}
			elseif ($tercero < $primero && $tercero < $segundo){
				if ($primero < $segundo){
					$auxiliar = $primero;
					$primero = $tercero;
					$tercero = $auxiliar;
					$auxiliar = $segundo;
					$segundo = $tercero;
					$tercero = $auxiliar;
				}
				else {
					$auxiliar = $primero;
					$primero = $tercero;
					$tercero = $auxiliar;
				}
			} 
		 }
	}
	else {
		$primero = "";
		$segundo = "";
		$tercero = "";
	}
	 
	  

	
 ?>
 <html>
	<head>
	
	</head>
	
	<body>
		<form action="" method="GET">
			<label for="primero">Primero: </label>
			<input type="text" name="primero" value="<?=$primero ?>"/>
			<br>
			<label for="segundo">Segundo: </label>
			<input type="text" name="segundo" value="<?=$segundo?>"/>
			<br>
			<label for="tercero">Tercero: </label>
			<input type="text" name="tercero" value="<?=$tercero?>"/>
			<br>
			<input type="submit" name="ascendente" value="↑"/>
			<input type="submit" name="descendente" value="↓"/>
		</form>
	</body>


</html>