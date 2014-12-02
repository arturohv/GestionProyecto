<?php

class AdquisicionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		
		$alcance = Alcance::find($id);
		$adquisiciones = Adquisicion::getListAdquisiciones($id);
		$actividad = Actividad::find($alcance->actividadid);
		$proyecto = Proyecto::find($actividad->proyectoid);

		$this->layout->title = 'Adquisiciones';
		$this->layout->titulo = 'Gestión de Alcances';
		$this->layout->nest(
			'content',
			'adquisiciones.index',
			array(
				'alcance' => $alcance,
				'adquisiciones' => $adquisiciones,
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
        $alcance = Alcance::find($id);
        
		$this->layout->title = 'Nueva Adquisición';
		$this->layout->titulo = 'Gestión de Alcances';
		$this->layout->nest(
			'content',
			'adquisiciones.create',
			array(
				'alcance' => $alcance									
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
		$alcanceid = Input::get('alcanceid');
		$descripcion = Input::get('descripcion');
		$monto = Input::get('monto');

		$adquisicion = new Adquisicion();
		$adquisicion->alcanceid = $alcanceid;
		$adquisicion->descripcion = $descripcion;
		$adquisicion->monto = $monto;
		$adquisicion->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('adquisiciones/'.$alcanceid.'/index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar Adquisición';
		$this->layout->titulo = 'Gestión de Alcances';
		$adquisicion = Adquisicion::find($id);
		
		$this->layout->nest(
			'content',
			'adquisiciones.show',
			array(
				'adquisicion' => $adquisicion
				
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
		$this->layout->title = 'Editar Adquisición';
		$this->layout->titulo = 'Gestión de Alcances';
		$adquisicion = Adquisicion::find($id);
		$alcance = Alcance::find($adquisicion->alcanceid);		
		$this->layout->nest(
			'content',
			'adquisiciones.edit',
			array(
				'adquisicion' => $adquisicion,
				'alcance' => $alcance				
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
		$monto = Input::get('monto');
		
		$adquisicion = Adquisicion::find($id);
		$adquisicion->descripcion = $descripcion;
		$adquisicion->monto = $monto;
		$adquisicion->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('adquisiciones/'.$adquisicion->alcanceid.'/index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$adquisicion = Adquisicion::find($id);
		$adquisicion->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('adquisiciones/'.$adquisicion->alcanceid.'/index');
	}


}
