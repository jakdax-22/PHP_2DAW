<style>
table {
  width: 60%;
  border-collapse: collapse;
  margin-bottom: 20px;
  margin: 0 auto;
}

th, td {
  height: 100px;
  border: 1px solid #ccc;
  padding: 10px;
  text-align: center;
}
td img {
	width:100px;
	height:100px;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

tbody tr {
  animation: fadeIn 0.5s ease-in-out;
}

tbody tr:nth-child(odd) {
  background-color: #f2f2f2;
}

tbody tr:hover {
  background-color: #ffc;
  transform: scale(1.05);
  transition: background-color 0.3s ease, transform 0.3s ease;
}
form {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
textarea {
  width: 50%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type="submit"] {
  margin-top: 20px;
  background-color: #4caf50;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

input[type="text"]:focus,
textarea:focus {
  outline: none;
  border-color: #4caf50;
  box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}
</style>

<?
	/* Crear un libro de visitas con fotografía incluida, a través de un formulario donde nos pida nombre,fotografía
	y comentario, y va a tener dos botones, uno es añadir comentario y el otro es ver comentarios,cuando vayamos a ver 
	todos los comentarios, al darle se montará una tabla con la foto, el nombre y el comentario*/

	//<form enctype="multipart/form-data" method="post">
?>	
	<pre>
<?php
    if(!isset($_POST["ver"])) {
		if (isset ($_POST['introducir'])){
		$fichero=fopen('ejercicio025_2.txt', "a+");
		$foto = fopen($_FILES['foto']['tmp_name'],"r");
		fputcsv($fichero, array(fread($foto,$_FILES['foto']['size']), $_POST['nombre'],$_POST['comentario']),",",'"');
		rewind($fichero);
		fclose($fichero);
		}
        ?>
		<form enctype="multipart/form-data" action="#" method="POST">
			<input type="text" name="nombre" id="nombre"><br>
			<textarea name="comentario" placeholder="Introduce un comentario"></textarea><br>
			<input type="file" name="foto"><br>
			<input type="submit" value="Introducir" name="introducir">
			<input type="submit" value="Ver listado" name="ver">
		</form>
    <?
    }
	elseif (isset ($_POST['ver'])){
		$fichero = fopen ('ejercicio025_2.txt',"a+");
		?> <table>
		  <thead>
			<tr>
			  <th>Foto</th>
			  <th>Nombre</th>
			  <th>Descripción</th>
			</tr>
		  </thead>
		  <tbody>
		<?
			$fichero = fopen("ejercicio025_2.txt","r+");
			$i = 1;
			while (($array = fgetcsv($fichero,filesize("ejercicio025_2.txt"),",",'"')) != false){
				?><tr><?
						?><td><img src="imagen01.php?linea=<?=$i;?>"/></td>
						<?
							?><td><?=$array[1];?></td><?
							?><td><?=$array[2];?></td><?
				$i++;
				?></tr><?
			}
				?> 
			</tbody>
		</table><?
		fclose($fichero);
	}
    
?>
</pre>

