<?php

class EmpleadoProyecto extends Eloquent
{
    protected $table      = 'empleados_proyectos';
    protected $fillable   = array('empleadoid','proyectoid');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function getListEmpleados($id)
	{
		$sql = 'select pp.id as idkey, p.id, pt.nombre, pp.empleadoid
				from empleados_proyectos pp
				inner join proyectos p on p.id = pp.proyectoid
				inner join empleados pt on pt.id = pp.empleadoid
				where pp.proyectoid = '.$id;
				return DB::select($sql);
	}
	
}