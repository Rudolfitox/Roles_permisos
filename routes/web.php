<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\SubareaController;
use App\Http\Controllers\PermisoController;

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


//Aqui se tiene que crear un middleware personalizado para poder pasale parametros
Route::resource('/areas',AreaController::class)->middleware('can:isAdmin');
Route::resource('/subareas',SubareaController::class);
Route::resource('/permisos',PermisoController::class);
