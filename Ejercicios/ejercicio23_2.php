	<?
		if (isset($_GET['enviar'])){
		if (!isset($_GET['array'])){
			$array = [];
		}
		else {
			$array = unserialize(urldecode($_GET['array']));
		}
		$ahora = new DateTime();
		if ($ahora->format('N') == 6){
			$ahora->add(new DateInterval('P2D'));
		}
		if ($ahora->format('N') == 7){
			$ahora->add(new DateInterval('P1D'));
		}
		$fechaRevision = new DateTime();
		$fechaRevision->add(new DateInterval('P6M'));
		$array[$_GET['nombre']] = [$ahora,$fechaRevision];
		$array = urlencode(serialize($array));
	}
	?>
	<form action="" id="form1" name="form1" method="GET">
		<input type="text" name="nombre"/>
		<input type="submit" name="enviar" value="Dar de Alta"/>
		<input type="submit" name="consultar" value="Consultar"/>
		<input type="hidden" name="array" value="<?=$array;?>"/>
	</form>
<?
	?>
	<pre>
	<?
	if (isset($_GET['consultar'])){
		$array = unserialize(urldecode($_GET['array']));
		var_dump($array);
		$array = urlencode(serialize($array));	
		
	}
	?>
	</pre>