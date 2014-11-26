<?php

class TaskController extends \BaseController {


	public function index()
	{
		$userid = Auth::user()->id;
		$tasks = tasks::where('usuarioid' , '=' , $userid)->get();
		//return Response::Json($tasks);
		$this->layout->titulo = 'Tareas';
		//$this->layout->nest('content', 'Task.index');
		$this->layout->nest(
			'content',
			'Task.index',
			array(
				'tasks' => $tasks
			)
		);

		
	}



	public function create()
	{
		$this->layout->titulo = 'New Task';
		$this->layout->nest('content', 'Task.create');
	}



	public function store()
	{
		$name = Input::get('name');
		$userid = Auth::user()->id;

		$Task = new tasks();
		$Task->nombre = $name;
		$Task->estado = 1;
		$Task->usuarioid = $userid;
		$Task->save();
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
