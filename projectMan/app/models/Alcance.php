<?php

class Alcance extends Eloquent
{
    protected $table      = 'alcances';
    protected $fillable   = array('actividadid','descripcion','califid');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public function calificacion() {
		return $this->belongsTo('Calificacion','califid');
	}

    public static function getListAlcances($id)
	{
		$sql = 'Select a.id, a.actividadid, a.descripcion, c.nombre from alcances a
		inner join calificaciones c on c.id = a.califid
		where actividadid = ' . $id . ' order by descripcion';
		return DB::select($sql);
	}

	
}