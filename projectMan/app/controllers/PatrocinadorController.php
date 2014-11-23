<?php

class patrocinadorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{		
		
        $patrocinadores = Patrocinador::getListIndex();             

		$this->layout->title = 'patrocinadores';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'patrocinadores.index',
			array(
				'patrocinadores' => $patrocinadores
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

		$this->layout->title = 'Nuevo patrocinador';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'patrocinadores.create',
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
		

		$patrocinador = new Patrocinador();
		$patrocinador->nombre = $nombre;
		$patrocinador->cargoid = $cargoid;
		$patrocinador->departamentoid = $departamentoid;
		$patrocinador->rama_ejecutivaid = $rama_ejecutivaid;
		$patrocinador->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('patrocinadores');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar patrocinador';
		$this->layout->titulo = 'Mantenimiento';
		$patrocinador = Patrocinador::find($id);
		$cargo = $patrocinador->cargo;
		$departamento = $patrocinador->departamento;
		$rama = $patrocinador->rama;
		
		//dd($patrocinador);
		$this->layout->nest(
			'content',
			'patrocinadores.show',
			array(
				'patrocinador' => $patrocinador,
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

		$this->layout->title = 'Editar patrocinador';
		$this->layout->titulo = 'Mantenimiento';
		$patrocinador = Patrocinador::find($id);


		$this->layout->nest(
			'content',
			'patrocinadores.edit',
			array(
				'patrocinador' => $patrocinador,
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
		
		$patrocinador = Patrocinador::find($id);
		$patrocinador->nombre = $nombre;
		$patrocinador->cargoid = $cargoid;
		$patrocinador->departamentoid = $departamentoid;
		$patrocinador->rama_ejecutivaid = $rama_ejecutivaid;
		$patrocinador->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('patrocinadores');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$patrocinador = Patrocinador::find($id);
		$patrocinador->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('patrocinadores');
	}


}
