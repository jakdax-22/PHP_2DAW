<style>
	body {
		font-family:'Roboto',sans-serif;
	}
	
	form {
		margin-left: 225px;
		align: center;
		width: 50%;
		margin-top: 50px;
		background-color: #fff;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		text-align: center;
	}

	form input[type="text"] {
		width: 100%;
		padding: 10px;
		margin-bottom: 10px;
		border: 1px solid #ccc;
		border-radius: 5px;
	}
	form input[type="number"] {
		width: 100%;
		padding: 10px;
		margin-bottom: 10px;
		border: 1px solid #ccc;
		border-radius: 5px;
	}

	form input[type="submit"] {
		background-color: #4caf50;
		color: #fff;
		border: none;
		padding: 10px 20px;
		border-radius: 5px;
		cursor: pointer;
	}

	form input[type="submit"]:hover {
		background-color: #45a049;
	}
</style>
<?
	include ("./clases/Caja.php");
	$caja = unserialize(urldecode($_GET['caja']));
	$caja = urlencode(serialize($caja));
	if (isset($_GET['pagar'])){
		?>
			<form id="form3" name="form3" action="ejercicio21.php" method="GET">
				<label for="proveedor">Nombre del proveedor</label>
				<input type="text" id="proveedor" name="proveedor"/>
				<label for="cantidad">Cantidad pagada</label>
				<input type="number" id="cantidad" name="cantidad" placeholder="Solo valores numéricos"/>
				<input type="submit" name="realizarpago" value="Registrar pago"/>
				<input type="hidden" name="caja" value="<?=$caja;?>"/>
			</form>
		<?
	}
	elseif (isset($_GET['vender'])){
		?>
			<form id="form4" name="form4" action="ejercicio21.php" method="GET">
				<label for="comprador">Nombre del comprador</label>
				<input type="text" id="comprador" name="comprador"/>
				<label for="cantidad">Cantidad cobrada</label>
				<input type="number" id="cantidad" name="cantidad" placeholder="Solo valores numéricos"/>
				<input type="submit" name="realizarventa" value="Registrar venta"/>
				<input type="hidden" name="caja" value="<?=$caja;?>"/>
			</form>
		<?
	}
?>