<?
	include ("./clases/Cartera.php");
	$cartera = unserialize(urldecode($_GET['cartera']));
	$cartera = urlencode(serialize($_GET['cartera']));
	
	?>
		<form id="form3" name="form3" action="ejercicio22.php" method="GET"/>
			<label for="saldo">Saldo</label>
			<input type="number" placeholder="Solo formato numérico" name="saldo" id="saldo"/><br>
			<input type="submit" value="Crear cartera" name="crearCartera"/>
			<input type="hidden" value="<?=$cartera;?>" name="cartera"/>
		</form>
	<?
	
?>