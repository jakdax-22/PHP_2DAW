<? /*Crear un formulario que nos pida un nombre para dar de alta empleados, con un botón de "Alta", al dar de Alta aparecerá el nombre
la fecha de alta y la fecha de revisión del contrato, esta última será el primer lunes transcurridos 6 meses, en caso de que la fecha de alta
sea sábado o domingo, la fecha de alta en caso de ser sábado o domingo que la muestre como el siguiente lunes*/ 
	
	?>	
		<form action="" id="form1" name="form1" method="GET">
			<input type="text" name="nombre"/>
			<input type="submit" name="enviar" value="Dar de Alta"/>
		</form>
	<?
		if (isset($_GET['enviar'])){
			$ahora = new DateTime();
			if ($ahora->format('N') == 6){
				$ahora->add(new DateInterval('P2D'));
			}
			if ($ahora->format('N') == 7){
				$ahora->add(new DateInterval('P1D'));
			}
			$fechaRevision = new DateTime();
			$fechaRevision->add(new DateInterval('P6M'));
			echo "El empleado ".$_GET['nombre']. "fue dado de alta el ".date_format($ahora, 'd-m-Y')." y su fecha de revision es el ".date_format($fechaRevision,'d-m-Y');
		}
?>