<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\ActeursController;

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

//Films
Route::get('/films', 
    [FilmsController::class, 'index'])->name('films.index');

Route::get('/films/nouveau',
    [FilmsController::class, 'create'])->name('films.create');
    
    Route::POST('/films', 
    [FilmsController::class, 'store'])->name('films.store');

Route::get('/films/{id}/modifier/',
    [FilmsController::class, 'edit'])->name('films.edit');

    Route::patch('/films/{id}/modifier',
    [FilmsController::class, 'update'])->name('films.update');

Route::get('/films/{film}/',
    [FilmsController::class, 'show'])->name('films.show');

Route::delete('/films/{id}',
    [FilmsController::class, 'destroy'])->name('films.destroy');

//Acteurs
Route::get('acteurs', 
    [ActeursController::class, 'index'])->name('acteurs.index');

    Route::get('/acteurs/nouveau',
    [ActeursController::class, 'create'])->name('acteurs.create');
    
    Route::POST('/acteurs', 
    [ActeursController::class, 'store'])->name('acteurs.store');

Route::get('/acteur/{id}/modifier/',
    [ActeursController::class, 'edit'])->name('acteurs.edit');

    Route::patch('/acteurs/{id}/modifier',
    [ActeursController::class, 'update'])->name('acteurs.update');

Route::get('/acteurs/{acteur}/',
    [ActeursController::class, 'show'])->name('acteurs.show');

Route::delete('/acteurs/{id}',
    [ActeursController::class, 'destroy'])->name('acteurs.destroy');

