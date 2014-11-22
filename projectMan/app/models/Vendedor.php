<?php

class Vendedor extends Eloquent
{
    protected $table      = 'vendedor';
    protected $fillable   = array('nombre');
    protected $guarded    = array('id');
    public    $timestamps = false;
}
