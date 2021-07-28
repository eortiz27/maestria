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

//Route::view('/graduados/datos', 'graduados.datos')->name('graduados.datos');
Route::get('/graduados/datos', 'Graduados\GraduadosController@datos')->name('graduados.datos');

Route::get('/graduados/importar', 'Graduados\GraduadosController@importar')->name('graduados.importar');

Route::post('/graduados/importar/guardar', 'Graduados\GraduadosController@importarGuardar')->name('graduados.importar.guardar');


//Estadisticas
Route::get('/estadisticas/grafico01','Estadisticas\EstadisticasController@grafico01')->name('estadisticas.grafico01');
Route::get('/estadisticas/grafico02','Estadisticas\EstadisticasController@grafico02')->name('estadisticas.grafico02');

//ApiGraduados
Route::get('/api/graduados', 'ApiGraduados\ApiGraduadosController@graduados');