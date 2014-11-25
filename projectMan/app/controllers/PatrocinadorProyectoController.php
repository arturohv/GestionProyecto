<?php

class PatrocinadorProyectoController extends \BaseController {

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
		$patrocinadores = Patrocinador::getListCmb();		
        $proyecto = Proyecto::find($id);
		$this->layout->title = 'Nuevo Patrocinador';
		$this->layout->titulo = 'Gestión de Proyectos';
		$this->layout->nest(
			'content',
			'patrocinadoresproyectos.create',
			array(
				'proyecto' => $proyecto,				
				'patrocinadores' => $patrocinadores				
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
		$patrocinadorid = Input::get('patrocinadorid');
		$proyecto = new PatrocinadorProyecto();
		$proyecto->proyectoid = $proyectoid;
		$proyecto->patrocinadorid = $patrocinadorid;
		$proyecto->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('proyectos');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
	}


	


}
