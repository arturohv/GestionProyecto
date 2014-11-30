<?php

class RiesgoInicial extends Eloquent
{
    protected $table      = 'riesgos_iniciales';
    protected $fillable   = array('proyectoid','descripcion','fecha_tope');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function getListRiesgos($id)
	{
		$sql = 'Select id, proyectoid, descripcion, fecha_tope from riesgos_iniciales
		where proyectoid = ' . $id . ' order by descripcion';
				return DB::select($sql);
	}

	
}