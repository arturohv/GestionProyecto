<?php

class GerenteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
			
		/*$gerentes = DB::table('gerentes')
                    ->orderBy('nombre')                    
                    ->get();*/
        $gerentes = Gerente::getListGerentes();             

		$this->layout->title = 'Gerentes';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'gerentes.index',
			array(
				'gerentes' => $gerentes
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

		$this->layout->title = 'Nuevo gerente';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'gerentes.create',
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
		

		$gerente = new Gerente();
		$gerente->nombre = $nombre;
		$gerente->cargoid = $cargoid;
		$gerente->departamentoid = $departamentoid;
		$gerente->rama_ejecutivaid = $rama_ejecutivaid;
		$gerente->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('gerentes');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar gerente';
		$this->layout->titulo = 'Mantenimiento';
		$gerente = Gerente::find($id);
		$cargo = $gerente->cargo;
		$departamento = $gerente->departamento;
		$rama = $gerente->rama;
		
		//dd($gerente);
		$this->layout->nest(
			'content',
			'gerentes.show',
			array(
				'gerente' => $gerente,
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

		$this->layout->title = 'Editar gerente';
		$this->layout->titulo = 'Mantenimiento';
		$gerente = Gerente::find($id);


		$this->layout->nest(
			'content',
			'gerentes.edit',
			array(
				'gerente' => $gerente,
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
		
		$gerente = Gerente::find($id);
		$gerente->nombre = $nombre;
		$gerente->cargoid = $cargoid;
		$gerente->departamentoid = $departamentoid;
		$gerente->rama_ejecutivaid = $rama_ejecutivaid;
		$gerente->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('gerentes');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$gerente = Gerente::find($id);
		$gerente->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('gerentes');
	}


}
