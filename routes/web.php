<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('home', 'PageController@view');


Route::get('Evento', 'EventoController@view');

Route::get('EstadisticaEvento', 'EstadisticaEventoController@view');

Route::get('EstadisticaTurista', 'EstadisticaTuristaController@view');

Route::get('RegistroTurista', 'RegistroTuristaController@view');
Route::post('RegistroTurista', 'RegistroTuristaController@store');
Route::get('RegistroTurista/{$id}', 'RegistroTuristaController@destroy');

Route::get('Index', 'IndexController@view');
