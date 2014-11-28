<?php

class EmpleadoProyectoController extends \BaseController {

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
		$empleados = Empleado::getListCmb($id);		
        $proyecto = Proyecto::find($id);
		$this->layout->title = 'Nuevo Empleado';
		$this->layout->titulo = 'Gestión de Proyectos';
		$this->layout->nest(
			'content',
			'empleadosproyectos.create',
			array(
				'proyecto' => $proyecto,				
				'empleados' => $empleados				
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
		$empleadoid = Input::get('empleadoid');
		$proyecto = new EmpleadoProyecto();
		$proyecto->proyectoid = $proyectoid;
		$proyecto->empleadoid = $empleadoid;
		$proyecto->save();
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
		$empleadoP = EmpleadoProyecto::find($id);
		$proyectoid = $empleadoP->proyectoid;
		$empleadoP->delete();
		Session::flash('message', 'Registro eliminado satisfactoriamente!');
		return Redirect::to('proyectos/'.$proyectoid.'/attribute');
	}


	


}
