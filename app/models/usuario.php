<?php

class usuario extends Eloquent
{
	protected $table = 'usuario';
	protected $fillable = array('nombre', 'nombre_usuario' , 'contrasena');
	protected $guarded  = array('id');
	public    $timestamps = false;
}