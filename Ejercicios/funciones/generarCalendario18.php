	<?  function generarCalendario18 ($mes,$anyo){
		if (isset($_GET['retroceso'])){
			$mes --;
		}
		if (isset($_GET['avance'])){
			$mes ++;
		}
		if ($mes <= 0){
			$anyo--;
			$mes = 12;
		}
		if ($mes > 12){
			$anyo ++;
			$mes = 1;
		}
		$festivos [1] [1] = 1;
		$festivos [1] [6] = 1;
		$festivos [date("n",easter_date($anyo))] [date("d",easter_date($anyo) - (60*60*24*2))] = 1;
		$festivos [5] [1] = 1;
		$festivos [8] [15] = 1;
		$festivos [10] [12] = 1;
		$festivos [11] [1] = 1;
		$festivos [12] [6] = 1;
		$festivos [12] [8] = 1;
		$festivos [12] [25] = 1;
		$semana = ['Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo'];
		$dias = cal_days_in_month(CAL_GREGORIAN,$mes,$anyo);
		$primero = date("w", mktime(0, 0, 0, $mes, 0, $anyo));
		$contador = 1;
		$meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
		?>
		
		<table>
			<tr>
				<th>
				<form action="" method="GET">
					<input type="hidden" name="mes" value="<?=$mes;?>"/>
					<input type="hidden" name="anyo" value="<?=$anyo;?>"/>
					<input type="hidden" name="enviar" value="Enviar"/>
					<input type="submit" name="retroceso" value="←"/>
					</th><th colspan="5"><h3>Calendario de <span class="mes"><?=$meses[$mes -1];?></span> de <span class="anyo"><?=$anyo;?></span></h3></th>
					<th><input type="submit" name="avance" value="→"/></th></tr><tr>
					<? foreach ($semana as $dia){
						?><th><?=$dia;?></th><?
					}
					?>
					
				</form>
			</tr>
			<tr>
				<? for ($i = 1 ; $i <= $primero; $i++){
					?><td></td><?
					$contador++;

					
				}
				for ($dia = 1; $dia <= $dias; $dia++){
					?> <?
					if ($contador % 7 === 0){
						?><td><a class="rojo" href="ejercicio18_2.php?mes=<?=$mes; ?>&anyo=<?=$anyo; ?>&dia=<?=$dia; ?> &citas=<?=print_r($citas);?>"><?=$dia;?><?
						if (isset($_GET['hora']) && isset($_GET['lugar']) && isset($_GET['titulo']) && isset($_GET['dia']) && $dia == $_GET['dia']){
							?> <br><p><?=$_GET['titulo'];?><br><?=$_GET['hora'];?><br><?=$_GET['lugar'];?></p><?
						}?>
						</a></td><?
						?></tr><tr><?
						
					}
					else {
						if (isset ($festivos[$mes][$dia])){
							?><td><a class="rojo" href="ejercicio18_2.php?mes=<?=$mes; ?>&anyo=<?=$anyo; ?>&dia=<?=$dia; ?>"><?=$dia;?><?
							if (isset($_GET['hora']) && isset($_GET['lugar']) && isset($_GET['titulo']) && isset($_GET['dia']) && $dia == $_GET['dia']){
								?> <br><p><?=$_GET['titulo'];?><br><?=$_GET['hora'];?><br><?=$_GET['lugar'];?></p><?
							}
							?></a></td><?
						}
						else {
							?><td><a href="ejercicio18_2.php?mes=<?=$mes; ?>&anyo=<?=$anyo; ?>&dia=<?=$dia; ?>"><?=$dia;?><?
							if (isset($_GET['hora']) && isset($_GET['lugar']) && isset($_GET['titulo']) && isset($_GET['dia']) && $dia == $_GET['dia']){
								?> <br><p><?=$_GET['titulo'];?><br><?=$_GET['hora'];?><br><?=$_GET['lugar'];?></p><?
							}
							?></a></td><?
						}
					}
					if ($dia === $dias && $contador %7 !== 0){
						while ($contador % 7 !== 0){
							?><td></td><?
							$contador++;
						}
					}
					$contador++;
					?><?
				}
				?></tr><?
				?>
				
			</tr>
		</table> <?
	} ?>