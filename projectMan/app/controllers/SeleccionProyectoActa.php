<?php

class SeleccionProyectoActa extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$proyectos = DB::table('proyectos')
                    ->orderBy('nombre')                    
                    ->get();

		$this->layout->title = 'Selección de Proyecto';
		$this->layout->titulo = 'Reportes / Actas de Proyecto';
		$this->layout->nest(
			'content',
			'reportes.selectProyectoActa',
			array(
				'proyectos' => $proyectos
			)
		);
	}

	public function acta($id)
	{
		
		$proyectos = Proyecto::getEncabezadoProyecto($id);
		$patrocinadores = PatrocinadorProyecto::getPatrocinadoresProyecto($id);
		$actividades = Actividad::getActividadesProyecto($id);
		$restricciones = Restriccion::getListRestricciones($id);
		$riesgos = RiesgoInicial::getListRiesgos($id);
		$interesados = InteresadoProyecto::getInteresadosProyecto($id);
		$empleados = EmpleadoProyecto::getEmpleadosProyecto($id);

		$this->layout->title = 'Acta del Proyecto';
		$this->layout->titulo = 'Acta de Constitución de Proyecto';
		$this->layout->nest(
			'content',
			'reportes.acta',
			array(
				'proyectos' => $proyectos,
				'patrocinadores' => $patrocinadores,
				'actividades' => $actividades,
				'restricciones' => $restricciones,
				'riesgos' => $riesgos,
				'interesados' => $interesados,
				'empleados' => $empleados
			)
		);
	}
	

}
