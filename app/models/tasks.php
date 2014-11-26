<?php

class tasks extends Eloquent
{
	protected $table = 'tasks';
	protected $fillable = array('nombre', 'estado', 'usuarioid');
	protected $guarded  = array('id');
	public    $timestamps = false;
}