<?
    //Poner botones añadir opcion , item para guardar url , boton para representar el menu con los enlaces , enlace adiccional ,
    //volver , y otro para verlo en disposicion vertical
?>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    .texto{
        width: 500px;
        height: 30px;
        border-radius: 10px;
        border: 3px solid red;
        font-size: 20px;
        margin-bottom:100px;
        margin-top:20px;
    }
    .texto:focus{
        border: 3px solid red;
        outline: none;
    }
    form{
        width: 70%; 
        margin:200px;
        text-align: center;
    }
    .boton{
        display: inline;
        margin-left: 20px;
        width: 200px;
        height: 50px;
        background-color: white;
        border: 2px solid red;
        border-radius: 10px;
    }
    .boton:hover{
        background-color: red;
        color: white;
    }
    label{
        text-align: center;
    }
    
</style>
<?
	//Si sacas el input type hidden de los otros dos formularios deserializas el array para poder usarlo aquí, ya que es el único
	//lugar donde vas a meter valores en el array
	if(isset($_GET['array'])){
		$array = unserialize(urldecode($_GET['array']));
	}
	//En el caso contrario, es decir, cuando comienzas el programa lo inicias vacío
	else {
		$array = [];
	}
	//Si le das al botón añadir haces lo siguiente:
	if (isset($_GET['añadir'])){
	//Metemos en la última posición del array lo que sacamos del input que tiene la url
		array_push($array,$_GET['url']);
	}
	//Antes de pasar el array al formulario como tipo hidden hay que serializarlo, si no tendrás error
	$array = urlencode(serialize($array));
?>
<form action="" method="get">
    <label for="url">Escribe la URL:</label><br>
    <input type="text" class="texto" name="url"><br>
    <input type="submit" name="añadir" value="Añadir opción" class="boton">
	<!-- Aquí también tienes que poner el array como hidden aunque se lo pases al mismo fichero, puesto que recarga el programa
	y si no se lo pasas como hidden te va a machacar el array con todo su contenido-->
    <input type="hidden" name="array" value="<?=$array?>"/>
</form>
<form action="claseMenuPolo_2.php" method="GET">
<!--Esto lo tienes guay, solo que dijo que lo hicieramos en dos ficheros, por eso te pongo ese action-->
    <input type="submit" name="representarHorizontal" value="Representar Horizontal" class="boton">
    <input type="submit" name="representarVertical" value="Representar Vertical" class="boton">
    <input type="hidden" name="array" value="<?=$array;?>"/>
</form>

