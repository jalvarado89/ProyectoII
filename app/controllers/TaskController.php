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
		$titulo = Input::get('titulo');
		$prioridad = Input::get('prioridad');
		$descripcion = Input::get('descripcion');
		$userid = Auth::user()->id;

		$Task = new tasks();
		$Task->titulo = $titulo;
		$Task->prioridad = $prioridad;
		$Task->descripcion = $descripcion;
		$Task->usuarioid = $userid;
		//return Response::Json($Task);
		$Task->save();
		return Redirect::to('tareas');
	}



	public function edit($id)
	{
		$tasks = tasks::find($id);
		//return Response::Json($tasks);
		$this->layout->titulo = 'Update Task';
		$this->layout->nest(
			'content',
			'Task.update',
			array(
				'tasks' => $tasks
			)
		);
	}



	public function update($id)
	{
		$name = Input::get('Name');

		$Task = tasks::find($id);
		$Task->nombre = $name;
		$Task->save();
		return Redirect::to('tareas');
	}


	
	public function destroy($id)
	{
		$tarea = tasks::find($id);
		$tarea->delete();
		return Redirect::to('tareas');
	}


}
