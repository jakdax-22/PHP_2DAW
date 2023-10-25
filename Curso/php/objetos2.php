<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<pre>
	<?php
		class Alumno {
			private $nombre = null;
			private $apellidos = null;
			
			function getNombre (){
				return $this->nombre;
			}
			function getApellidos (){
				return $this->apellidos;
			}
			function setNombre ($nombre){
				 $this->nombre = $nombre;
			}
			function setApellidos ($apellidos){
				 $this->apellidos = $apellidos;
			}
			function calcularLetras ($nombre){
				return strlen($this -> nombre);
			}
		}
		
		$alumno1 = new Alumno();
		$alumno1->setNombre("Enrique");
		$alumno1->setApellidos("Iranzo Martínez");
		
		$nombreAlumno1 = $alumno1->getNombre();
		echo $nombreAlumno1."<br>";
		$apellidosAlumno1 = $alumno1->getApellidos();
		echo $apellidosAlumno1."<br>";
		
		$letras = $alumno1->calcularLetras($nombreAlumno1);
		echo $letras;
		
		if (class_exists("Alumno")){
			echo "La clase " . get_class($alumno1). " está definida";
		}
		$metodosalumno = get_class_methods("Alumno");
		var_dump ($metodosalumno);
		
		$propiedadesalumno = get_class_vars("Alumno");
		var_dump ($propiedadesalumno);
		
	?>
</pre>
</body>
</html>