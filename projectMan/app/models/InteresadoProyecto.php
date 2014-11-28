<?php

class InteresadoProyecto extends Eloquent
{
    protected $table      = 'interesados_proyectos';
    protected $fillable   = array('proyecto_id','interesado_id');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function getListInteresados($id)
	{
		$sql = 'select pp.id as idkey, p.id, pt.nombre, pp.interesadoid
				from interesados_proyectos pp
				inner join proyectos p on p.id = pp.proyectoid
				inner join interesados pt on pt.id = pp.interesadoid
				where pp.proyectoid = '.$id;
				return DB::select($sql);
	}
}