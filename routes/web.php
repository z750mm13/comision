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

//Ruta de cordinates con rol
Route::get('cordinates/create/{id?}', 'CordinateController@create');
//Ruta de eliminación de cordinates
Route::get('cordinates/deleted', 'CordinateController@deleted');
//Ruta de restauración de cordinates
Route::post('cordinates/restore', 'CordinateController@restore');
// ------------------------------------------------------------------ //
//Ruta de cuentas de usuario eliminadas                               //
Route::get('elements/deleted', 'ElementController@deleted');          //
//Ruta de activación de cuentas de usuario                            //
Route::get('elements/active/{id?}', 'ElementController@activate');    //
//Ruta de desactivación de cuentas de usuario                         //
Route::get('elements/inactive/{id?}', 'ElementController@inactivate');//
//Ruta de activación de administración de usuario                     //
Route::get('elements/admin/{id?}', 'ElementController@admin');        //
//Ruta de desactivación de administración de usuario                  //
Route::get('elements/noadmin/{id?}', 'ElementController@noadmin');    //
// ------------------------------------------------------------------ //
// ------------------------------------------------------------------ //
//Ruta de activación de cuentas de usuario                            //
Route::get('helpers/active/{id?}', 'HelperController@activate');      //
//Ruta de desactivación de cuentas de usuario                         //
Route::get('helpers/inactive/{id?}', 'HelperController@inactivate');  //
//Ruta de activación de administración de usuario                     //
Route::get('helpers/admin/{id?}', 'HelperController@admin');          //
//Ruta de desactivación de administración de usuario                  //
Route::get('helpers/noadmin/{id?}', 'HelperController@noadmin');      //
// ------------------------------------------------------------------ //
//commitments/review/46/create
Route::get('commitments/review/{id?}/{review_id?}/create', 'CommitmentController@create');//
//Ruta de eliminación de áreas
Route::get('areas/deleted', 'AreaController@deleted');
//Ruta de restauración de áreas
Route::post('areas/restore', 'AreaController@restore');
// Ruta de requerimientos con id de la norma
Route::get('requirements/create/{id?}', 'RequirementController@create');
// Ruta de subareas con id de la area
Route::get('subareas/create/{id?}', 'SubareaController@create');
//Ruta de guards con id de cordinate
Route::get('guards/create/{id?}', 'GuardController@create');
//Ruta de targets con id de subarea
Route::get('targets/create/{id?}', 'TargetController@create');
//Ruta de index del cuetionario segun tiempo
Route::get('validities/time/{tiempo?}', 'ValidityController@index');
//Ruta de reviews con id de target
Route::get('reviews/create/{id?}', 'ReviewController@create');
//Ruta de las subareas pertenecientes a un area a evaluar
Route::get('reviews/areas/{area_id?}', 'ReviewController@index');
//Rupa de subareas pertenecientes a una programación
Route::get('reviews/areas/{area_id?}/validity/{validity_id?}', 'ReviewController@index');
//Ruta de problemas de areas en cierta validity
Route::get('problems/{validity_id?}/subarea/{subarea_id?}', 'ProblemController@show');
//Ruta de commitments con id de review
Route::get('commitments/create/{id?}', 'CommitmentController@create');
//Ruta de eliminación de commitments
Route::get('commitments/deleted', 'CommitmentController@deleted');
//Ruta de restauración de commitments
Route::post('commitments/restore', 'CommitmentController@restore');
//Ruta de index de evaluación segun tiempo
Route::get('evaluations/time/{tiempo?}', 'EvaluationController@index');
//Ruta de targets con id de subarea
Route::get('arrays/create/{id?}', 'MatrixController@create');
//Ruta de index de ciclos segun tiempo
Route::get('cycles/time/{tiempo?}', 'CycleController@index');

//TODO creacion crud de metas
//TODO creacion crud de tareas
//TODO creacion crud de matriz de riesgos
Route::resource('cordinates', 'CordinateController');
Route::resource('elements', 'ElementController');
Route::resource('helpers', 'HelperController');
Route::resource('norms', 'NormController');
Route::resource('requirements', 'RequirementController');
Route::resource('areas', 'AreaController');
Route::resource('subareas', 'SubareaController');
Route::resource('guards', 'GuardController');
Route::resource('questionnaires', 'QuestionnaireController');
Route::resource('targets', 'TargetController');
Route::resource('validities', 'ValidityController');
Route::resource('reviews', 'ReviewController');
Route::resource('problems', 'ProblemController');
Route::resource('commitments', 'CommitmentController');
Route::resource('compliments', 'ComplimentController');
Route::resource('activities', 'ActivityController');
Route::resource('evaluations', 'EvaluationController');
Route::resource('arrays', 'MatrixController');
Route::resource('cycles', 'CycleController');

//---------------------------------------------------------------------------------//
// TODO crear los apartados de estadisticas                                        //
// TODO crear apartado de normas                                                   //
// TODO crear apartado de recorridos                                               //
 Route::get('statistics/reviews', 'ReviewStatisticController@index');              //
 Route::post('statistics/reviews', 'ReviewStatisticController@index');             //
// TODO crear apartado de areas                                                    //
// TODO crear apartado de Tareas                                                   //
// TODO crear apartado de Matriz de riesgos                                        //
//---------------------------------------------------------------------------------//