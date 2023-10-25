	function generarCalendario ($mes,$anyo){
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
		<h3>Calendario de <span class="mes"><?=$meses[$mes -1];?></span> de <span class="anyo"><?=$anyo;?></span></h3>
		<table>
			<tr>
				<? foreach ($semana as $dia){
					?><th><?=$dia;?></th><?
				}
				?>
			</tr>
			<tr>
				<? for ($i = 1 ; $i <= $primero; $i++){
					?><td></td><?
					$contador++;

					
				}
				for ($dia = 1; $dia <= $dias; $dia++){
					if ($contador % 7 === 0){
						?><td style="color:red"><?=$dia;?></td><?
						?></tr><tr><?
						
					}
					else {
						if (isset ($festivos[$mes][$dia])){
							?><td style="color:red"><?=$dia;?></td><?
						}
						else {
							?><td><?=$dia;?></td><?
						}
					}
					if ($dia === $dias && $contador %7 !== 0){
						while ($contador % 7 !== 0){
							?><td></td><?
							$contador++;
						}
					}
					$contador++;
				}
				?></tr><?
				?>
				
			</tr>
		</table> <?
	}