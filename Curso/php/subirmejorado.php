<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<pre>
	<?php
		$directoriosubida = "uploads/";
		$max_file_size = "5555555";
		$extensionesvalidas = ["jpg","png","gif"];
		
		if (isset($_POST['submit']) && isset($_FILES['imagen'])){
			$errores = 0;
			$nombrearchivo = $_FILES['imagen']['name'];
			$file_size = $_FILES['imagen']['size'];
			$directoriotemp = $_FILES['imagen']['tmp_name'];
			$tipoarchivo = $_FILES['imagen']['type'];
			$arrayArchivo = pathinfo($nombrearchivo);
			//var_dump($arrayArchivo);
			$extension = $arrayArchivo['extension'];
			
			if (!in_array($extension,$extensionesvalidas)){
				echo "Extension no válida";
				$errores++;
			}
			if ($file_size > $max_file_size){
				echo "La imagen supera el tamaño máximo";
				$errores++;
			}
			if ($errores = 0){
				$nombrecompleto = $directoriosubida.$nombrearchivo;
				move_uploaded_file($directoriotemp,$nombrecompleto);
				echo "Fichero subido correctamente";
			}
		}
	?>
</pre>
</body>
</html>