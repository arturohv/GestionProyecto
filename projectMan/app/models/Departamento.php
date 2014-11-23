<?php

class Departamento extends Eloquent
{
    protected $table      = 'departamentos';
    protected $fillable   = array('nombre','descripcion');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public function gerente() {
		return $this->hasMany('Gerente'); // this matches the Eloquent model
	}

	public static function getListDeptos(){
		$departamentos = DB::table('departamentos')->select('id', 'nombre')->orderBy('nombre')->get();
		$lstDeptos = array();

		foreach ($departamentos as $departamento)
		{
		     $lstDeptos[$departamento->id] = $departamento->nombre;
		}
		return $lstDeptos;
	}
}