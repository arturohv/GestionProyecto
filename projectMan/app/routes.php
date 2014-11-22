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

