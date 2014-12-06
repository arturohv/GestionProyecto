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

	public static function getEmpleadosProyecto($id)
	{
		$sql = 'select pat.id, pat.nombre as patrocinador, car.nombre as cargo, dep.nombre as departamento,
				rej.nombre as rama_ejecutiva
				from empleados pat
				inner join cargos car on car.id = pat.cargoid
				inner join departamentos dep on dep.id = pat.departamentoid
				inner join ramas_ejecutivas rej on rej.id = pat.rama_ejecutivaid
				inner join patrocinadores_proyectos pp on pp.patrocinadorid = pat.id
				where pp.proyectoid = '.$id;
				return DB::select($sql);
	}
	
}