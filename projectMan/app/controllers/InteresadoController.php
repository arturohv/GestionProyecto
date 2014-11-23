<?php

class InteresadoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
			
		
        $interesados = Interesado::getListIndex();             

		$this->layout->title = 'Interesados';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'interesados.index',
			array(
				'interesados' => $interesados
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
		
		$cargos = Cargo::getListCargos();
		$departamentos = Departamento::getListDeptos();		
		$ramas = RamaEjecutiva::getListRamas();                       

		$this->layout->title = 'Nuevo interesado';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'interesados.create',
			array(
				'cargos' => $cargos,
				'departamentos' => $departamentos,
				'ramas' => $ramas
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
		$nombre = Input::get('nombre');
		$cargoid = Input::get('cargoid');
		$departamentoid = Input::get('departamentoid');
		$rama_ejecutivaid = Input::get('rama_ejecutivaid');		
		

		$interesado = new Interesado();
		$interesado->nombre = $nombre;
		$interesado->cargoid = $cargoid;
		$interesado->departamentoid = $departamentoid;
		$interesado->rama_ejecutivaid = $rama_ejecutivaid;
		$interesado->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('interesados');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar interesado';
		$this->layout->titulo = 'Mantenimiento';
		$interesado = Interesado::find($id);
		$cargo = $interesado->cargo;
		$departamento = $interesado->departamento;
		$rama = $interesado->rama;		
		
		$this->layout->nest(
			'content',
			'interesados.show',
			array(
				'interesado' => $interesado,
				'cargo' => $cargo,
				'departamento' => $departamento,
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
		$cargos = Cargo::getListCargos();
		$departamentos = Departamento::getListDeptos();		
		$ramas = RamaEjecutiva::getListRamas();   

		$this->layout->title = 'Editar interesado';
		$this->layout->titulo = 'Mantenimiento';
		$interesado = Interesado::find($id);


		$this->layout->nest(
			'content',
			'interesados.edit',
			array(
				'interesado' => $interesado,
				'cargos' => $cargos,
				'departamentos' => $departamentos,
				'ramas' => $ramas
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
		$cargoid = Input::get('cargoid');
		$departamentoid = Input::get('departamentoid');
		$rama_ejecutivaid = Input::get('rama_ejecutivaid');
		
		$interesado = Interesado::find($id);
		$interesado->nombre = $nombre;
		$interesado->cargoid = $cargoid;
		$interesado->departamentoid = $departamentoid;
		$interesado->rama_ejecutivaid = $rama_ejecutivaid;
		$interesado->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('interesados');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$interesado = Interesado::find($id);
		$interesado->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('interesados');
	}


}
