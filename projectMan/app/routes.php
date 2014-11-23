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

