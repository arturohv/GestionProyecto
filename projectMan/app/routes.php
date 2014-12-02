<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

/*Cargos*/
Route::resource('cargos', 'CargoController');
Route::post('cargos/{id}/update', 'CargoController@update');
Route::get('cargos/{id}/delete', 'CargoController@destroy');
Route::get('cargos/{id}/show', 'CargoController@show');

/*Departamentos*/
Route::resource('departamentos', 'DepartamentoController');
Route::post('departamentos/{id}/update', 'DepartamentoController@update');
Route::get('departamentos/{id}/delete', 'DepartamentoController@destroy');
Route::get('departamentos/{id}/show', 'DepartamentoController@show');

/*Ramas Ejecutivas*/
Route::resource('ramas', 'RamaEjecutivaController');
Route::post('ramas/{id}/update', 'RamaEjecutivaController@update');
Route::get('ramas/{id}/delete', 'RamaEjecutivaController@destroy');
Route::get('ramas/{id}/show', 'RamaEjecutivaController@show');

/*Clientes*/
Route::resource('clientes', 'ClienteController');
Route::post('clientes/{id}/update', 'ClienteController@update');
Route::get('clientes/{id}/delete', 'ClienteController@destroy');
Route::get('clientes/{id}/show', 'ClienteController@show');

/*Gerentes*/
Route::resource('gerentes', 'GerenteController');
Route::post('gerentes/{id}/update', 'GerenteController@update');
Route::get('gerentes/{id}/delete', 'GerenteController@destroy');
Route::get('gerentes/{id}/show', 'GerenteController@show');

/*Empleados*/
Route::resource('empleados', 'EmpleadoController');
Route::post('empleados/{id}/update', 'EmpleadoController@update');
Route::get('empleados/{id}/delete', 'EmpleadoController@destroy');
Route::get('empleados/{id}/show', 'EmpleadoController@show');

/*Patrocinadores*/
Route::resource('patrocinadores', 'PatrocinadorController');
Route::post('patrocinadores/{id}/update', 'PatrocinadorController@update');
Route::get('patrocinadores/{id}/delete', 'PatrocinadorController@destroy');
Route::get('patrocinadores/{id}/show', 'PatrocinadorController@show');

/*Interesados*/
Route::resource('interesados', 'InteresadoController');
Route::post('interesados/{id}/update', 'InteresadoController@update');
Route::get('interesados/{id}/delete', 'InteresadoController@destroy');
Route::get('interesados/{id}/show', 'InteresadoController@show');


/*Proyectos*/
Route::resource('proyectos', 'ProyectoController');
Route::post('proyectos/{id}/update', 'ProyectoController@update');
Route::get('proyectos/{id}/delete', 'ProyectoController@destroy');
Route::get('proyectos/{id}/show', 'ProyectoController@show');
Route::get('proyectos/{id}/attribute', 'ProyectoController@attribute');

/*Patrocinadores Proyectos*/
Route::resource('patrocinadores_proyectos', 'PatrocinadorProyectoController');
Route::get('patrocinadores_proyectos/{id}/create', 'PatrocinadorProyectoController@create');
Route::get('patrocinadores_proyectos/{id}/delete', 'PatrocinadorProyectoController@destroy');

/*Empleados Proyectos*/
Route::resource('empleados_proyectos', 'EmpleadoProyectoController');
Route::get('empleados_proyectos/{id}/create', 'EmpleadoProyectoController@create');
Route::get('empleados_proyectos/{id}/delete', 'EmpleadoProyectoController@destroy');

/*Interesados Proyectos*/
Route::resource('interesados_proyectos', 'InteresadoProyectoController');
Route::get('interesados_proyectos/{id}/create', 'InteresadoProyectoController@create');
Route::get('interesados_proyectos/{id}/delete', 'InteresadoProyectoController@destroy');

/*Recursos*/
Route::resource('recursos', 'RecursoController');
Route::get('recursos/{id}/create', 'RecursoController@create');
Route::get('recursos/{id}/delete', 'RecursoController@destroy');
Route::get('recursos/{id}/show', 'RecursoController@show');

/*Riesgos*/
Route::resource('riesgos', 'RiesgoController');
Route::get('riesgos/{id}/create', 'RiesgoController@create');
Route::get('riesgos/{id}/delete', 'RiesgoController@destroy');
Route::get('riesgos/{id}/show', 'RiesgoController@show');

/*Restricciones*/
Route::resource('restricciones', 'RestriccionController');
Route::get('restricciones/{id}/create', 'RestriccionController@create');
Route::get('restricciones/{id}/delete', 'RestriccionController@destroy');

/*Actividades*/
Route::resource('actividades', 'ActividadController');
Route::get('actividades/{id}/create', 'ActividadController@create');
Route::get('actividades/{id}/delete', 'ActividadController@destroy');
Route::get('actividades/{id}/show', 'ActividadController@show');
Route::post('actividades/{id}/update', 'ActividadController@update');

/*Alcances*/
Route::resource('alcances', 'AlcanceController');
Route::get('alcances/{id}/index', 'AlcanceController@index');
Route::get('alcances/{id}/create', 'AlcanceController@create');
Route::get('alcances/{id}/delete', 'AlcanceController@destroy');
Route::get('alcances/{id}/show', 'AlcanceController@show');
Route::post('alcances/{id}/update', 'AlcanceController@update');

/*Costos*/
Route::resource('costos', 'CostoController');
Route::get('costos/{id}/index', 'CostoController@index');
Route::get('costos/{id}/create', 'CostoController@create');
Route::get('costos/{id}/delete', 'CostoController@destroy');
Route::get('costos/{id}/show', 'CostoController@show');
Route::post('costos/{id}/update', 'CostoController@update');

/*Adquisiciones*/
Route::resource('adquisiciones', 'AdquisicionController');
Route::get('adquisiciones/{id}/index', 'AdquisicionController@index');
Route::get('adquisiciones/{id}/create', 'AdquisicionController@create');
Route::get('adquisiciones/{id}/delete', 'AdquisicionController@destroy');
Route::get('adquisiciones/{id}/show', 'AdquisicionController@show');
Route::post('adquisiciones/{id}/update', 'AdquisicionController@update');






