<?
	$fecha="2015-10-25 20:00:00";
	$segundos=strtotime($fecha) - strtotime('now');
	echo floor($segundos/3600),':';
	echo floor(($segundos%3600)/60),':';
	echo floor(($segundos%3600)%60),'<br>';
	if (isset($_REQUEST[parar])) exit();
	header('Refresh: 1; url=fecha5.php');
?>
<form methot="post">
<input type="submit" name="parar" value="Detener">
</form>
<? unset($_REQUEST[parar]); ?>