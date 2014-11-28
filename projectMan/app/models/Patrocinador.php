<?php

class Patrocinador extends Eloquent
{
    protected $table      = 'patrocinadores';
    protected $fillable   = array('nombre','cargoid','departamentoid','rama_ejecutivaid');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public function patrocinador() {
		return $this->hasMany('Proyecto'); // this matches the Eloquent model
	}

	public function cargo() {
		return $this->belongsTo('Cargo','cargoid');
	}

	public function departamento() {
		return $this->belongsTo('Departamento','departamentoid');
	}

	public function rama() {
		return $this->belongsTo('RamaEjecutiva','rama_ejecutivaid');
	}

	public function patrocinador_proyecto() {
		return $this->belongsTo('Patrocinador_Proyecto','id');
	}

	public static function getListIndex()
	{
		$sql = 'select g.id as id, g.nombre as nombre, c.nombre as cargo, d.nombre as departamento, r.nombre as rama 
				from patrocinadores g
				inner join cargos c on g.cargoid = c.id
				inner join departamentos d on g.departamentoid = d.id
				inner join ramas_ejecutivas r on g.rama_ejecutivaid = r.id
				order by g.nombre';
				return DB::select($sql);
	}

	public static function getListCmbAll(){		
		$sql = 'select id, nombre 
				from patrocinadores';
		
		$registros = DB::select($sql);		
		$lista = array();
		
		foreach ($registros as $registro)
		{
		     $lista[$registro->id] = $registro->nombre;
		}

		return $lista;
	}

	public static function getListCmb($id){		
		$sql = 'select p.id, p.nombre 
				from patrocinadores p
				where (p.id not in (Select patrocinadorid from patrocinadores_proyectos where proyectoid = ' . $id . '))
				and (p.id not in (Select patrocinadorid from proyectos where id = ' . $id . '))';
		
		$registros = DB::select($sql);		
		$lista = array();
		
		foreach ($registros as $registro)
		{
		     $lista[$registro->id] = $registro->nombre;
		}

		return $lista;
	}


}