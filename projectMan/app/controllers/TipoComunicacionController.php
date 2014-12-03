<?php

class TipoComunicacionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$tipos = DB::table('tipo_comunicacion')
                    ->orderBy('nombre')                    
                    ->get();

		$this->layout->title = 'Tipos de Comunicación';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'tiposcomunicacion.index',
			array(
				'tipos' => $tipos
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
		$this->layout->title = 'Tipos de Comunicación';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'tiposcomunicacion.create',
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
		$tipo = new TipoComunicacion();
		$tipo->nombre = $nombre;
		
		$tipo->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('tiposcomunicacion');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar Tipo de Comunicación';
		$this->layout->titulo = 'Mantenimiento';
		$tipo = TipoComunicacion::find($id);
		$this->layout->nest(
			'content',
			'tiposcomunicacion.show',
			array(
				'tipo' => $tipo
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
		$this->layout->title = 'Editar Tipo de Comunicación';
		$this->layout->titulo = 'Mantenimiento';
		$tipo = TipoComunicacion::find($id);
		$this->layout->nest(
			'content',
			'tiposcomunicacion.edit',
			array(
				'tipo' => $tipo
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
		
		$tipo = TipoComunicacion::find($id);
		$tipo->nombre = $nombre;		
		$tipo->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('tiposcomunicacion');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tipo = TipoComunicacion::find($id);
		$tipo->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('tiposcomunicacion');
	}


}
