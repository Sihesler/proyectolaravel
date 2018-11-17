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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');


//CRUD de estudiantes
Route::get('/listarestudiante', 'EstudianteController@index')->name('listarestudiante');
Route::get('/estudiantecreate', 'EstudianteController@create');
Route::post('/estudiante/store', 'EstudianteController@store');
Route::get('/estudianteedit{idestudiante}', 'EstudianteController@edit');
Route::post('/estudiante/update/{idestudiante}', 'EstudianteController@update');
Route::get('/estudiante/delete/{idestudiante}', 'EstudianteController@delete');

//CRUD de cursos
Route::get('/listarcurso', 'CursoController@index')->name('listarcurso');
Route::get('/cursocreate', 'CursoController@create');
Route::post('/curso/store', 'CursoController@store');
Route::get('/cursoedit{idcurso}', 'CursoController@edit');
Route::post('/curso/update/{idcurso}', 'CursoController@update');
Route::get('/curso/delete/{idcurso}', 'CursoController@delete');