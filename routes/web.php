<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

//Aqui se encuentra enrutado el master de la plantilla 
Route::view('master','layaout.master');
Route::view('plantilla','layaout.plantilla');
//Aqui es en donde se enrutaran todas las vistas 
Route::view('productos','productos');


//Aqui se enrutan los controladores 
Route::apiResource('apiProductos',ProductoController::class);


