<?php

class TipoComunicacion extends Eloquent
{
    protected $table      = 'tipo_comunicacion';
    protected $fillable   = array('nombre');
    protected $guarded    = array('id');
    public    $timestamps = false;
    

	public static function getListTipos(){
		$cargos = DB::table('tipo_comunicacion')->select('id', 'nombre')->orderBy('nombre')->get();
		$lstCargos = array();
		
		foreach ($cargos as $cargo)
		{
		     $lstCargos[$cargo->id] = $cargo->nombre;
		}

		return $lstCargos;
	}
}