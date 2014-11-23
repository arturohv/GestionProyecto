<?php

class ClienteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{		
		$clientes = DB::table('clientes')
                    ->orderBy('nombre')                    
                    ->get();

		$this->layout->title = 'Clientes';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'clientes.index',
			array(
				'clientes' => $clientes
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
		$this->layout->title = 'Nuevo Cliente';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'clientes.create',
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
		$email = Input::get('email');
		$telefonoR = Input::get('telefono_resi');
		$telefonoM = Input::get('telefono_movil');
		$direccion = Input::get('direccion');		
		$cliente = new Cliente();
		$cliente->nombre = $nombre;
		$cliente->email = $email;
		$cliente->telefono_resi = $telefonoR;
		$cliente->telefono_movil = $telefonoM;
		$cliente->direccion_fisica = $direccion;
		$cliente->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('clientes');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar Cliente';
		$this->layout->titulo = 'Mantenimiento';
		$cliente = Cliente::find($id);
		$this->layout->nest(
			'content',
			'clientes.show',
			array(
				'cliente' => $cliente
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
		$this->layout->title = 'Editar Cliente';
		$this->layout->titulo = 'Mantenimiento';
		$cliente = Cliente::find($id);
		$this->layout->nest(
			'content',
			'clientes.edit',
			array(
				'cliente' => $cliente
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
		$email = Input::get('email');
		$telefonoR = Input::get('telefono_resi');
		$telefonoM = Input::get('telefono_movil');
		$direccion = Input::get('direccion');
		
		$cliente = Cliente::find($id);
		$cliente->nombre = $nombre;
		$cliente->email = $email;
		$cliente->telefono_resi = $telefonoR;
		$cliente->telefono_movil = $telefonoM;
		$cliente->direccion_fisica = $direccion;
		$cliente->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('clientes');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cliente = Cliente::find($id);
		$cliente->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('clientes');
	}


}
