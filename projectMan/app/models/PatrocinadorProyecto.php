<?php

class PatrocinadorProyecto extends Eloquent
{
    protected $table      = 'patrocinadores_proyectos';
    protected $fillable   = array('proyecto_id','patrocinador_id');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function getListPatrocinadores($id)
	{
		$sql = 'select pp.id as idkey, p.id, pt.nombre
				from patrocinadores_proyectos pp
				inner join proyectos p on p.id = pp.proyectoid
				inner join patrocinadores pt on pt.id = pp.patrocinadorid
				where pp.proyectoid = '.$id;
				return DB::select($sql);
	}
}