<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\libreriaController;
 
Route::get('/', [libreriaController::class,'metodoInicio'])->name('apodoinicio');
Route::get('/registro', [libreriaController::class,'metodoRegistro'])->name('apodoregistro');

Route::post('/guardarlibro', [libreriaController::class,'registrar'])->name('guardar');









/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
Route::get('/registro', function () {
    return view('registro');
}); */