<?php

class Actividad extends Eloquent
{
    protected $table      = 'actividades';
    protected $fillable   = array('proyectoid','descripcion','fecha_inicio','fecha_fin');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function getListActividades($id)
	{
		$sql = 'Select id, proyectoid, descripcion, fecha_inicio, fecha_fin from actividades
		where proyectoid = ' . $id . ' order by descripcion';
		return DB::select($sql);
	}

	public static function getActividadesProyecto($id)
	{
		$sql = 'select act.descripcion as actividad, act.fecha_inicio, act.fecha_fin,
		alc.descripcion as alcance, cal.nombre as estado, count(cos.id) as cant_costos, sum(monto) as total_costos
		from alcances alc
		inner join actividades act on act.id = alc.actividadid
		inner join calificaciones cal on cal.id = alc.califid
		inner join costos cos on cos.alcanceid = alc.id
		where act.proyectoid = ' . $id . '
		group by act.descripcion, act.fecha_inicio, act.fecha_fin,
		alc.descripcion, cal.nombre';
		return DB::select($sql);
	}
	
}