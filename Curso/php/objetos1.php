<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<pre>
	<?php
		class PrimeraClase {
			public $nombre = "Enrique";
			
			public function mostrarNombre (){
				echo $this->nombre;
			}
		}
		$instancia = new PrimeraClase();
		$instancia->mostrarNombre();
	?>
</pre>
</body>
</html>