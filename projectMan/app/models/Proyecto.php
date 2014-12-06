<?php

class Proyecto extends Eloquent
{
    protected $table      = 'proyectos';
    protected $fillable   = array('nombre','empresa','fecha','clienteid','patrocinadorid','proposito_justificacion','gerenteid','descripcion','requisito_producto','requisito_proyecto','presupuesto_inicial','requisito_aprobacion');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public function cliente() {
		return $this->belongsTo('Cliente','clienteid');
	}

	public function patrocinador() {
		return $this->belongsTo('Patrocinador','patrocinadorid');
	}

	public function gerente() {
		return $this->belongsTo('Gerente','gerenteid');
	}

	public static function getListProyectos(){
		$proyectos = DB::table('proyectos')->select('id', 'nombre')->orderBy('nombre')->get();
		$lstProyectos = array();

		foreach ($proyectos as $proyecto)
		{
		     $lstProyectos[$proyecto->id] = $proyecto->nombre;
		}
		return $lstProyectos;
	}

	public static function getEncabezadoProyecto($id)
	{
		$sql = 'select pro.id, pro.empresa, pro.nombre as proyecto, pro.fecha, cli.nombre as cliente,
			pat.nombre as patrocinador, ger.nombre as gerente, pro.proposito_justificacion, pro.descripcion,
			pro.requisito_producto, pro.requisito_proyecto, pro.presupuesto_inicial, pro.requisito_aprobacion
			from proyectos pro
			inner join clientes cli on cli.id = pro.clienteid
			inner join patrocinadores pat on pat.id = pro.patrocinadorid
			inner join gerentes ger on ger.id = pro.gerenteid
			where pro.id = '.$id;
		return DB::select($sql);
	}


	public static function getResultados()
	{
		$sql = 'select pro.nombre, count(act.id) as cant_actividad
		from  actividades act
		inner join proyectos pro on pro.id = act.proyectoid
		group by pro.nombre';
		return DB::select($sql);
	}

	public static function getResultados2()
	{
		$sql = 'select pro.nombre, sum(cos.monto::money::numeric::float8) as total_costo
				from alcances alc
				inner join actividades act on act.id = alc.actividadid
				inner join calificaciones cal on cal.id = alc.califid
				inner join costos cos on cos.alcanceid = alc.id
				inner join proyectos pro on pro.id = act.proyectoid
				group by pro.nombre';

				
		return DB::select($sql);
	}
	

	
	
}