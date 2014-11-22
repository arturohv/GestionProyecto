<?php

class Departamento extends Eloquent
{
    protected $table      = 'departamentos';
    protected $fillable   = array('nombre','descripcion');
    protected $guarded    = array('id');
    public    $timestamps = false;
}