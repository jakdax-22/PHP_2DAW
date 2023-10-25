<style>
		body {
			font-family:'Roboto',sans-serif;
		}
		
		a {
			text-decoration:none;
			color: black;
		}
		.rojo {
			color:red;
		}
		
        .formulario {
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

        .formulario input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .formulario input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .formulario input[type="submit"]:hover {
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
		.mes {
			color : #2ECC71;
		}
		.anyo {
			color: #2ECCB6;
		}
		
</style>

<form class="formulario" action="ejercicio18.php" method="GET">
	<label for="mes">Mes </label>
	<input type="number" id="mes" name="mes" value="<?=$_GET['mes'];?>"/><br>
	<label for="anyo">Año </label>
	<input type="number" id="anyo" name="anyo" value="<?=$_GET['anyo'];?>"/>
	<label for="dia">Dia </label>
	<input type="number" id="dia" name="dia" value="<?=$_GET['dia'];?>"/>
	<label for="titulo">Titulo </label>
	<input type="text" id="titulo" name="titulo"/>
	<label for="hora">Hora </label>
	<input type="text" id="hora" name="hora"/><br><br>
	<label for="lugar">Lugar </label>
	<input type="text" id="lugar" name="lugar"/><br><br>
	<input type="submit" name="enviar" value="Enviar"/>
	<input type="hidden" name="mes" value="<?=$_GET['mes'];?>"/>
	<input type="hidden" name="anyo" value="<?=$_GET['anyo'];?>"/>
	<input type="hidden" name="dia" value="<?=$_GET['dia'];?>"/>
	<? /*if (isset($_GET['citas'])){
		?>
		<input type="hidden" name="citas" value="<?=$_GET['citas'];?>"/><?
	}*/
	/*print_r ($_GET['citas'])*/?>	
</form>