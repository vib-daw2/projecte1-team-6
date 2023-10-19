<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServeiController;
use App\Http\Controllers\TreballadorController;

Route::resource('clients', ClienteController::class);
Route::resource('serveis', ServeiController::class);
Route::resource('treballadors', TreballadorController::class);


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

// Rutas para Clientes
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');

// Rutas para Servicios
Route::get('/serveis', [ServeiController::class, 'index'])->name('serveis.index');
Route::get('/serveis/create', [ServeiController::class, 'create'])->name('serveis.create');
Route::post('/serveis', [ServeiController::class, 'store'])->name('serveis.store');
Route::get('/serveis/{servei}', [ServeiController::class, 'show'])->name('serveis.show');
Route::get('/serveis/{servei}/edit', [ServeiController::class, 'edit'])->name('serveis.edit');
Route::put('/serveis/{servei}', [ServeiController::class, 'update'])->name('serveis.update');
Route::delete('/serveis/{servei}', [ServeiController::class, 'destroy'])->name('serveis.destroy');

// Rutas para Trabajadores
Route::get('/treballadors', [TreballadorController::class, 'index'])->name('treballadors.index');
Route::get('/treballadors/create', [TreballadorController::class, 'create'])->name('treballadors.create');
Route::post('/treballadors', [TreballadorController::class, 'store'])->name('treballadors.store');
Route::get('/treballadors/{treballador}', [TreballadorController::class, 'show'])->name('treballadors.show');
Route::get('/treballadors/{treballador}/edit', [TreballadorController::class, 'edit'])->name('treballadors.edit');
Route::put('/treballadors/{treballador}', [TreballadorController::class, 'update'])->name('treballadors.update');
Route::delete('/treballadors/{treballador}', [TreballadorController::class, 'destroy'])->name('treballadors.destroy');
