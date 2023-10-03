<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/webSegura', function () {
    return "Estas autentificat!!";
})->middleware('auth');

Route::group(['middleware'=>'auth'], function() {
	Route::get('/planets', [App\Http\Controllers\PlanetController::class, 'index'])->name('planets.index');
	Route::get('/planets/create', [App\Http\Controllers\PlanetController::class, 'create'])->name('planets.create');
	Route::get('/planets/show/{planet}', [App\Http\Controllers\PlanetController::class, 'show'])->name('planets.show');

	Route::post('/planets/store', [App\Http\Controllers\PlanetController::class, 'store'])->name('planets.store');

	Route::get('/planets/destroy/{planet}', [App\Http\Controllers\PlanetController::class, 'destroy'])->name('planets.destroy');

	Route::get('/planets/edit/{planet}', [App\Http\Controllers\PlanetController::class, 'edit'])->name('planets.edit');

	Route::post('/planets/update/{planet}', [App\Http\Controllers\PlanetController::class, 'update'])->name('planets.update');
});
