<?php

class tasks extends Eloquent
{
	protected $table = 'tasks';
	protected $fillable = array('titulo', 'prioridad', 'descripcion', 'usuarioid');
	protected $guarded  = array('id');
	public    $timestamps = false;
}