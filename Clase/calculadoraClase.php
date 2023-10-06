<?php
	(!isset($_GET['display'])) ? list($resultado,$total) = [0,0] : list ($resultado,$total) = [$_GET['display'].$_GET['numero'],$_GET['total']];
	if (!isset($_GET['numero'])){
		if ($total !=0){
			$total = $_GET['total'];
			$signo = $_GET['signo'];
		}
		else {
			$total = $resultado;
			$signo = null;
		}
		if($signo=="+"){
			$total+=intval($resultado);
		}elseif($signo=="-"){
			$total -= intval($resultado);
		}elseif($signo=="/"){
			$total /= intval($resultado);
		}elseif($signo=="*"){
			$total *= intval($resultado);
		}
		if(isset($_GET['suma'])){
			$signo="+";
			$resultado= "";
		}elseif(isset($_GET['resta'])){
			$signo="-";
			$resultado= "";
		}elseif(isset($_GET['division'])){
			$signo="/";
			$resultado= "";
		}elseif(isset($_GET['multiplicacion'])){
			$signo="*";
			$resultado= "";
		}elseif(isset($_GET['igual'])){
			$resultado=$total;
			$total=0;
		}elseif(isset($_GET['CC'])){
			$resultado="";
			$total=0;
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
	
</form>