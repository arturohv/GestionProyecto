<?php

class Empleado extends Eloquent
{
    protected $table      = 'empleados';
    protected $fillable   = array('nombre','cargoid','departamentoid','rama_ejecutivaid');
    protected $guarded    = array('id');
    public    $timestamps = false;

    

	public function cargo() {
		return $this->belongsTo('Cargo','cargoid');
	}

	public function departamento() {
		return $this->belongsTo('Departamento','departamentoid');
	}

	public function rama() {
		return $this->belongsTo('RamaEjecutiva','rama_ejecutivaid');
	}

	public static function getListIndex()
	{
		$sql = 'select g.id as id, g.nombre as nombre, c.nombre as cargo, d.nombre as departamento, r.nombre as rama 
				from empleados g
				inner join cargos c on g.cargoid = c.id
				inner join departamentos d on g.departamentoid = d.id
				inner join ramas_ejecutivas r on g.rama_ejecutivaid = r.id
				order by g.nombre';
				return DB::select($sql);
	}


}