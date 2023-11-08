<?
		echo date("H:i:s");
		if (isset($_GET[parar])) exit();
		header('Refresh: 1; url=fecha1.php');
?>
<form methot="get">
<input type="submit" name="parar" value="Detener">
</form>
	