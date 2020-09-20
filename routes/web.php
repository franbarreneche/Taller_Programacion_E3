<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;

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
    return redirect('/recetas');
});

Route::get('/recetas',[RecetaController::class,'index']);

Route::get('/recetas/create',function(){
    return view('receta.create');
});

Route::post('/recetas/store',[RecetaController::class,'store']);

Route::get('/recetas/{id}',[RecetaController::class,'show']);





/*  CONVENCIONES DE BUENOS NOMBRES
//listing
Route::get('/teams', 'TeamController@index');

//Create
Route::get('/teams/create', 'TeamController@create');

//Store
Route::post('/teams/store', 'TeamController@store');

//Show
Route::get('/teams/{id}', 'TeamController@show');

//Edit
Route::get('/teams/{id}/edit', 'TeamController@edit');

//Update
Route::put('/teams/{id}/update', 'TeamController@update');

//Delete
Route::delete('/teams/{id}/delete', 'TeamController@delete');
*/