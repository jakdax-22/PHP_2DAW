<?
	//Tienes que tener en cuenta que si lo hicieras con una clase tienes que definirla aquí arriba también,al ser un array no hay problema
	//Deserializo lo que he mandado a este fichero por el método GET
	$array = unserialize(urldecode($_GET['array']));
	
	//Aquí esta ya te la sabes, si se ha pulsado un botón lo muestra en horizontal y de la otra manera en vertical
	?><table><?
	if (isset($_GET['representarHorizontal'])){
		?><tr><?
		
		//Si lo vamos a mostrar por orden de llegada usamos un foreach que es más comodo
		foreach ($array as $elemento){
			?><td><a href="<?="https://".$elemento;?>"><?=$elemento;?></a></td><?
		}			
	}
	elseif(isset($_GET['representarVertical'])){	
		foreach ($array as $elemento){
			?><tr><td><a href="<?="https://".$elemento;?>"><?=$elemento;?></a></td></tr><?
		}
	}
	
	?></table><?
	
	//Queda el botón de volver atrás, si has estado pensando un poquito en tu cabezita de mierda te darás cuenta
	//de que si ahora hay que volver atrás tienes que serializar el array y pasarlo en un input hidden
	//si no lo haces volverá al programa principal y no pasará por el if isset($_GET['array']), por tanto machacará
	//tu pequeño e indefenso array sin piedad
	$array=urlencode(serialize($array));
	
	?>
	<form action="claseMenuPolo.php" method="GET">
		<input type="submit" name="volver" value="ATRÁS"/>
		<!-- Aquí le pongo de nombre array igual que en programa principal porque al fin y al cabo viaja el array serializado y es bastante práctico 
			 porque tanto en este formulario como en los de la página principal vamos a hacer lo mismo con él-->
		<input type="hidden" name="array" value="<?=$array;?>"/>
	</form>
	