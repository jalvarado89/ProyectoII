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
		$user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
		
        if (Auth::attempt($user)) {
            return Redirect::to('tareas');
        } else {
        	//return Response::Json($user);
            // validation not successful, send back to form
            return Redirect::to('login')->withErrors(array('invalid_credentials' => 'Acceso Denegado'));
        }

	}


	public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }


    public function isLogged()
    {
        if (Auth::guest()) {
            return Redirect::to('login');
        }
    }

	
	public function store()
	{
		$name = Input::get('name');
		$username = Input::get('username');
		$password = Input::get('password');
		$password = Hash::make($password);
		$remember = Input::get('_token');
		$user = new User();
		$user->name = $name;
		$user->username = $username;
		$user->password = $password;
		$user->remember_token = $remember;
		$user->save();
		Auth::attempt(array('username' => $username , 'password' => $password));
		return Redirect::to('tareas');
	}

}
