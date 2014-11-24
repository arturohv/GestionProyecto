<?php

class Cliente extends Eloquent
{
    protected $table      = 'clientes';
    protected $fillable   = array('nombre','email','telefono_resi','telefono_movil','direccion_fisica');
    protected $guarded    = array('id');
    public    $timestamps = false;


    public function cliente() {
		return $this->hasMany('Proyecto'); // this matches the Eloquent model
	}


    public static function getListCmb(){
		$registros = DB::table('clientes')->select('id', 'nombre')->orderBy('nombre')->get();
		$lista = array();
		
		foreach ($registros as $registro)
		{
		     $lista[$registro->id] = $registro->nombre;
		}

		return $lista;
	}
}
