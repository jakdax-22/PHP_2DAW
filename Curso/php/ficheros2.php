<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<pre>
	<?php
		$miarchivo = fopen("archivo2.txt","a+");
		
		//fwrite($miarchivo,"Escribiendo dentro del fichero archivo2.txt");
		//fflush ($miarchivo);
		$arrayinfo = stat("archivo2.txt");
		print_r ($arrayinfo);
		
		echo filesize ("archivo2.txt");
	?>
	</pre>
</body>
</html>