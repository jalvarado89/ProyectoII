<h1>Edit Task</h1>

{{ Form::open(array('url' => "tasks/$tasks->id/update")) }}
	{{ Form::label('titulo', 'Titulo') }}
	{{ Form::text('titulo', $tasks->titulo) }}
	<br>
	<br>
	{{ Form::label('prioridad', 'Prioridad') }}
	{{ Form::select('prioridad', ['', 'Nueva', 'En Proceso', 'Terminada', 'Verificada'], $tasks->prioridad) }}
	<br>
	<br>
	{{ Form::label('descripcion', 'Descripcion') }}
	{{ Form::text('descripcion', $tasks->descripcion) }}
	<br>
	<br>
	{{Form::submit('Save', array())}}

{{ Form::close() }}