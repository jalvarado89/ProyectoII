<h1>New Task</h1>

{{ Form::open(array('url' => 'crear')) }}
	
	<label for="titulo">Titulo:</label>
	{{Form::text('titulo', '' ,array('placeholder' => 'Titulo', 'required' => 'true'))}}
	<label for="prioridad">Prioridad:</label>
	{{ Form::select('prioridad', ['', 'Nueva', 'En Proceso', 'Terminada', 'Verificada'], 0) }}
	<br>
	<label for="descripcion">Descripcion:</label>
	<br>
	{{Form::textarea('descripcion', '' ,array('placeholder' => 'Descripcion', 'required' => 'true'))}}
	<br>
	{{ Form::submit('Create', array())}}
{{ Form::close() }}