<?php

class ProyectoController extends \BaseController {

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

		$this->layout->title = 'proyectos';
		$this->layout->titulo = 'Gestión de Proyectos';
		$this->layout->nest(
			'content',
			'proyectos.index',
			array(
				'proyectos' => $proyectos
			)
		);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$clientes = Cliente::getListCmb();
		$patrocinadores = Patrocinador::getListCmbAll();
		$gerentes = Gerente::getListCmb();

		$this->layout->title = 'Nuevo proyecto';
		$this->layout->titulo = 'Gestión de Proyectos';
		$this->layout->nest(
			'content',
			'proyectos.create',
			array(
				'clientes' => $clientes,
				'patrocinadores' => $patrocinadores,
				'gerentes' => $gerentes
			)
		);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	
	public function store()
	{
		$nombre = Input::get('nombre');
		$empresa = Input::get('empresa');
		$fecha = Input::get('fecha');
		$clienteid = Input::get('clienteid');
		$patrocinadorid = Input::get('patrocinadorid');
		$proposito_justificacion = Input::get('proposito_justificacion');
		$gerenteid = Input::get('gerenteid');
		$descripcion = Input::get('descripcion');
		$requisito_producto = Input::get('requisito_producto');
		$requisito_proyecto = Input::get('requisito_proyecto');
		$presupuesto_inicial = Input::get('presupuesto_inicial');
		$requisito_aprobacion = Input::get('requisito_aprobacion');

		$proyecto = new Proyecto();
		$proyecto->nombre = $nombre;
		$proyecto->empresa = $empresa;
		$proyecto->fecha = $fecha;
		$proyecto->clienteid = $clienteid;
		$proyecto->patrocinadorid = $patrocinadorid;
		$proyecto->proposito_justificacion = $proposito_justificacion;
		$proyecto->gerenteid = $gerenteid;
		$proyecto->descripcion = $descripcion;
		$proyecto->requisito_producto = $requisito_producto;
		$proyecto->requisito_proyecto = $requisito_proyecto;
		$proyecto->presupuesto_inicial = $presupuesto_inicial;
		$proyecto->requisito_aprobacion = $requisito_aprobacion;


		$proyecto->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('proyectos');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar Proyecto';
		$this->layout->titulo = 'Gestión de Proyectos';
		$proyecto = Proyecto::find($id);
		$cliente = $proyecto->cliente;
		$patrocinador = $proyecto->patrocinador;
		$gerente = $proyecto->gerente;		
		$this->layout->nest(
			'content',
			'proyectos.show',
			array(
				'proyecto' => $proyecto,
				'cliente' => $cliente,
				'patrocinador' => $patrocinador,
				'gerente' => $gerente
			)
		);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$clientes = Cliente::getListCmb();
		$patrocinadores = Patrocinador::getListCmbAll();
		$gerentes = Gerente::getListCmb();

		$this->layout->title = 'Editar Proyecto';
		$this->layout->titulo = 'Gestión de Proyectos';
		$proyecto = Proyecto::find($id);
		$this->layout->nest(
			'content',
			'proyectos.edit',
			array(
				'proyecto' => $proyecto,
				'clientes' => $clientes,
				'patrocinadores' => $patrocinadores,
				'gerentes' => $gerentes
			)
		);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$nombre = Input::get('nombre');
		$empresa = Input::get('empresa');
		$fecha = Input::get('fecha');
		$clienteid = Input::get('clienteid');
		$patrocinadorid = Input::get('patrocinadorid');
		$proposito_justificacion = Input::get('proposito_justificacion');
		$gerenteid = Input::get('gerenteid');
		$descripcion = Input::get('descripcion');
		$requisito_producto = Input::get('requisito_producto');
		$requisito_proyecto = Input::get('requisito_proyecto');
		$presupuesto_inicial = Input::get('presupuesto_inicial');
		$requisito_aprobacion = Input::get('requisito_aprobacion');
		
		$proyecto = Proyecto::find($id);
		
		$proyecto->nombre = $nombre;
		$proyecto->empresa = $empresa;
		$proyecto->fecha = $fecha;
		$proyecto->clienteid = $clienteid;
		$proyecto->patrocinadorid = $patrocinadorid;
		$proyecto->proposito_justificacion = $proposito_justificacion;
		$proyecto->gerenteid = $gerenteid;
		$proyecto->descripcion = $descripcion;
		$proyecto->requisito_producto = $requisito_producto;
		$proyecto->requisito_proyecto = $requisito_proyecto;
		$proyecto->presupuesto_inicial = $presupuesto_inicial;
		$proyecto->requisito_aprobacion = $requisito_aprobacion;

		$proyecto->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('proyectos');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$proyecto = Proyecto::find($id);
		$proyecto->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('proyectos');
	}


	public function attribute($id)
	{
		$proyecto = Proyecto::find($id);
		$patrocinadores = PatrocinadorProyecto::getListPatrocinadores($id);
		$patrocinadorp = $proyecto->patrocinador;
		$empleados = EmpleadoProyecto::getListEmpleados($id);
		$interesados = InteresadoProyecto::getListInteresados($id);
		$this->layout->title = 'Atributos de Proyecto';
		$this->layout->titulo = 'Gestión de Proyectos';		
		$this->layout->nest(
			'content',
			'proyectos.attribute',
			array(
				'proyecto' => $proyecto,
				'patrocinadores' => $patrocinadores,
				'patrocinadorp' => $patrocinadorp,
				'empleados' => $empleados,
				'interesados' => $interesados				
			)
		);
	}


}
