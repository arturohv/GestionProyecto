<?php

class Costo extends Eloquent
{
    protected $table      = 'costos';
    protected $fillable   = array('alcanceid','descripcion','costo');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function getListCostos($id)
	{
		$sql = 'Select id, alcanceid, descripcion, costo from costos
		where alcanceid = ' . $id . ' order by descripcion';
		return DB::select($sql);
	}

	
}