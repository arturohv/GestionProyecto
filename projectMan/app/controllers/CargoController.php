<?php

class cargoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$cargos = Cargo::all()
		$cargos = DB::table('cargos')
                    ->orderBy('nombre')                    
                    ->get();

		$this->layout->title = 'Cargos';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'cargos.index',
			array(
				'cargos' => $cargos
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
		$this->layout->title = 'Nuevo Cargo';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'cargos.create',
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
		$cargo = new Cargo();
		$cargo->nombre = $nombre;
		$cargo->descripcion = $descripcion;
		$cargo->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('cargos');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar Cargo';
		$this->layout->titulo = 'Mantenimiento';
		$cargo = Cargo::find($id);
		$this->layout->nest(
			'content',
			'cargos.show',
			array(
				'cargo' => $cargo
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
		$this->layout->title = 'Editar Cargo';
		$this->layout->titulo = 'Mantenimiento';
		$cargo = Cargo::find($id);
		$this->layout->nest(
			'content',
			'cargos.edit',
			array(
				'cargo' => $cargo
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
		
		$cargo = Cargo::find($id);
		$cargo->nombre = $nombre;
		$cargo->descripcion = $descripcion;
		$cargo->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('cargos');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cargo = Cargo::find($id);
		$cargo->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('cargos');
	}


}
