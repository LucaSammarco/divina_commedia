<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\HomeController as GuestHomeController;
use App\Http\Controllers\CanticaController;
use App\Http\Controllers\CantoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Rotta per la home page: renderizza la pagina Home.vue con Inertia
Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

// Rotte per visualizzare tutte le cantiche e una cantica specifica
Route::get('/cantiche', [CanticaController::class, 'index'])->name('cantiche.index');
Route::get('/cantiche/{id}', [CanticaController::class, 'show'])->name('cantiche.show');


// Rotta per visualizzare un canto specifico
Route::get('/canto/{id}', [CantoController::class, 'show'])->name('canti.show');

// Rotte di autenticazione (login, registrazione, ecc.)
// Auth::routes();

// Rotta per la dashboard degli utenti autenticati
// Route::get('/home', [GuestHomeController::class, 'index'])->name('dashboard');

// Rotte per l'area admin, protette tramite middleware 'auth'
// Route::middleware('auth')->name('admin.')->prefix('admin/')->group(function () {
//     Route::get('home', [AdminHomeController::class, 'index'])->name('home');
// });
