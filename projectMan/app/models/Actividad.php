<?php

class Actividad extends Eloquent
{
    protected $table      = 'actividades';
    protected $fillable   = array('proyectoid','descripcion','fecha_inicio','fecha_fin');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function getListActividades($id)
	{
		$sql = 'Select id, proyectoid, descripcion, fecha_inicio, fecha_fin from actividades
		where proyectoid = ' . $id . ' order by descripcion';
		return DB::select($sql);
	}

	
}