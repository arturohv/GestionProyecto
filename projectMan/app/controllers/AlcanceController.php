<?php

class AlcanceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		
		$alcances = Alcance::getListAlcances($id);
		$actividad = Actividad::find($id);
		$proyecto = Proyecto::find($actividad->proyectoid);

		$this->layout->title = 'Alcances';
		$this->layout->titulo = 'Gestión de Actividades';
		$this->layout->nest(
			'content',
			'alcances.index',
			array(
				'alcances' => $alcances,
				'actividad' => $actividad,
				'proyecto' => $proyecto
			)
		);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{			
        $actividad = Actividad::find($id);
        $calificaciones = Calificacion::getListCmbAll();
		$this->layout->title = 'Nuevo Alcance';
		$this->layout->titulo = 'Gestión de Actividades';
		$this->layout->nest(
			'content',
			'alcances.create',
			array(
				'actividad' => $actividad,
				'calificaciones' => $calificaciones						
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
		$actividadid = Input::get('actividadid');
		$descripcion = Input::get('descripcion');
		$califid = Input::get('califid');

		$alcance = new Alcance();
		$alcance->actividadid = $actividadid;
		$alcance->descripcion = $descripcion;
		$alcance->califid = $califid;
		$alcance->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('alcances/'.$actividadid.'/index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar Alcance';
		$this->layout->titulo = 'Gestión de Actividades';
		$alcance = Alcance::find($id);
		$calificacion = $alcance->calificacion;
		$this->layout->nest(
			'content',
			'alcances.show',
			array(
				'alcance' => $alcance,
				'calificacion' => $calificacion
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
		$this->layout->title = 'Editar Alcance';
		$this->layout->titulo = 'Gestión de Actividades';
		$alcance = Alcance::find($id);
		$actividad = Actividad::find($alcance->actividadid);
		$calificaciones = Calificacion::getListCmbAll();
		$this->layout->nest(
			'content',
			'alcances.edit',
			array(
				'alcance' => $alcance,
				'calificaciones' => $calificaciones,
				'actividad' => $actividad
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
		$califid = Input::get('califid');
		
		$alcance = Alcance::find($id);
		$alcance->descripcion = $descripcion;
		$alcance->califid = $califid;
		$alcance->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('alcances/'.$alcance->actividadid.'/index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$alcance = Alcance::find($id);
		$alcance->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('alcances/'.$alcance->actividadid.'/index');
	}


}
