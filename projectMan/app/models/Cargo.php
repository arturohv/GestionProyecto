<?php

class Cargo extends Eloquent
{
    protected $table      = 'cargos';
    protected $fillable   = array('nombre','descripcion');
    protected $guarded    = array('id');
    public    $timestamps = false;
}