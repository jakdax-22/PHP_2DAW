<pre>
<?php
	$cadena="Este es el\r\ntexto que vamos\r\na fragmentar";
	//echo chunk_split($cadena,5);
	/*print_r (count_chars($cadena,1));
	$array = explode (" ", $cadena);
	print_r ($array);*/
	//echo ltrim ($cadena);
	echo nl2br($cadena);
?>
</pre>