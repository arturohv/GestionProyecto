<?php

class Cliente extends Eloquent
{
    protected $table      = 'clientes';
    protected $fillable   = array('nombre','email','telefono_resi','telefono_movil','direccion_fisica');
    protected $guarded    = array('id');
    public    $timestamps = false;
}