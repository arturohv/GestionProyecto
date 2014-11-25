<?php

class PatrocinadorProyecto extends Eloquent
{
    protected $table      = 'patrocinadores_proyectos';
    protected $fillable   = array('proyecto_id','patrocinador_id');
    protected $guarded    = array('id');
    public    $timestamps = false;

    
}