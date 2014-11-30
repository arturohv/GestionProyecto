<?php

class RecursoController extends \BaseController {

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
		$medidas = UnidadMedida::getListCmb();		
        $proyecto = Proyecto::find($id);
		$this->layout->title = 'Nuevo Recurso';
		$this->layout->titulo = 'Gestión de Proyectos';
		$this->layout->nest(
			'content',
			'recursos.create',
			array(
				'proyecto' => $proyecto,				
				'medidas' => $medidas				
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
		$cantidad = Input::get('cantidad');
		$medidaid = Input::get('medidaid');
		
		$recurso = new Recurso();
		$recurso->proyectoid = $proyectoid;
		$recurso->descripcion = $descripcion;
		$recurso->cantidad = $cantidad;
		$recurso->medidaid = $medidaid;
		$recurso->save();
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
		$recurso = Recurso::find($id);
		$proyectoid = $recurso->proyectoid;
		$recurso->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('proyectos/'.$proyectoid.'/attribute');
	}


	public function show($id)
	{
		$this->layout->title = 'Mostrar Recurso';
		$this->layout->titulo = 'Gestión de Proyectos';
		$recurso = Recurso::find($id);
		$medida = $recurso->medida;
		$this->layout->nest(
			'content',
			'recursos.show',
			array(
				'recurso' => $recurso,
				'medida' => $medida	
			)
		);
	}


	


}
