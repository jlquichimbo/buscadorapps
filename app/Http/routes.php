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

Route::get('busqueda', function () {
    $keywords = DB::table('keywords')->lists('id', 'nombre');
    $keywords['-1'] = 'Seleccionar';
    return view('index', ['keywords' => $keywords]);
});
Route::get('/', function () {
    $keywords = DB::table('keywords')->lists('nombre', 'id');
    $keywords['-1'] = 'Seleccionar';
    return view('index', ['keywords' => $keywords]);
});
Route::get('index', function () {
    $keywords = DB::table('keywords')->lists('nombre', 'id');
        $keywords['-1'] = 'Seleccionar';
    return view('index', ['keywords' => $keywords]);
});
Route::get('suscribe', function () {
    return view('suscribe');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('createuser', function () {
    return view('createuser');
});

//Referenciando a controlador
//Route::get('name/{nombre}', 'PruebaController@nombre');
Route::resource('busqueda', 'BusquedaController');
Route::post('busqueda/store', 'BusquedaController@store');
Route::resource('usuario', 'UsuarioController');
//Route::resource('login', 'LoginController');

//Social Login
//Route::get('social/{provider?}', 'SocialController@getSocialAuth');
//Route::get('social/callback/{provider?}', 'SocialController@getSocialAuthCallback');
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
    Route::auth();

    Route::get('social/{provider?}', 'SocialController@getSocialAuth');
    Route::get('social/callback/{provider?}', 'SocialController@getSocialAuthCallback');
    Route::get('admin', 'LoginController@index');
});
