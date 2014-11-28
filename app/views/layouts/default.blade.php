<!DOCTYPE html>
<html>
<head>
	<title> {{ $titulo }} </title>
	{{HTML::script('js/jquery-1.10.2.js');}}
  	{{HTML::script('js/jquery-ui-1.10.4.custom.min.js');}}
  	{{HTML::script('js/script.js');}}
  	{{ HTML::style('css/style.css') }}
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