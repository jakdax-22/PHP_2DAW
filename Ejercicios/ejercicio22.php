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
		span {
			margin-left: 250px;
			margin-top: 50px;
			width: 50%;
			background-color:red;
			display:block;
			color:white;
		}
				
</style>
<?
	/*Ejercicio 22. Crear una cartera con diferentes bolsillos, un bolsillo para pagar la prensa, otro para pagar alimentos, y otro para ocio
	La cartera parte de un saldo inicial que se dará al instanciar la clase, se irá pagando ocio, prensa o alimentos por lo que habrá tres instancias
	de la clase que llevará cada uno de los apartados
	La propiedad de la cantidad de la clase monedero será estática
	Dispondremos de un menú que cree el monedero y nos pide el saldo inicial
	compras o pagos que nos pregunte de que categoria se va a comprar
	y saldos nos pondrá cuanto hemos gastado de cada categoria y la cantidad restante del monedero.*/
	include ("./clases/Cartera.php");
	$error="";
	if (isset($_GET['cartera'])){
		$cartera = unserialize(urldecode($_GET['cartera']));
		if (isset($_GET['introducirBolsillo'])){
			if ($_GET['saldoBolsillo'] > $cartera->getSaldo() && $_GET['seleccionar'] != "ninguna"){
			if (isset($_GET['monederoAlimentos'])){
			$monederoAlimentos = unserialize(urldecode($_GET['monederoAlimentos']));
			}
			if (isset($_GET['monederoOcio'])){
				$monederoOcio = unserialize(urldecode($_GET['monederoOcio']));
			}
			if (isset($_GET['monederoPrensa'])){
				$monederoPrensa = unserialize(urldecode($_GET['monederoPrensa']));
			}
				$error = "Has introducido más dinero en el bolsillo del que tiene la cartera, por favor realiza la operación de nuevo o vuelve a definir el saldo de la cartera";
			}
			elseif ($_GET['seleccionar'] == "prensa"){
				if (isset($_GET['monederoPrensa'])){
					$monederoPrensa = unserialize(urldecode($_GET['monederoPrensa']));
					$monederoPrensa->setSaldo($monederoPrensa->getSaldo() + $_GET['saldoBolsillo']);
					$cartera->setSaldo($cartera->getSaldo() - $_GET['saldoBolsillo']);
					if (isset($_GET['monederoAlimentos'])){
						$monederoAlimentos = unserialize(urldecode($_GET['monederoAlimentos']));
					}
					if (isset($_GET['monederoOcio'])){
						$monederoOcio = unserialize(urldecode($_GET['monederoOcio']));
					}
				}
				elseif (!isset($_GET['monederoPrensa'])) {
					$monederoPrensa=new Bolsillo($_GET['saldoBolsillo']);
					$cartera->setSaldo($cartera->getSaldo() - $_GET['saldoBolsillo']);
					if (isset($_GET['monederoAlimentos'])){
						$monederoAlimentos = unserialize(urldecode($_GET['monederoAlimentos']));
					}
					if (isset($_GET['monederoOcio'])){
						$monederoOcio = unserialize(urldecode($_GET['monederoOcio']));
					}
				}
			}
			elseif ($_GET['seleccionar'] == "alimentos"){
				if (!isset($_GET['monederoAlimentos'])){
					$monederoAlimentos=new Bolsillo($_GET['saldoBolsillo']);
					$cartera->setSaldo($cartera->getSaldo() - $_GET['saldoBolsillo']);
					if (isset($_GET['monederoPrensa'])){
						$monederoPrensa = unserialize(urldecode($_GET['monederoPrensa']));
					}
					elseif (isset($_GET['monederoOcio'])){
						$monederoOcio = unserialize(urldecode($_GET['monederoOcio']));
					}
				}
				else {
					$monederoAlimentos = unserialize(urldecode($_GET['monederoAlimentos']));
					$monederoAlimentos->setSaldo($monederoAlimentos->getSaldo() + $_GET['saldoBolsillo']);
					$cartera->setSaldo($cartera->getSaldo() - $_GET['saldoBolsillo']);
					if (isset($_GET['monederoPrensa'])){
						$monederoPrensa = unserialize(urldecode($_GET['monederoPrensa']));
					}
					if (isset($_GET['monederoOcio'])){
						$monederoOcio = unserialize(urldecode($_GET['monederoOcio']));
					}
				}
			}
			elseif ($_GET['seleccionar'] == "ocio"){
				if (!isset($_GET['monederoOcio'])){
					$monederoOcio=new Bolsillo($_GET['saldoBolsillo']);
					$cartera->setSaldo($cartera->getSaldo() - $_GET['saldoBolsillo']);
					if (isset($_GET['monederoAlimentos'])){
						$monederoAlimentos = unserialize(urldecode($_GET['monederoAlimentos']));
					}
					if (isset($_GET['monederoPrensa'])){
						$monederoPrensa = unserialize(urldecode($_GET['monederoPrensa']));
					}
				}
				else {
					$monederoOcio = unserialize(urldecode($_GET['monederoOcio']));
					$monederoOcio->setSaldo($monederoOcio->getSaldo() + $_GET['saldoBolsillo']);
					$cartera->setSaldo($cartera->getSaldo() - $_GET['saldoBolsillo']);
					if (isset($_GET['monederoAlimentos'])){
						$monederoAlimentos = unserialize(urldecode($_GET['monederoAlimentos']));
					}
					if (isset($_GET['monederoPrensa'])){
						$monederoPrensa = unserialize(urldecode($_GET['monederoPrensa']));
					}
				}
			}
		}
		else {
			if (isset ($_GET['monederoPrensa'])){
				$monederoPrensa = unserialize(urldecode($_GET['monederoPrensa']));
			}
			if (isset ($_GET['monederoAlimentos'])){
				$monederoAlimentos = unserialize(urldecode($_GET['monederoAlimentos']));
			}
			if (isset ($_GET['monederoOcio'])){
				$monederoOcio = unserialize(urldecode($_GET['monederoOcio']));
			}
			
		}
		if (isset ($_GET['saldo'])){
			$cartera->setSaldo($cartera->getSaldo() + $_GET['saldo']);
		}
		//elseif (isset())
	}
	else {
		$cartera = new Cartera(0);
		$cartera = urlencode(serialize($cartera));
		?>
			<form id="form1" name="form1" action="" method="GET"/>
				<label for="saldo">Saldo</label>
				<input type="number" placeholder="Solo formato numérico" name="saldo" id="saldo"/><br>
				<input type="submit" value="Crear cartera" name="crearCartera"/>
				<input type="hidden" value="<?=$cartera;?>" name="cartera"/>
			</form>
		<?
	}
	if (isset($_GET['crearCartera'])){
		$cartera = urlencode(serialize($cartera));
		if (isset ($monederoPrensa)){
			$monederoPrensa = urlencode(serialize($monederoPrensa));
		}
		if (isset ($monederoAlimentos)){
			$monederoAlimentos = urlencode(serialize($monederoAlimentos));
		}
		if (isset ($monederoOcio)){
			$monederoOcio = urlencode(serialize($monederoOcio));
		}
		?>
			<form id="form2" name="form2" action="" method="GET"/>
				<input type="submit" value="Compras" name="compras"/>
				<input type="submit" value="Saldos" name="saldos"/>
				<input type="hidden" value="<?=$cartera;?>" name="cartera"/>
				<?
					if (isset($monederoPrensa)){
						?><input type="hidden" value="<?=$monederoPrensa;?>" name="monederoPrensa"/><?
					}
					if (isset($monederoOcio)){
						?><input type="hidden" value="<?=$monederoOcio;?>" name="monederoOcio"/><?
					}
					if (isset($monederoAlimentos)){
						?><input type="hidden" value="<?=$monederoAlimentos;?>" name="monederoAlimentos"/><?
					}
				?>
			</form>
			<span><?=$error;?></span>
		<?
		
	}
	elseif(isset($_GET['compras'])){
		$cartera = urlencode(serialize($cartera));
		if (isset ($monederoPrensa)){
			$monederoPrensa = urlencode(serialize($monederoPrensa));
		}
		if (isset ($monederoAlimentos)){
			$monederoAlimentos = urlencode(serialize($monederoAlimentos));
		}
		if (isset ($monederoOcio)){
			$monederoOcio = urlencode(serialize($monederoOcio));
		}
		?>
			<form id="form3" name="form3" action="" method="GET"/>
				<select name="seleccionar">
					<option value="ninguna">Selecciona una opción</option>
					<option value="prensa">Prensa</option>
					<option value="alimentos">Alimentos</option>
					<option value="ocio">Ocio</option>
				</select>
				<br><br>
				<label for="saldoBolsillo">Saldo</label>
				<input type="number" placeholder="Solo formato numérico" id="saldoBolsillo" name="saldoBolsillo"/>
				<input type="submit" value="Introducir Saldo" name="introducirBolsillo"/>
				<input type="hidden" value="<?=$cartera;?>" name="cartera"/>
				<input type="hidden" value="Crearcartera" name="crearCartera"/>
				<?
					if (isset($monederoPrensa)){
						?><input type="hidden" value="<?=$monederoPrensa;?>" name="monederoPrensa"/><?
					}
					if (isset($monederoOcio)){
						?><input type="hidden" value="<?=$monederoOcio;?>" name="monederoOcio"/><?
					}
					if (isset($monederoAlimentos)){
						?><input type="hidden" value="<?=$monederoAlimentos;?>" name="monederoAlimentos"/><?
					}
				?>
			</form>
		<?
	}
	elseif(isset($_GET['saldos'])){
		if (isset($_GET['monederoAlimentos'])){
			$monederoAlimentos = unserialize(urldecode($_GET['monederoAlimentos']));
		}
		if (isset($_GET['monederoOcio'])){
			$monederoOcio = unserialize(urldecode($_GET['monederoOcio']));
		}
		if (isset($_GET['monederoPrensa'])){
			$monederoPrensa = unserialize(urldecode($_GET['monederoPrensa']));
		}
		?>
			<table>
				<tr><th colspan="2">Resumen de Gastos</th></tr>
		<?
		if (isset($monederoPrensa)){
			?>
				<tr>
					<td>Gastado en Prensa</td>
					<td><?=$monederoPrensa->getSaldo();?></td>
				</tr>
			<?
		}
		if (isset($monederoAlimentos)){
			?>
				<tr>
					<td>Gastado en Alimentos</td>
					<td><?=$monederoAlimentos->getSaldo();?></td>
				</tr>
			<?
		}
		if (isset($monederoOcio)){
			?>
				<tr>
					<td>Gastado en Ocio</td>
					<td><?=$monederoOcio->getSaldo();?></td>
				</tr>
			<?
		}
		?>
			<tr>
				<td>Saldo restante</td>
				<td><?=$cartera->getSaldo();?></td>
			</tr>
		<?
		
		?></table><?
		
		$cartera = urlencode(serialize($cartera));
		if (isset($monederoAlimentos)){
			$monederoAlimentos = urlencode(serialize($monederoAlimentos));
		}
		if (isset($monederoOcio)){
			$monederoOcio = urlencode(serialize($monederoOcio));
		}
		if (isset($monederoPrensa)){
			$monederoPrensa = urlencode(serialize($monederoPrensa));
		}
		?>
			<form id="form3" name="form3" action="" method="GET"/>
				<input type="submit" value="Volver" name="volver"/>
				<input type="hidden" value="<?=$cartera;?>" name="cartera"/>
				<input type="hidden" value="Crearcartera" name="crearCartera"/>
				<?
					if (isset($monederoPrensa)){
						?><input type="hidden" value="<?=$monederoPrensa;?>" name="monederoPrensa"/><?
					}
					if (isset($monederoOcio)){
						?><input type="hidden" value="<?=$monederoOcio;?>" name="monederoOcio"/><?
					}
					if (isset($monederoAlimentos)){
						?><input type="hidden" value="<?=$monederoAlimentos;?>" name="monederoAlimentos"/><?
					}
				?>
			</form>
		<?
	}

	