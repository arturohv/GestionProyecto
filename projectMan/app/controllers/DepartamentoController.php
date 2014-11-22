<?php

class DepartamentoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$departamentos = DB::table('departamentos')
                    ->orderBy('nombre')                    
                    ->get();

		$this->layout->title = 'Departamentos';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'departamentos.index',
			array(
				'departamentos' => $departamentos
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
		$this->layout->title = 'Nuevo Departamento';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'departamentos.create',
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
		$departamento = new Departamento();
		$departamento->nombre = $nombre;
		$departamento->descripcion = $descripcion;
		$departamento->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('departamentos');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar Departamento';
		$this->layout->titulo = 'Mantenimiento';
		$departamento = Departamento::find($id);
		$this->layout->nest(
			'content',
			'departamentos.show',
			array(
				'departamento' => $departamento
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
		$this->layout->title = 'Editar Departamento';
		$this->layout->titulo = 'Mantenimiento';
		$departamento = Departamento::find($id);
		$this->layout->nest(
			'content',
			'departamentos.edit',
			array(
				'departamento' => $departamento
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
		
		$departamento = Departamento::find($id);
		$departamento->nombre = $nombre;
		$departamento->descripcion = $descripcion;
		$departamento->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('departamentos');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$departamento = Departamento::find($id);
		$departamento->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('departamentos');
	}


}
