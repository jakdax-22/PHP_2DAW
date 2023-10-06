<?php
	$array = [
		["Juan",8,9,6],
		["Antonio",6,8,2],
		["Luis",5,10,9]
	];
	
?>
	<table border = "1px solid black" style="width: 60%; border-collapse: collapse; text-align:center; font-family: 'Roboto', sans-serif" >
		<tr>
			<td>Alumno</td>
			<td>Lengua</td>
			<td>Física</td>
			<td>Inglés</td>
		<tr>
		<?php 
			for ($i = 0; $i < count($array); $i++){
					?><tr>
					<?php for ($j = 0; $j < count ($array[$i]); $j++ ){
						?><td><?php echo $array [$i] [$j]?></td><?php
					}
			}
		?>
	<caption style="font-weight: bold;font-size: 1.2em;margin-bottom: 10px; background-color:#0AF983;color: white">Notas</caption>
	</table>