<?php

class EmpleadoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
			
		/*$empleados = DB::table('empleados')
                    ->orderBy('nombre')                    
                    ->get();*/
        $empleados = Empleado::getListIndex();             

		$this->layout->title = 'Empleados';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'empleados.index',
			array(
				'empleados' => $empleados
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

		$this->layout->title = 'Nuevo empleado';
		$this->layout->titulo = 'Mantenimiento';
		$this->layout->nest(
			'content',
			'empleados.create',
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
		

		$empleado = new Empleado();
		$empleado->nombre = $nombre;
		$empleado->cargoid = $cargoid;
		$empleado->departamentoid = $departamentoid;
		$empleado->rama_ejecutivaid = $rama_ejecutivaid;
		$empleado->save();
		Session::flash('message', 'Registro guardado satisfactoriamente!');
		return Redirect::to('empleados');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = 'Mostrar empleado';
		$this->layout->titulo = 'Mantenimiento';
		$empleado = Empleado::find($id);
		$cargo = $empleado->cargo;
		$departamento = $empleado->departamento;
		$rama = $empleado->rama;
		
		//dd($empleado);
		$this->layout->nest(
			'content',
			'empleados.show',
			array(
				'empleado' => $empleado,
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

		$this->layout->title = 'Editar empleado';
		$this->layout->titulo = 'Mantenimiento';
		$empleado = Empleado::find($id);


		$this->layout->nest(
			'content',
			'empleados.edit',
			array(
				'empleado' => $empleado,
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
		
		$empleado = Empleado::find($id);
		$empleado->nombre = $nombre;
		$empleado->cargoid = $cargoid;
		$empleado->departamentoid = $departamentoid;
		$empleado->rama_ejecutivaid = $rama_ejecutivaid;
		$empleado->save();
		Session::flash('message', 'Registro actualizado satisfactoriamente!');
		return Redirect::to('empleados');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$empleado = Empleado::find($id);
		$empleado->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('empleados');
	}


}
