<?php
//Manejo de metodos de la clase DateTime y DateInterval
	
	//Formato local
	setlocale(LC_ALL,'esp');
  
//Llamada al Constructor con una fecha
	$fecha = new DateTime("31-10-2015");
	echo date_format($fecha, 'd-m-Y H:i:s').'<br>';
	
//Opción mediante procedimientos
	$fecha=date_create('next Monday 10-11-2015');
	echo $fecha->format('d-m-Y').'<br>';
	
//Llamada al Constructor por defecto
	$fecha = new DateTime();
	$fecha->setDate(2015, 11, 6);
	echo $fecha->format('d-m-Y').'<br>';
	date_date_set($fecha,2015,12,12);
	echo $fecha->format('d-m-Y').'<br>';

//Llamada al Constructor con Fecha actual (Valor por defecto)
	$fecha = new DateTime('now');
	$intervalo= new DateInterval('P1DT10H');
	$fecha->add($intervalo);
	echo $fecha->format('d-m-Y H:i:s');

?>