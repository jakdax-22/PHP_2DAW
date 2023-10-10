<?
	function binario ($dividendo,&$binario){
		$cociente = int($dividendo / 2);
		$resto = $dividendo % 2;
		$binario = $resto.$binario;
		if ($cociente >= 2){
			binario($cociente,$binario);
		}
		else{
			$binario.=$cociente;
			return;			
		}
	}
	binario (149,$binario);
	echo $binario;

?>