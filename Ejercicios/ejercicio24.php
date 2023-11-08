<pre>
<?
	/* Crear un documento de tal forma que cuando se acceda a el se muestre el número de visitantes totales, el número de visitantes
	únicos y el número de visitas por día */ 
	$nombre = "./ficheros/contador.txt";
	$ip = $_SERVER['REMOTE_ADDR'];
	$fechahoy = date ('Y-m-d');
	if (file_exists($nombre)){
		$gestor = fopen($nombre,"r+");
		$contenido = fread($gestor,filesize($nombre));
		$array = unserialize($contenido);
		fclose($gestor);
		$totales = $array['total'];
		$unicas = $array['unicas'];
		$fecha = $array['fecha'][$fechahoy];
	}
	else {
		$gestor = fopen($nombre,"c");
		fclose($gestor);
		$totales = 0;
		$unicas = [];
		$fecha = 0;
		$arrray = [];
		$array ['total'] = 0;
		$array ['unicas'] = [];
		$array ['fecha'][$fechahoy] = 0;
	}
	$totales ++;
	if (!in_array($ip,$unicas)){
		array_push($unicas,$ip);
	}
	$fecha++;
	$array['fecha'][$fechahoy] = $fecha;
	?>
		Visitas totales: <?=$totales;?><br>
		Visitas unicas: <?=count($unicas);?><br>
		Visitas a lo largo del tiempo: <br>
		<?
			foreach ($array['fecha'] as $fecha => $visitas){
				echo $fecha . "=>" . $visitas . "<br> \t\t";
			}
		?>
		
	<?
	$array = ['total' => $totales, 'unicas' => $unicas,'fecha' => $array['fecha']];
	$gestor = fopen ($nombre,"r+");
	fwrite ($gestor,serialize($array));
	fclose ($gestor);
?>
</pre>