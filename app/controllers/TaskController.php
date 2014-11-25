<?php

class TaskController extends \BaseController {


	public function index()
	{
		//$Tasks = Task::all();
		$this->layout->titulo = 'Tareas';
		$this->layout->nest('content', 'Task.index');
		//$this->layout->nest(
			//'content',
			//'pilotos.index',
			//array(
				//'pilotos' => $pilotos
			//)
		//);

		//return Response::Json($aviones);
	}



	public function create()
	{
		//
	}



	public function store()
	{
		//
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
