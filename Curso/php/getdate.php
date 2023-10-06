<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<pre>
		<?php
			//Función getdate
			
			$hoy = getdate();
			print_r ($hoy);
			
			if ($hoy['month'] == "May"){
				echo "Mayo";
			}
		?>
	</pre>
</body>
</html>