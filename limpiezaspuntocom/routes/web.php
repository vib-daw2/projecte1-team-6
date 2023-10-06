<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServeiController;
use App\Http\Controllers\TreballadorController;

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
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para Clientes
Route::get('/clients', [ClientController::class, 'index']);
Route::get('/clients/create', [ClientController::class, 'create']);
Route::post('/clients', [ClientController::class, 'store']);
Route::get('/clients/{client}', [ClientController::class, 'show']);
Route::get('/clients/{client}/edit', [ClientController::class, 'edit']);
Route::put('/clients/{client}', [ClientController::class, 'update']);
Route::delete('/clients/{client}', [ClientController::class, 'destroy']);

// Rutas para Servicios
Route::get('/serveis', [ServeiController::class, 'index']);
Route::get('/serveis/create', [ServeiController::class, 'create']);
Route::post('/serveis', [ServeiController::class, 'store']);
Route::get('/serveis/{servei}', [ServeiController::class, 'show']);
Route::get('/serveis/{servei}/edit', [ServeiController::class, 'edit']);
Route::put('/serveis/{servei}', [ServeiController::class, 'update']);
Route::delete('/serveis/{servei}', [ServeiController::class, 'destroy']);

// Rutas para Trabajadores
Route::get('/treballadors', [TreballadorController::class, 'index']);
Route::get('/treballadors/create', [TreballadorController::class, 'create']);
Route::post('/treballadors', [TreballadorController::class, 'store']);
Route::get('/treballadors/{treballador}', [TreballadorController::class, 'show']);
Route::get('/treballadors/{treballador}/edit', [TreballadorController::class, 'edit']);
Route::put('/treballadors/{treballador}', [TreballadorController::class, 'update']);
Route::delete('/treballadors/{treballador}', [TreballadorController::class, 'destroy']);
