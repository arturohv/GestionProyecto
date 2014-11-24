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
}