<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<pre>
	<?php
		var_dump($_FILES);
		
		$directorio = ini_get("upload_tmp_dir");
		echo $directorio;
		/*$directorioTemp = $_FILES ['imagen']['tmp_name'];
		move_uploaded_file($directorioTemp,$FILES['imagen']['name'])*/
	?>
</pre>
</body>
</html>