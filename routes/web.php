<?php

use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;

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
// consulta de todos los registros de la tabla libros
Route::get('/libros', [LibrosController::class, 'index'])->name('lista');


// consulta de un registro de la tabla libros
Route::get('/libros/{id}', [LibrosController::class, 'show'])->name('detalle');

//creacion de un registro de la tabla libros
Route::post('/libros', [LibrosController::class, 'store'])->name('alta');

//modificacion de un registro de la tabla libros
Route::put('/libros/{id}', [LibrosController::class, 'update'])->name('modificacion');

//eliminacion de un registro de la tabla libros
Route::delete('/libros/{id}', [LibrosController::class, 'delete'])->name('baja');