<?php 
	/*Realizar un cronómetro con 3 botones,uno start y otro de stop y otro de reset, tiene que mostrar por pantalla horas:minutos:segundos transcurridos desde que 
	inicia hasta que se detenga */ 

	if (isset($_GET['horas'])){
		$horas = $_GET['horas'];
		$contando = $_GET['contando'];
		$minutos = $_GET['minutos'];
		$segundos = $_GET['segundos'];
	}
	else {
		$horas = 0;
		$minutos = 0;
		$segundos = 0;
		$contando = false;
	}
	
	if (isset ($_GET['start'])){
		$contando = true;
		
	}
	elseif (isset ($_GET['stop'])){
		$contando = false;
	}
	elseif (isset ($_GET['reset'])){
		$segundos = 0;
		$minutos = 0;
		$horas = 0;
	}	
	if ($contando) {
		$segundos++;
		if ($segundos == 60){
			$segundos = 0;
			$minutos++;
		}
		if ($minutos == 60){
			$minutos = 0;
			$horas++;
		}
		header ("refresh:1;url=ejercicio15.php?horas=$horas&minutos=$minutos&segundos=$segundos&contando=$contando");
	}
	if ($segundos < 10){
		$segundos = "0".$segundos;
	}
	if ($minutos < 10){
		$minutos = "0".$minutos;
	}
	if ($horas < 10){
		$horas = "0".$horas;
	}

?>
<?=$horas;?>:<?=$minutos;?>:<?=$segundos;?>
<br>
<form action = "" method="GET">
	<input type="submit" name="start" value="Start"/>
	<input type="submit" name="stop" value="Stop"/><br>
	<input type="submit" name="reset" value="Reset"/>
</form>