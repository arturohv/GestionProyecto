<?php

class RiesgoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{			
        $proyecto = Proyecto::find($id);
		$this->layout->title = 'Nuevo Riesgo Inicial';
		$this->layout->titulo = 'Gestión de Proyectos';
		$this->layout->nest(
			'content',
			'riesgos.create',
			array(
				'proyecto' => $proyecto						
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
		$proyectoid = Input::get('proyectoid');
		$descripcion = Input::get('descripcion');
		$fecha = Input::get('fecha');		
		
		$riesgo = new RiesgoInicial();
		$riesgo->proyectoid = $proyectoid;
		$riesgo->descripcion = $descripcion;
		$riesgo->fecha_tope = $fecha;		
		$riesgo->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('proyectos/'.$proyectoid.'/attribute');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$riesgo = RiesgoInicial::find($id);
		$proyectoid = $riesgo->proyectoid;
		$riesgo->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('proyectos/'.$proyectoid.'/attribute');
	}


	public function show($id)
	{
		$this->layout->title = 'Mostrar Riesgo';
		$this->layout->titulo = 'Gestión de Proyectos';
		$riesgo = RiesgoInicial::find($id);		
		$this->layout->nest(
			'content',
			'riesgos.show',
			array(
				'riesgo' => $riesgo
			)
		);
	}


	


}
