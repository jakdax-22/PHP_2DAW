<?
	$inicio=mktime(date("H:i:s",mktime(19,0,0,10,25,2015)));
	$final=mktime(date("H:i:s",mktime(20,0,0,10,25,2015)));
	echo $final-$inicio.'<br>';
	echo "Faltan ",date("H:i:s",$final-$inicio);
?>