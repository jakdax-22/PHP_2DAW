<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<pre>
	<?php
		$to = "enriqueiranzomartinez4@gmail.com";
		$subject = "Email de confirmación";
		$message = "Hola, confirma haciendo click en el siguiente enlace";
		$from = "enriqueiranzomartinez4@gmail.com";
		$headers = "From: $from";
		
		mail ($to,$subject,$message,$headers);
		echo "Mail enviado";
	?>
</pre>
</body>
</html>