<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


Route::controllers([
    'users'    => 'UsersController',
	'auth'     => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);
//Rutas para el administrador
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin'], 'namespace' => '\Admin'], function(){

    Route::get('/', function()
    {
        return view('admin.index');
    });

    Route::resource('users', 'UsersController');
    Route::resource('ivas', 'IvaController');
    Route::resource('turnos', 'TurnosController');
    Route::resource('insumos', 'insumosController');
    Route::resource('proveedores', 'ProveedorController');
    Route::resource('productos', 'ProductoController');
    Route::resource('especialidades', 'EspecialidadController');
    Route::resource('especialistas', 'EspecialistaController');
});

//Rutas para la secretaría
Route::group(['prefix' => 'secretaria', 'middleware' => ['auth', 'is_secretaria'], 'namespace' => '\Secretaria'], function()
{
    Route::get('/', function()
    {
        return view('secretaria.index');
    });

    Route::resource('users', 'UsersController');
});


//Rutas para los Especialistas
Route::group(['prefix' => 'especialista', 'middleware' => ['auth', 'is_especialista'], 'namespace' => '\Especialista'], function()
{
    Route::get('/', function()
    {
        return view('especialista.index');
    });
});


//Rutas para los usuarios(Pacientes)
Route::group(['prefix' => 'user', 'middleware' => ['auth', 'is_usuario'], 'namespace' => '\User'], function()
{
    Route::get('/', function()
    {
        return view('especialista.index');
    });
});