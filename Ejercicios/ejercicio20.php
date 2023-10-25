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
				
</style>


<?
	/* Confeccionar una clase llamada menú, se gestionará a través de un formulario, este tendrá como botones :
	- Añadir opción es el botón para el contenido de un input type text que tiene a la izquierda.
	- Dos botones, uno para representar el menú de manera horizontal y otro para representarlo de manera vertical.
	Debe de haber otro botón para volver*/
	
	include ("./clases/Menu.php");
	
	if (isset($_GET['menu'])){
		$menu = unserialize(urldecode($_GET['menu']));
	}
	else {
		$menu = new Menu();		
	}
	
	if (isset ($_GET['introducir'])){
		
		$menu->introducir($_GET['url']);
	}
	
	$menu = urlencode(serialize($menu));
		
		?>
			<form id="form1" name="form1" action="" method="GET">
				<label for="url">URL</label>
				<input type="text" name="url" id="url"/>
				<input type="submit" name="introducir" value="Introducir" placeholder="Introduce la url aquí"><br>
				<input type="hidden" name="menu" value=<?=$menu;?>><br>
			</form>
			<form id="form2" name="form2" action="ejercicio20_2.php" method="GET">
				<fieldset>
					<legend>Mostrar los resultados en formato</legend>
					<input type="submit" name="horizontal" value="Horizontal"><br><br><br>
					<input type="submit" name="vertical" value="Vertical"><br>
					<input type="hidden" name="menu" value=<?=$menu;?>><br>
				</fieldset>
			</form>
		<?
	

	
?>