<?php

class Proyecto extends Eloquent
{
    protected $table      = 'proyectos';
    protected $fillable   = array('nombre','empresa','fecha','clienteid','patrocinadorid','proposito_justificacion','gerenteid','descripcion','requisito_producto','requisito_proyecto','presupuesto_inicial','requisito_aprobacion');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public function cliente() {
		return $this->belongsTo('Cliente','clienteid');
	}

	public function patrocinador() {
		return $this->belongsTo('Patrocinador','patrocinadorid');
	}

	public function gerente() {
		return $this->belongsTo('Gerente','gerenteid');
	}

	public static function getListPatrocinadores($id)
	{
		$sql = 'select pp.id, p.id, pt.nombre
				from patrocinadores_proyectos pp
				inner join proyectos p on p.id = pp.proyectoid
				inner join patrocinadores pt on pt.id = pp.patrocinadorid
				where pp.proyectoid = '.$id;
				return DB::select($sql);
	}
	
}