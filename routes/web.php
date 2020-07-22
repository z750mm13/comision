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

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::resource('cordinates', 'CordinateController');
Route::resource('elements', 'ElementController');

//Ruta de cordinates con rol
Route::get('cordinates/create/{id?}', 'CordinateController@create');
// ------------------------------------------------------------------ //
//Ruta de activación de cuentas de usuario                            //
Route::get('elements/active/{id?}', 'ElementController@activate');    //
//Ruta de desactivación de cuentas de usuario                         //
Route::get('elements/inactive/{id?}', 'ElementController@inactivate');//
//Ruta de activación de administración de usuario                     //
Route::get('elements/admin/{id?}', 'ElementController@admin');        //
//Ruta de desactivación de administración de usuario                  //
Route::get('elements/noadmin/{id?}', 'ElementController@noadmin');    //
// ------------------------------------------------------------------ //