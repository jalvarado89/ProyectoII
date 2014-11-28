<h1>Edit Task</h1>

{{ Form::open(array('url' => "tasks/$tasks->id/update")) }}
	{{ Form::label('nombre', 'Name') }}
	{{ Form::text('Name', $tasks->nombre) }}
	<br>
	{{Form::submit('Save', array())}}

{{ Form::close() }}