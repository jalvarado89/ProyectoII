<!DOCTYPE html>
<html>
<head>
	<title> {{ $titulo }} </title>
</head>
<body>
	<?php
		if (Auth::check()) {
			echo "<h3> <a href='logout'>Cerrar Session</a> User:".Auth::user()->username." </h3>";
		}
	?>
	{{ $content }}
</body>
</html>