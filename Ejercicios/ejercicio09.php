<pre>
<?php
	/*
		Generar y mostrar un array unidimensional que contenga ordenados de menor a mayor 6 números aleatorios sin repetición comprendidos
		entre el 1 y el 49 y a continuación tiene que haber un número aleatorio entre 1 y 49, sin repetición con los anteriores, por último
		un número entre 0-9
	*/
	$array = [];
	for ($i = 0; $i < 6; $i++){
		$numero = rand (1,49);
		while (in_array($numero,$array))
			$numero = rand(1,49);
		array_push($array,$numero);
	}
	sort($array);
	
	$numero = rand (1,49);
	while (in_array($numero,$array))
		$numero = rand(1,49);
		
	array_push($array,$numero);
	$numero = rand (1,9);
	array_push($array,$numero);
	?>
	<table border = "1px solid black" style="width: 60%; border-collapse: collapse; text-align:center ">
	<tr>
		<td style="background-color: #15A960">1</td>
		<td style="background-color: #15A960">2</td>
		<td style="background-color: #15A960">3</td>
		<td style="background-color: #15A960">4</td>
		<td style="background-color: #15A960">5</td>
		<td style="background-color: #15A960">6</td>
		<td style="background-color: #15A960">C</td>
		<td style="background-color: #15A960">R</td>

	</th>
	<tr>
	<?php
	for ($i = 0; $i < 8; $i++){
		?><td><?=$array[$i]; ?></td> <?php
	}
	?>
	</tr>
	<caption style="font-weight: bold;font-size: 1.2em;margin-bottom: 10px; background-color:#0AF983;color: white">La primitiva</caption>
	</table>
</pre>