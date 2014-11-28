<h1>New Task</h1>

{{ Form::open(array('url' => 'crear')) }}
	
	<label for="name">Name:</label>
	{{Form::text('name', '' ,array('placeholder' => 'Name', 'required' => 'true'))}}	
	{{ Form::submit('Create', array())}}
{{ Form::close() }}