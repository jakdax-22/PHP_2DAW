<?
	$arr;
	$total;
	$signo;
	$pantalla=null;
	//Miro a ver si tiene algo la pantalla
	if(isset($_GET['pantalla'])){
		//Luego miro si el valor de la pantalla es null
		//en ese caso se reinicia la calculadora
		if($_GET['pantalla']!=null){
			//Tomo un array de las claves,valor
			parse_str($_SERVER['QUERY_STRING'],$arr);
			$pantalla=$arr['pantalla'];
			//Esto es para probar que va funcionando bien
			//echo($pantalla);
			//echo("<br>");
			$total=$arr['total'];
			//Compruebo si hay algo en el "cache"
			if($total!=0){
				$total=$arr['total'];
				$signo=$arr['signo'];
				//echo($total);
			}else{
				$total=$pantalla;
				$signo=null;
				//echo($total);
			}
			//Compruebo si hay signo de operacion y si hay cual es
			//para hacer su operacion
			if($signo=='+'){
				$total= $total+$pantalla;
			}elseif($signo=='-'){
				$total= $total-$pantalla;
			}elseif($signo=='/'){
				$total= $total/$pantalla;
			}elseif($signo=='*'){
				$total= $total*$pantalla;
			}
			//Compruebo que boton se ha pulsado y en consecuencia que se va a realizar
			if(isset($_GET['suma'])){
				$signo='+';
				$pantalla= 0;
				//$pantalla= $pantalla + "+";
			}elseif(isset($_GET['resta'])){
				$signo='-';
				$pantalla= 0;
				//$pantalla= $pantalla + "-";
			}elseif(isset($_GET['division'])){
				$signo='/';
				$pantalla= 0;
				//$pantalla= $pantalla + "/";
			}elseif(isset($_GET['multiplicacion'])){
				$signo='*';
				$pantalla= 0;
				//$pantalla= $pantalla + "*";
			}elseif(isset($_GET['resultado'])){
				$pantalla=$total;
				$total=0;
			}elseif(isset($_GET['limpiar'])){
				$pantalla=0;
				$total=0;
				$signo=null;
			}
		}else{
		$pantalla=0;
		$total=0;
		$signo=null;
	}
	}else{
		$pantalla=0;
		$total=0;
		$signo=null;
	}

?>
	<form action="" method="get">
	<legend style="border:1px solid #000; width:105px;">
		<input type="hidden" name="total" value="<?= $total?>">
		<input type="hidden" name="signo" value="<?= $signo?>">
		<input type="text" name="pantalla" value="<?= $pantalla?>" style="width:100px;margin:2px;">
		<p><input type="submit" name="suma" value="+">
		<input type="submit" name="resta" value="-">
		<input type="submit" name="division" value="/">
		<input type="submit" name="multiplicacion" value="*">
		</p>
		<p>
		<input type="submit" name="resultado" value="=">
		<input type="submit" name="limpiar" value="CLEAR">
		</p>
	</legend>
	</form>