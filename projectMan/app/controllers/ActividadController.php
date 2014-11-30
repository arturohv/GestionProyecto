<?php

class ActividadController extends \BaseController {

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
		$this->layout->title = 'Nueva Actividad';
		$this->layout->titulo = 'Gestión de Proyectos';
		$this->layout->nest(
			'content',
			'actividades.create',
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
		$fechaini = Input::get('fecha_inicio');
		$fechafin = Input::get('fecha_fin');			
		
		$actividad = new Actividad();
		$actividad->proyectoid = $proyectoid;
		$actividad->descripcion = $descripcion;
		$actividad->fecha_inicio = $fechaini;
		$actividad->fecha_fin = $fechafin;		
		$actividad->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('proyectos/'.$proyectoid.'/attribute');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->layout->title = 'Editar Actividad';
		$this->layout->titulo = 'Gestión de Proyectos';
		$actividad = Actividad::find($id);
		$proyecto = Proyecto::find($actividad->proyectoid);
		$this->layout->nest(
			'content',
			'actividades.edit',
			array(
				'actividad' => $actividad,
				'proyecto' => $proyecto
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
		$descripcion = Input::get('descripcion');
		$fechaini = Input::get('fecha_inicio');
		$fechafin = Input::get('fecha_fin');	
		
		$actividad = Actividad::find($id);
		$actividad->descripcion = $descripcion;
		$actividad->fecha_inicio = $fechaini;
		$actividad->fecha_fin = $fechafin;		
		$actividad->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('proyectos/'.$actividad->proyectoid.'/attribute');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$actividad = Actividad::find($id);
		$proyectoid = $actividad->proyectoid;
		$actividad->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('proyectos/'.$proyectoid.'/attribute');
	}


	public function show($id)
	{
		$this->layout->title = 'Mostrar Actividad';
		$this->layout->titulo = 'Gestión de Proyectos';
		$actividad = Actividad::find($id);			
		$this->layout->nest(
			'content',
			'actividades.show',
			array(
				'actividad' => $actividad
				
			)
		);
	}


	


}
