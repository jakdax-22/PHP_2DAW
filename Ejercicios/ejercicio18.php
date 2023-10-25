<style>
		body {
			font-family:'Roboto',sans-serif;
		}
		
		a {
			text-decoration:none;
			color: black;
			padding: 20px 50px;
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
<?
	/*Crear un calendario de eventos, es decir, a cada uno de los días le vamos a poder añadir citas, se elige un mes, nos elige un año
	y en el calendario se van a poder añadir eventos (sensible a submit), al pulsar se abrirá una ventana donde escribamos el contenido del
	evento en la forma que queramos*/
	include ("./funciones/generarCalendario18.php");
	
	
	if (!isset($_GET['enviar'])){
		?>
		<form class="formulario">
			<label for="mes">Mes </label>
			<input type="number" id="mes" name="mes" placeholder="Solo valores numéricos"/><br>
			<label for="anyo">Año </label>
			<input type="number" id="anyo" name="anyo" placeholder="Solo valores numéricos"/>
			<input type="submit" name="enviar" value="Enviar"/>
		
		</form>
		<?
	}
	else {
		generarCalendario18($_GET['mes'],$_GET['anyo']);
	}
?>