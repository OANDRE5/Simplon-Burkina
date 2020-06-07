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



// Les routes de la fonctionalité projets réalisés par les apprenants
Route::get('/formulaire-projet', 'ProjetsController@addProject');
Route::get('/projets', 'ProjetsController@displayProject');
Route::post('/enregistrer', 'ProjetsController@saveIntoDB');