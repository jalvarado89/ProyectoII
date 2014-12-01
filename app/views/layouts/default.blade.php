<!DOCTYPE html>
<html>
<head>
	<title> {{ $titulo }} </title>
	{{ HTML::style('//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css') }}
	{{HTML::script('//code.jquery.com/jquery-1.10.2.js');}}	
	{{HTML::script('//code.jquery.com/ui/1.11.0/jquery-ui.js');}}  	
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