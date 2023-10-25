<style>		
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
		form {
			margin-left:225px;
			margin-top: 420px;
			align: center;
			width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
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
	include ("./clases/Menu.php");

	$menu = unserialize(urldecode($_GET['menu']));
	
	?>
	<table>
	<?
	if (isset($_GET['horizontal'])){
		?>
		<tr>
			<?
			foreach ($menu->direcciones as $direccion){
				?><td><a href="<?="https://".$direccion;?>"><?=$direccion;?></a></td><?
			}
		?>
		</tr>
		<?
	}
	else {
		foreach ($menu->direcciones as $direccion){
			?><tr><td><a href="<?="https://".$direccion;?>"><?=$direccion;?></a></tr></td><?
		}
	}
	?>
	</table>
	<?
	$menu = urlencode(serialize($menu));
	?>
	<form id="form3" name="form3" action="ejercicio20.php" method="GET">
		<input type="submit" name="volver" value="←"/>
		<input type="hidden" name="menu" value="<?=$menu;?>"/>
	</form>
