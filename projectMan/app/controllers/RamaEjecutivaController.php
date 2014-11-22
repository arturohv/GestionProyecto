<?php

class RamaEjecutivaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$ramas = DB::table('ramas_ejecutivas')
                    ->orderBy('nombre')                    
                    ->get();

		$this->layout->title = 'Ramas Ejecutivas';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'ramasejecutivas.index',
			array(
				'ramas' => $ramas
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
		$this->layout->title = 'Nueva Rama Ejecutiva';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'ramasejecutivas.create',
			array()
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
		$descripcion = Input::get('descripcion');		
		$rama = new RamaEjecutiva();
		$rama->nombre = $nombre;
		$rama->descripcion = $descripcion;
		$rama->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('ramas');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar Rama Ejecutiva';
		$this->layout->titulo = 'Mantenimiento';
		$rama = RamaEjecutiva::find($id);
		$this->layout->nest(
			'content',
			'ramasejecutivas.show',
			array(
				'rama' => $rama
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
		$this->layout->title = 'Editar Rama Ejecutiva';
		$this->layout->titulo = 'Mantenimiento';
		$rama = RamaEjecutiva::find($id);
		$this->layout->nest(
			'content',
			'ramasejecutivas.edit',
			array(
				'rama' => $rama
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
		$descripcion = Input::get('descripcion');
		
		$rama = RamaEjecutiva::find($id);
		$rama->nombre = $nombre;
		$rama->descripcion = $descripcion;
		$rama->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('ramas');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$rama = RamaEjecutiva::find($id);
		$rama->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('ramas');
	}


}
