<?php

use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return "hola";
});

 
//Route::get('/user', [UserController::class, 'index']);

Route::get('/profesor', [ProfesorController::class, 'index'])->name('profesor.index');

Route::get('/profesor/create', [ProfesorController::class, 'create'])->name("profesor.create");

Route::post('/profesor', [ProfesorController::class, 'store'])->name("profesor.store");

Route::get('/profesor/{id}', [ProfesorController::class, 'consultar'])->name("profesor.consultar");
Route::get('/profesor/{profesor}/edit', [ProfesorController::class, 'edit'])->name("profesor.edit");

Route::put('/profesor/{profesor}', [ProfesorController::class, 'update'])->name("profesor.update");







