<?php

class RamaEjecutiva extends Eloquent
{
    protected $table      = 'ramas_ejecutivas';
    protected $fillable   = array('nombre','descripcion');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public function gerente() {
		return $this->hasMany('Gerente'); // this matches the Eloquent model
	}

	public static function getListRamas(){
		$ramas = DB::table('ramas_ejecutivas')->select('id', 'nombre')->orderBy('nombre')->get();
		$lstRamas = array();

		foreach ($ramas as $rama)
		{
		     $lstRamas[$rama->id] = $rama->nombre;
		}

		return $lstRamas;
	}
}