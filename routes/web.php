<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Listado de Denuncias
Route::get('denuncia', 'App\Http\Controllers\DenunciaController@getDenuncia');

// Listado de Denuncias con respuestas
Route::get('respuesta', 'App\Http\Controllers\DenunciaController@getDenunciaRespuesta');

// Listado de Motivos
Route::get('motivo', 'App\Http\Controllers\DenunciaController@getMotivo');

// Registro de Denuncia
Route::post('addDenuncia', 'App\Http\Controllers\DenunciaController@addDenuncia');

// Registro de Respuesta a una Denuncia
Route::put('updateDenuncia/{id}', 'App\Http\Controllers\DenunciaController@updateDenuncia');

// Listado de Oficinas
Route::get('oficina', 'App\Http\Controllers\DenunciaController@getOficina');

// Busqueda de Personal por Oficina
Route::get('personal/{id}', 'App\Http\Controllers\DenunciaController@getPersonalxOficina');
