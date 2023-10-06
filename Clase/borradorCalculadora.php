<?php
	(!isset($_GET['display'])) ? list($resultado,$total,$contador) = [0,0,0] : list ($resultado,$total) = [$_GET['display'].$_GET['numero'],$_GET['total'],$_GET['contador']];
	if (!isset($_GET['numero'])){
		if ($total !=0){
			$total = $_GET['total'];
			$signo = $_GET['signo'];
			$contador = $_GET['contador'];
		}
		else {
			$total = $resultado;
			$signo = $_GET['signo'];
		}
		if($signo=="+"){
			$total= $total + substr($resultado,$contador+1);
		}elseif($signo=="-"){
			$total = $total - substr($resultado,$contador+1);
		}elseif($signo=="/"){
			$total = $total / substr($resultado,$contador+1);
		}elseif($signo=="*"){
			$total = $total * substr($resultado,$contador+1);
		}
		if(isset($_GET['suma'])){
			$resultado = $pantalla.$signo;
			$contador= strrpos ($resultado, $signo);
		}elseif(isset($_GET['resta'])){
			$resultado = $pantalla.$signo;
			$contador= strrpos ($resultado, $signo);
		}elseif(isset($_GET['division'])){
			$resultado = $pantalla.$signo;
			$contador= strrpos ($resultado, $signo);
		}elseif(isset($_GET['multiplicacion'])){
			$resultado = $pantalla.$signo;
			$contador= strrpos ($resultado, $signo);
		}elseif(isset($_GET['igual'])){
			$resultado=$total;
			$total=0;
		}elseif(isset($_GET['CC'])){
			$resultado="";
			$total=0;
			$contador = 0;
			$signo=null;
		}
	}
	else {
		$total = $_GET['total'];
		$signo = $_GET['signo'];
	}
?>
<form action ="" method="GET" style="width:100px;text-align:center;margin:20px ;border: 1px solid black; padding:10px; background-color: grey">
	<span style = "font-family:'Roboto', sans-serif; color:white">Calculadora</span><br><br>
	<input type="text" name="display" value="<?=$resultado;?>" style="width:100px; background-color:lightblue;color:white; border: 2px solid black"/><br>
	<br>
	<?php
		for ($i = 1, $b = 0; $i<11; $i++){
			($i>9)?$b=0:$b++;
		?>
		<input type="submit" name="numero" value="<?=$b;?>" style="background-color: lightgrey;border: 1 px solid black"/>
		<?php
			if ($i %3 === 0){
				echo "<br>";
			}
		}
	?>
	<br><br>
	<input type = "submit" name="suma" value="+" style="background-color: lightgrey;border: 1 px solid black"/>
	<input type = "submit" name="resta" value="-" style="background-color: lightgrey;border: 1 px solid black"/>
	<input type = "submit" name="multiplicacion" value="*" style="background-color: lightgrey;border: 1 px solid black"/><br>
	<input type = "submit" name="division" value="/" style="background-color: lightgrey;border: 1 px solid black"/>
	<input type = "submit" name="igual" value="=" style="background-color: lightgrey;border: 1 px solid black"/><br><br>
	<input type = "submit" name="CC" value="CC" style="background-color: #5D6D7E;border: 1 px solid black; border-radius:50px"/>
	<input type = "hidden" name="total" value="<?=$total;?>"/>
	<input type = "hidden" name="signo" value="<?=$signo;?>"/>
	<input type = "hidden" name="contador" value="<?=$contador;?>"/>
	
</form>