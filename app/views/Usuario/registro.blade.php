<h1>Registro</h1>

{{ Form::open(array('url' => 'registro')) }}
	
	<label for="name">Name:</label>
	{{Form::text('name', Input::old('name'), array('placeholder' => 'Name', 'required' => 'true'))}}
	<br>
	<label for="username">UserName:</label>
	{{Form::text('username', Input::old('username'), array('placeholder' => 'UserName', 'required' => 'true'))}}
	<br>
	<label for="password">Password:</label>
	{{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required' => 'true')) }}
	<br>
	{{ Form::submit('Login', array())}}
{{ Form::close() }}