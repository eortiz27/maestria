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

// Rutas creadas por Laravel
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Rutas creadas por mí
Route::view('/archivo', 'archivo');

//Route::view('/clientes/datos', 'clientes.datos')->name('clientes.datos');
Route::get('/clientes/datos', 'Clientes\ClientesController@datos')->name('clientes.datos');

Route::get('/clientes/importar', 'Clientes\ClientesController@importar')->name('clientes.importar');

Route::post('/clientes/importar/guardar', 'Clientes\ClientesController@importarGuardar')->name('clientes.importar.guardar');


//Estadisticas
Route::get('/estadisticas/grafico01','Estadisticas\EstadisticasController@grafico01')->name('estadisticas.grafico01');
Route::get('/estadisticas/grafico02','Estadisticas\EstadisticasController@grafico02')->name('estadisticas.grafico02');
Route::get('/estadisticas/grafico03','Estadisticas\EstadisticasController@grafico03')->name('estadisticas.grafico03');
Route::get('/estadisticas/grafico04','Estadisticas\EstadisticasController@grafico04')->name('estadisticas.grafico04');
Route::get('/estadisticas/grafico05','Estadisticas\EstadisticasController@grafico05')->name('estadisticas.grafico05');

//ApiClientes
Route::get('/api/clientes', 'ApiClientes\ApiClientesController@clientes'); 