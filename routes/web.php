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

Route::get('/listarestudiante', 'EstudianteController@index')->name('listarestudiante');

Route::post('/estudiante/store', 'EstudianteController@store');
Route::get('/estudiantecreate', 'EstudianteController@create');


//Route::post('/estudiante/update', 'EstudianteController@update');
//Route::get('/estudianteedit/', 'EstudianteController@edit');

Route::get('/estudianteedit{idestudiante}', 'EstudianteController@edit');
Route::post('/estudiante/update/{idestudiante}', 'EstudianteController@update');
Route::get('estudiante/delete/{idestudiante}', 'EstudianteController@delete');

//////////////
