<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;
 
// Rutas Individuales para Controlador
Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoinicio');
Route::get('/form', [diarioController::class,'metodoFormulario'])->name('apodoform');
Route::get('/recuer', [diarioController::class,'metodoRecuerdos'])->name('apodorecuerdos');

Route::post('/guardarRecuerdo',[diarioController::class,'guardarRecuerdo'])->name('guardar');



// Rutas agrupadas por Controlador
/*Route::controller(diarioController::class)->group(function(){
    Route::get('/','metodoInicio')->name('apodoinicio');
    Route::get('/form','metodoFormulario')->name('apodoform');
    Route::get('/recuer','metodoRecuerdos')->name('apodorecuerdos');    
});*/




























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

/*#RUTAS TIPO PETICIÓN
Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('formulario');
});
Route::get('/recuer', function () {
    return view('recuerdos');
});*/

#RUTAS TIPO VIEW
/*Route::view('/','welcome')->name('apodoinicio');
Route::view('/form','formulario')->name('apodoform');
Route::view('/recuer','recuerdos')->name('apodorecuerdos');*/
