<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('personas/{id?}','PersonasController@show')->where('id','[0-9]+')->name('ruta');
Route::get('personaRegistro/{nombre?}/{apellido?}/{edad?}/{sexo?}','PersonasController@index')
->where([
'nombre'=>'[A-Z,a-z]+',
'apellido'=>'[A-Z,a-z]+',
'edad'=>'[0-9]+',
'sexo'=>'[A-Z,a-z]+']);
Route::put('persona/updatenombre/{id}/{nombre}','PersonasController@updatenombre')->where(['id','[0-9]+',
'nombre','[A-z]+']);
Route::delete('persona/delete/{id}','PersonasController@destroy');
Route::put('publicacion/updatetitulo/{id}/{titulo}','PublicacionesController@updatetitulo')->where(['id','[0-9]+',
'titulo','[A-z]+']);
Route::get('publicacionesshow/{id?}','PublicacionesController@showme')->where('id','[0-9]+')->name('rutapublicaciones');
Route::get('publicacionregistro/{titulo?}/{cuerpo?}/{persona_id?}','PublicacionesController@index')
->where([
'titulo'=>'[A-Z,a-z]+',
'cuerpo'=>'[A-Z,a-z]+',
'persona_id'=>'[0-9]+']);
Route::delete('publicacion/delete/{id}','PublicacionesController@destroy');
Route::get('comentarios/{id?}','ComentariosController@show')->where('id','[0-9]+')->name('rutacomentarios');
Route::get('comentariosregistro/{titulo?}/{cuerpo?}/{publicacion_id?}','ComentariosController@index')
->where([
'titulo'=>'[A-Z,a-z]+',
'cuerpo'=>'[A-Z,a-z]+',
'publicacion_id'=>'[0-9]+']);
Route::put('comentarios/updatetitulo/{id}/{titulo}','ComentariosController@updatetitulo')->where(['id','[0-9]+',
'titulo','[A-z]+']);
Route::delete('comentarios/delete/{id}','ComentariosController@destroy');