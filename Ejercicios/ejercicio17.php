<style>
		body {
			font-family:'Roboto',sans-serif;
		}
		
        .formulario {
			margin-left: 225px;
			align: center;
			width: 50%;
			margin-top: 50px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .formulario input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .formulario input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .formulario input[type="submit"]:hover {
            background-color: #45a049;
        }
		
		table {
			border:1px solid black;
			width: 60%;
			border-collapse: collapse;
		}
		th, td {
			text-align:center !important;
			border: 1px solid #ddd;
			padding: 12px;
			text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        td:hover {
            background-color: #ddd;
        }		
		.mes {
			color : #2ECC71;
		}
		.anyo {
			color: #2ECCB6;
		}
		
</style>

<?php 
	/*crear una función calendario a la cual le vamos a pasar un mes y un año como parámetros en formato numérico, la función debe de
	generar un calendario de ese mes con los números en negro salvo los días de fiesta que serán en rojo*/
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
	if (!isset($_GET['enviar'])){
		?>
		<form class="formulario">
			<label for="mes">Mes </label>
			<input type="number" id="mes" name="mes" placeholder="Solo valores numéricos"/><br>
			<label for="anyo">Año </label>
			<input type="number" id="anyo" name="anyo" placeholder="Solo valores numéricos"/>
			<input type="submit" name="enviar" value="Enviar"/>
		
		</form>
		<?
	}
	else {
		generarCalendario($_GET['mes'],$_GET['anyo']);
	}
?>