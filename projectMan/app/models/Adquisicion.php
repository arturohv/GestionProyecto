<?php

class Adquisicion extends Eloquent
{
    protected $table      = 'adquisiciones';
    protected $fillable   = array('alcanceid','descripcion','monto');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function getListAdquisiciones($id)
	{
		$sql = 'Select id, alcanceid, descripcion, monto from adquisiciones
		where alcanceid = ' . $id . ' order by descripcion';
		return DB::select($sql);
	}

	
}