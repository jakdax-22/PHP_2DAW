<pre>
<? 
/*Hacer un ejercicio que me muestre el código fuente y el nombre de los scripts PHP que tengamos en nuestro directorio (htdocs)
pero únicamente del más grande y del más pequeño*/
$array = scandir ("./");
$ficheros = [];
foreach ($array as $fichero){
	if (is_file($fichero) && substr($fichero,-4) == ".php"){
		$ficheros[filesize($fichero)] = $fichero;
	}
}

$tamanoPequeno = min(array_flip($ficheros));
echo "El fichero más pequeño es ".$ficheros[$tamanoPequeno]. " con ".$tamanoPequeno." B y su contenido es el siguiente: </h1><br><br>";
show_source($ficheros[$tamanoPequeno]);

$tamanoGrande = max(array_flip($ficheros));
echo "El fichero más grande es ".$ficheros[$tamanoGrande]. " con ".$tamanoGrande." B y su contenido es el siguiente: </h1><br><br>";
show_source($ficheros[$tamanoGrande]);

?>
</pre>