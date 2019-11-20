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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/citas', 'CitasController@index');
Route::get('/citas/agenda{id}', 'AgendasController@index')->name('agenda');
Route::get('/citas/novedades', 'NovedadesController@index');

Route::post('/citas/novedades', 'NovedadesController@store')->name('store');

Route::get('/citas/editar{id}', 'NovedadesController@edit')->name('editar');
Route::put('/citas/novedades/update{id}', 'NovedadesController@update')->name('update');
