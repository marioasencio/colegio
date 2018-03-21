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

Route::prefix('admin')->group(function (){
    Route::resource('alumno','AlumnoController');
    Route::get('alumno/{id}/destroy','AlumnoController@destroy')->name('alumno.destroy');

    Route::resource('profesor','ProfesorController');
    Route::get('profesor/{id}/destroy','ProfesorController@eliminar')->name('profesor.eliminar');

    Route::resource('grado','GradoController');
    Route::get('grado/{id}/destroy','GradoController@destroy')->name('grado.destroy');

    Route::resource('alumnogrado','AlumnoGradoController');
    Route::get('alumnogrado/{id}/destroy','AlumnoGradoController@destroy')->name('alumnogrado.destroy');
});
