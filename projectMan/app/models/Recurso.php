<?php

class Recurso extends Eloquent
{
    protected $table      = 'recursos';
    protected $fillable   = array('proyectoid','descripcion','cantidad','medidaid');
    protected $guarded    = array('id');
    public    $timestamps = false;

     public static function getListRecursos($id)
	{
		$sql = 'select r.id, r.descripcion, r.cantidad, u.simbolo
				from recursos r inner join unidad_medidas u on u.id = r.medidaid
				where r.proyectoid = '. $id . '	order by r.descripcion';
				return DB::select($sql);
	}

	public function medida() {
		return $this->belongsTo('UnidadMedida','medidaid');
	}
}