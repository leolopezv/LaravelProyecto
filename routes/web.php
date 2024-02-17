<?php

use App\Http\Controllers\ProyectosController;
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

//Todos los metos se definien con esta ruta
Route::resource("proyecto", ProyectosController::class);
//Route::get('/proyecto/index', 'ProyectosController@index');

