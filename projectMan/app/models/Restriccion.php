<?php

class Restriccion extends Eloquent
{
    protected $table      = 'premisas_restricciones';
    protected $fillable   = array('proyectoid','nombre');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function getListRestricciones($id)
	{
		$sql = 'Select id, proyectoid, nombre from premisas_restricciones
		where proyectoid = ' . $id . ' order by nombre';
		return DB::select($sql);
	}

	
}