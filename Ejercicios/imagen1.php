<?
	header("Content-type: image/jpeg");
	$fichero=fopen("ejercicio025_2.txt", "r+");
	for($i=1;!feof($fichero);$i++){
		$linea=fgetcsv($fichero);
		if($i==$_GET['linea']){
			echo $linea[0];
			exit();
		}
	}
?>