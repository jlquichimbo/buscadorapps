<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('prueba', function () {
    return 'Hola desde routes.php';
});
Route::get('nombre/{nombre}', function ($nombre) {
    return 'Mi nombre es '.$nombre;
});
Route::get('edad/{edad}', function ($edad ) {
    return 'Mi edad es '.$edad;
});
Route::get('edad2/{edad?}', function ($edad  = 20) {
    return 'Mi edad es '.$edad;
});
Route::get('/', function () {
    return view('index');
});

//Referenciando a controlador
Route::get('controlador', 'PruebaController@index');
Route::get('name/{nombre}', 'PruebaController@nombre');
Route::resource('busqueda', 'BusquedaController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
