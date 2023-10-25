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
				table {
			border:1px solid black;
			width: 60%;
			border-collapse: collapse;
		}
		th, td {
			text-align:center !important;
			border: 1px solid #ddd;
			padding: 12px;
			text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        td:hover {
            background-color: #ddd;
        }	
				
</style>
<?
/*ejercicio 21: Crear una aplicacion php para el manejo de una tienda, al abrir la caja partirá de una cantidad inicial establecida
dentro del script (la que queremos), a lo largo del día se van efectuando ventas y pagos a proveedores (un metodo ventas y otro pagos)
al cerrar la caja se mostrará un resumen de ventas, pagos y de saldo disponible*
En la pantalla aparecerá un botón abrir tienda (mensaje la tienda está abierta), boton pagos (nos llevará a un formulario donde pongamos en nombre y el importe
del pago), botón venta ( lo mismo que pago),cerrar tienda aparecer el detalle del saldo de la caja, a quien hemos pagado y a quien hemos vendido.*/	
	
	include ("./clases/Caja.php");

	if (isset($_GET['caja'])){
		$caja = unserialize(urldecode($_GET['caja']));
		/*echo "Pasa por aquí"."<br>";
		var_dump($caja);*/
	}
	else {
		$caja = new Caja();
		$caja = urlencode(serialize($caja));
		?>
			<form id="form1" name="form1" action="" method="GET">
				<input type="submit" name="abrir" value="Abrir caja"/>
				<input type="hidden" name="caja" value="<?=$caja;?>"/>
			</form>
		<?
	}
	
	if (isset($_GET['caja']) && !isset($_GET['cerrar'])) {
		if (isset($_GET['realizarpago'])){
			$caja->pagar($_GET['cantidad'],$_GET['proveedor']);
			//var_dump($caja->pagos);
		}
		elseif (isset($_GET['realizarventa'])){
			$caja->vender($_GET['cantidad'],$_GET['comprador']);
			//var_dump($caja->ventas);
		}
		$caja = urlencode(serialize($caja));
		?>
			<form id="form2" name="form2" action="ejercicio21_2.php" method="GET">
				<fieldset>
					<legend>Realizar una acción </legend>
					<input type="submit" name="pagar" value="Pagar"/>
					<input type="submit" name="vender" value="Vender"/>
					<input type="hidden" name="caja" value="<?=$caja;?>"/>
				</fieldset>
			</form>
			<form id="form3" name="form3" action="" method="GET">
					<input type="submit" name="cerrar" value="Cerrar la caja"/>
					<input type="hidden" name="caja" value="<?=$caja;?>"/>
			</form>
		<?
	}
	if (isset($_GET['cerrar'])){
		$totalvendido = 0;
		$totalcomprado = 0;
		?>
			<table>
				<tr>
					<th colspan="2">Compras</th>
				</tr>
				<tr>
					<td>Proveedor</td>
					<td>Cantidad</td>
				</tr>
				<?
					foreach ($caja->pagos as $proveedor => $cantidad){
						$totalcomprado+=$cantidad;
						?>
						<tr><td><?=$proveedor;?></td><td><?=$cantidad;?></td></tr>
						<?
					}
				?>
			</table>
			<br><br>
			<table>
				<tr>
					<th colspan="2">Ventas</th>
				</tr>
				<tr>
					<td>Comprador</td>
					<td>Cantidad</td>
				</tr>
				<?
					foreach ($caja->ventas as $comprador => $cantidad){
						$totalvendido+=$cantidad;
						?>
						<tr><td><?=$comprador;?></td><td><?=$cantidad;?></td></tr>
						<?
					}
				?>
			</table>
			<br><br>
			<table>
				<tr>
					<th colspan="2">Resumen</th>
				</tr>
				<tr>
					<td>Total comprado</td><td><?=$totalcomprado;?></td>
				</tr>
				<tr>
					<td>Total vendido</td><td><?=$totalvendido;?></td>
				</tr>
				<tr>
					<td>Saldo restante</td><td><?=$caja->saldo;?></td>
				</tr>
			</table>
			<br><br>
		<?
		unset($caja);
	}
		
	
	
