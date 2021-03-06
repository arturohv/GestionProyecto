<?php

class Costo extends Eloquent
{
    protected $table      = 'costos';
    protected $fillable   = array('alcanceid','descripcion','monto');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function getListCostos($id)
	{
		$sql = 'Select id, alcanceid, descripcion, monto from costos
		where alcanceid = ' . $id . ' order by descripcion';
		return DB::select($sql);
	}

	
}