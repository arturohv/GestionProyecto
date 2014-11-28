<?php

class InteresadoProyectoController extends \BaseController {

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
		$interesados = Interesado::getListCmb($id);		
        $proyecto = Proyecto::find($id);
		$this->layout->title = 'Nuevo Interesado';
		$this->layout->titulo = 'Gestión de Proyectos';
		$this->layout->nest(
			'content',
			'interesadosproyectos.create',
			array(
				'proyecto' => $proyecto,				
				'interesados' => $interesados				
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
		$interesadoid = Input::get('interesadoid');
		$proyecto = new InteresadoProyecto();
		$proyecto->proyectoid = $proyectoid;
		$proyecto->interesadoid = $interesadoid;
		$proyecto->save();
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
		$empleadoP = InteresadoProyecto::find($id);
		$proyectoid = $empleadoP->proyectoid;
		$empleadoP->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('proyectos/'.$proyectoid.'/attribute');
	}


	


}
