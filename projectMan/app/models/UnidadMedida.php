<?php

class UnidadMedida extends Eloquent
{
    protected $table      = 'unidad_medidas';
    protected $fillable   = array('simbolo','nombre');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function getListCmb(){
		$registros = DB::table('unidad_medidas')->select('id', 'nombre')->orderBy('nombre')->get();
		$lista = array();
		
		foreach ($registros as $registro)
		{
		     $lista[$registro->id] = $registro->nombre;
		}

		return $lista;
	}

	public function recurso() {
		return $this->hasMany('Recurso'); // this matches the Eloquent model
	}	
}