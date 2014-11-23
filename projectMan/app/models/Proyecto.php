<?php

class Proyecto extends Eloquent
{
    protected $table      = 'proyectos';
    protected $fillable   = array('nombre','empresa','fecha','clienteid','patrocinadorid','proposito_justificacion','gerenteid','descripcion','requisito_producto','requisito_proyecto','presupuesto_inicial','requisito_aprobacion');
    protected $guarded    = array('id');
    public    $timestamps = false;
}