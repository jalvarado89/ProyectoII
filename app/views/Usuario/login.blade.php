<h1>Login</h1>

{{ Form::open(array('url' => 'login')) }}
	<label for="username">UserName:</label>
	{{Form::text('username', Input::old('username'), array('placeholder' => 'UserName', 'required' => 'true'))}}
	<br>
	<label for="password">Password:</label>
	{{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required' => 'true')) }}
	<br>
	{{ Form::submit('Login', array())}}
	{{ Form::button('Registrarse', array('url' => 'registro')) }}
{{ Form::close() }}