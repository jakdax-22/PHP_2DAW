<?
	if (isset($_GET['aceptar'])){
		$caducidad = time () + (60*60*24*365);
		setcookie ("micookie",1,$caducidad);
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		if (!isset ($_GET['aceptar']) && !isset($_COOKIES['micookie'])) : ?> 
			<div>
				<h2> Cookies </h2>
				<p> Debes aceptar las cookies para seguir navegando </p>
				<a href="?aceptar=1">Aceptar</a>
			</div>
		
		<? endif;
	?>
</body>
</html>