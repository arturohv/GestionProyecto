<?php

class RestriccionController extends \BaseController {

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
		$this->layout->title = 'Nueva Restricción';
		$this->layout->titulo = 'Gestión de Proyectos';
		$this->layout->nest(
			'content',
			'restricciones.create',
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
		
		$restriccion = new Restriccion();
		$restriccion->proyectoid = $proyectoid;
		$restriccion->nombre = $descripcion;
				
		$restriccion->save();
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
		$restriccion = Restriccion::find($id);
		$proyectoid = $restriccion->proyectoid;
		$restriccion->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('proyectos/'.$proyectoid.'/attribute');
	}
	


}
