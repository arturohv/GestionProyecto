<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		
    			
		$this->layout->title = 'Dashboard';
		$this->layout->titulo = 'Tablero de Control';
        $this->layout->nest(
            'content',
            'dashboard.index'
        );
	}

	public function getGrafico1()
	{			

    	if (Request::ajax())		
		{					
    		$resultados = Proyecto::getResultados();    		
    		return Response::Json($resultados);
		}
		
	}

	public function getGrafico2()
	{			

    	if (Request::ajax())		
		{					
    		$resultados = Proyecto::getResultados2();    		   		
    		return Response::Json($resultados);
		}
		
	}

}
