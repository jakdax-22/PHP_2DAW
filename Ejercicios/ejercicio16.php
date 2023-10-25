<?php
	if (date("H") >= 14){
		$horas = 38 - date ("H"); 
	}
	else {
		$horas = 14 - date("H");
	}
	if (date ("i") >= 30){
		$horas--;
		$minutos = 90 - date ("i");
	}
	else {
		$minutos = 30 - date("i");		
	}
	if (date("s") > 0){
		$minutos--;
		$segundos = 60 - date ("s");
	}
	else {
	$segundos = 0 ;
	}
	header ("refresh:1;url=ejercicio16.php?horas=$horas&minutos=$minutos&segundos=$segundos");

?>
<div style="background-color:black;color:white;font-family:'Roboto' sans serif; width:35%">
	<!--<img src="./images/cronometro.jpg"/ width="50px" height="40px"style="float:left">-->
	Quedan <?=$horas;?> horas <?=$minutos;?> minutos y <?=$segundos;?> segundos para las 14:30
</div>