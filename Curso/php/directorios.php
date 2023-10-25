<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<pre>
		<?php
			echo getcwd();
			
			$directorio = scandir(getcwd());
			var_dump($directorio);
			
			chdir("../");
			echo getcwd();
		?>
	</pre>
</body>
</html>