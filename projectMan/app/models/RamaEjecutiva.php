<?php

class RamaEjecutiva extends Eloquent
{
    protected $table      = 'ramas_ejecutivas';
    protected $fillable   = array('nombre','descripcion');
    protected $guarded    = array('id');
    public    $timestamps = false;
}