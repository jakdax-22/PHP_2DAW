<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<pre>
	<?php
		$minombre = $_GET['nombre'];
		
		$servidor = "localhost";
		$usuario = "root";
		$pass = "root";
		$encontrado = false;
		$conn = mysqli_connect($servidor,$usuario,$pass) or die("Error de conexión");
		mysqli_select_db($conn,"usuarios");
		
		$consultar = "SELECT nombre FROM clientes";
		$registros = mysqli_query($conn,$consultar);
		
		?><label for="seleccionar">Elige un nombre </label>
		  <select name="seleccionar" id="seleccionar">
			<?while ($registro = mysqli_fetch_row($registros)){
				?><option value="<?=$registro[0];?>"><?$registro[0];?></option><?
			}?>
		  </select>
		  
		  <input type="submit" value="actualizar"
		
		
	
</pre>
</body>
</html>