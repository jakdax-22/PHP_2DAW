<?
	$hactual=date("H");
	$mactual=date("i");
	$sactual=date("s");
	$hfinal=mktime(14,30,0,10,28,2015);
	$hora=mktime($hactual,$mactual,$sactual,10,28,2015);
	//echo $hfinal,'<br>';
	//echo $hora,'<br>';
	$faltan=gmdate("H:i:s",$hfinal-$hora);
	echo "Faltan: $faltan para finalizar la clase";
	Header("Refresh:1;url=fecha6.php");
?>