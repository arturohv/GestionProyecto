<?php

class Calificacion extends Eloquent
{
    protected $table      = 'calificaciones';
    protected $fillable   = array('nombre');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public function alcance() {
		return $this->hasMany('Alcance'); // this matches the Eloquent model
	}	

	public static function getListCmbAll(){		
		$sql = 'select id, nombre 
				from calificaciones';
		
		$registros = DB::select($sql);		
		$lista = array();
		
		foreach ($registros as $registro)
		{
		     $lista[$registro->id] = $registro->nombre;
		}

		return $lista;
	}
}