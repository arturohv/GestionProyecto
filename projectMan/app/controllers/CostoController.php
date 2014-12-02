<?php

class CostoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		
		$alcance = Alcance::find($id);
		$costos = Costo::getListCostos($id);
		$proyecto = Proyecto::find($alcance->proyectoid);

		$this->layout->title = 'Costos';
		$this->layout->titulo = 'Gestión de Alcances';
		$this->layout->nest(
			'content',
			'costos.index',
			array(
				'alcance' => $alcance,
				'costos' => $costos,
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
        
		$this->layout->title = 'Nuevo Costo';
		$this->layout->titulo = 'Gestión de Alcances';
		$this->layout->nest(
			'content',
			'costos.create',
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
		$monto = Input::get('costo');

		$costo = new Costo();
		$costo->alcanceid = $costoid;
		$costo->descripcion = $descripcion;
		$costo->costo = $monto;
		$costo->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('costos/'.$alcanceid.'/index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar Costo';
		$this->layout->titulo = 'Gestión de Alcances';
		$costo = Costo::find($id);
		
		$this->layout->nest(
			'content',
			'costos.show',
			array(
				'costo' => $costo
				
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
		$this->layout->title = 'Editar Costo';
		$this->layout->titulo = 'Gestión de Alcances';
		$costo = Costo::find($id);		
		$this->layout->nest(
			'content',
			'costos.edit',
			array(
				'costo' => $costo				
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
		$monto = Input::get('costo');
		
		$costo = Costo::find($id);
		$costo->descripcion = $descripcion;
		$costo->costo = $monto;
		$costo->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('costos/'.$costo->alcanceid.'/index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$costo = Costo::find($id);
		$costo->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('costos/'.$costo->alcanceid.'/index');
	}


}
