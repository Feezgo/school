<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');





//Rutas publicas
Route::get('/buscar_formulario', 'AlumnoController@buscar_formulario');
Route::get('/loginPin', 'AlumnoController@loginPin');
Route::post('/alumno/validacionPin', 'AlumnoController@validacionPin');
Route::post('/validacionEstudiante', 'AlumnoController@validacionEstudiante');
Route::get('/formulario', 'AlumnoController@formularioInscripcion');
Route::post('/traer_ficheros_estudiante','AlumnoController@traer_ficheros_estudiante');
Route::get('/buscar_matricula', 'AlumnoController@buscar_matricula');
Route::post('/descargar_doc', 'AlumnoController@descargar_doc');
Route::post('/alumno/registroPin', 'AlumnoController@registroFormPin');
Route::post('/alumno/registro_estudiante', 'AlumnoController@registroEstudiante');
Route::post('/alumno/registro_acudiente', 'AlumnoController@registro_acudiente');
Route::post('/alumno/registro_academico', 'AlumnoController@registro_academico');
Route::post('/alumno/registro_file', 'AlumnoController@registro_file');
Route::post('/alumno/delete_file', 'AlumnoController@delete_file');
Route::get('/alumno/getMunicipio/{id}', 'AlumnoController@getMunicipio');


Route::group(['middleware' => 'auth'], function () {
    
//Rutas protegidas
Route::get('/formularioPin', 'AlumnoController@formularioPin');
Route::get('/listadoPin', 'AlumnoController@listadoPin');
Route::get('/validar', 'HomeController@validar');
Route::get('/matricula', 'HomeController@matricula');
Route::get('/pagos/buscar/{documento?}', 'PagosController@obtenerPagosPendientes');
Route::get('/pagos/consolidado', 'PagosController@consolidado');
Route::post('/pagos/pagos/listadoConsolidado', 'PagosController@listadoConsolidado');
Route::get('/registrar', 'HomeController@registrar');


Route::post('/alumno/registro_matricula','AlumnoController@registro_matricula');
Route::get('/alumno/asignar_plan_pagos/{id}', 'PagosController@asignarPlanPagos');
Route::post('/pagos/gestionarPagos', 'PagosController@gestionarPagos');
Route::get('/pagos/anular/{documento}/factura/{id}', 'PagosController@anularPago');
Route::get('/pagos/imprimir/{id}', 'PagosController@imprimir');

});