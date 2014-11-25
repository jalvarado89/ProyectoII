<?php

class UserController extends \BaseController {

	
	public function index()
	{
		$this->layout->titulo = 'Login';
		$this->layout->nest('content', 'Usuario.login');
	}


	
	public function create()
	{
		$this->layout->titulo = 'Registro';
		$this->layout->nest('content', 'Usuario.registro');
	}


	public function login()
	{
		$userdata = array(
            'username'     => Input::get('username'),
            'password'  => Input::get('password')
        );

        if (Auth::attempt($userdata)) {
            return Redirect::to('tareas');
        } else {
            // validation not successful, send back to form
            return Redirect::to('login')->withErrors(array('invalid_credentials' => 'Acceso Denegado'));
        }

	}


	
	public function store()
	{
		$name = Input::get('name');
		$username = Input::get('username');
		$password = Input::get('password');
		$password = Hash::make($password);
		$user = new User();
		$user->nombre = $name;
		$user->nombre_usuario = $username;
		$user->contrasena = $password;
		$user->save();
		Auth::attempt(array('nombre_usuario' => $username , 'contrasena' => $password));
		return Redirect::to('tareas');
	}


	
	public function show($id)
	{
		//
	}


	
	public function edit($id)
	{
		//
	}


	
	public function update($id)
	{
		//
	}


	
	public function destroy($id)
	{
		//
	}


}
