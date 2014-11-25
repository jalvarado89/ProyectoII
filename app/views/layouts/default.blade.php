<!DOCTYPE html>
<html>
<head>
	<title> {{ $titulo }} </title>
</head>
<body>
	<?php
		if (Auth::check()) {
			echo "<a href='logout'>Cerrar Session</a>";
			echo "<h3>Usuario Logueado</h3>";
		}
	?>
	{{ $content }}
</body>
</html>