<?php 
/* 
	Calculadora
*/
	if (isset($_GET['resultado'])){
		$resultado = $_GET['resultado'].$_GET['boton'];
		$calculo
		

		if (isset($_GET['retroceso'])){
			$resultado = substr($_GET['resultado'],0,strlen($_GET['resultado']) - 1);
		}
		if (isset($_GET['flush'])){
			$resultado = "";
		}
		
		
		switch ($_GET['boton']){
			case '+':
			
				$calculo = intval($_GET['calculo']) + intval(substr($_GET['resultado'],strlen($_GET['resultado']-1),strlen($_GET['resultado'])));
			break;
			
			case '-':
				$calculo = intval($_GET['calculo']) - intval(substr($_GET['resultado'],strlen($_GET['resultado']-1),strlen($_GET['resultado'])));
			break;
			
			case '*':
				$calculo = intval($_GET['calculo']) * intval(substr($_GET['resultado'],strlen($_GET['resultado']-1),strlen($_GET['resultado'])));
			break;
			
			case '/':
				$calculo = intval($_GET['calculo']) / intval(substr($_GET['resultado'],strlen($_GET['resultado']-1),strlen($_GET['resultado'])));
			break;
			case '=':
				$resultado = $_GET['calculo'];
			break;
		}
		
	}
	else {
		$resultado = "";
		$calculo = 0;
	}
		
	/*elseif (isset($_GET['1'])){
		$auxiliar=$auxiliar.$_GET['1'];
		
	}
	elseif (isset($_GET['2'])){
		$auxiliar=$auxiliar.$_GET['2'];
		
	}
	elseif (isset($_GET['3'])){
		$auxiliar=$auxiliar.$_GET['3'];
		
	}
	elseif (isset($_GET['4'])){
		$auxiliar=$auxiliar.$_GET['4'];
		
	}
	elseif (isset($_GET['5'])){
		$auxiliar=$auxiliar.$_GET['5'];
		
	}
	elseif (isset($_GET['6'])){
		$auxiliar=$auxiliar.$_GET['6'];
		
	}
	elseif (isset($_GET['7'])){
		$auxiliar=$auxiliar.$_GET['7'];
		
	}
	elseif (isset($_GET['8'])){
		$auxiliar=$auxiliar.$_GET['8'];
		
	}
	elseif (isset($_GET['9'])){
		$auxiliar=$auxiliar.$_GET['9'];
		
	}
	elseif (isset($_GET['+'])){
		$auxiliar=$auxiliar.$_GET['+'];
		
	}
	elseif (isset($_GET['-'])){
		$auxiliar=$auxiliar.$_GET['-'];
		
	}
	elseif (isset($_GET['*'])){
		$auxiliar=$auxiliar.$_GET['*'];
		
	}
	elseif (isset($_GET['/'])){
		$auxiliar=$auxiliar.$_GET['/'];
		
	}
	
	$resultado = $resultado.$auxiliar;
	*/
?>

<form action="" method="GET">
	<input type="text" value="<?=$resultado; ?>" name="resultado"/>
	<input type="submit" value="←" name="retroceso"/>
	<br>
	<br>
	<input type="submit" value="1" name="boton"/>
	<input type="submit" value="2" name="boton"/>
	<input type="submit" value="3" name="boton"/>
	<input type="submit" value="+" name="boton"/>
	<input type="submit" value="-" name="boton"/>
	<br>
	<input type="submit" value="4" name="boton"/>
	<input type="submit" value="5" name="boton"/>
	<input type="submit" value="6" name="boton"/>
	<input type="submit" value="*" name="boton"/>
	<input type="submit" value="/" name="boton"/>
	<br>
	<input type="submit" value="7" name="boton"/>
	<input type="submit" value="8" name="boton"/>
	<input type="submit" value="9" name="boton"/>
	<input type="submit" value="0" name="boton"/>
	<input type="submit" value="=" name="boton"/>
	<input type="submit" value = "flush" name="flush"/>
	<input type="hidden" value= "<?=$calculo;?>" name="calculo"/>
	<br>

</form>