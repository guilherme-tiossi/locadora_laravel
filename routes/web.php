<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/dashboard', 'App\Http\Controllers\tbfilmesController@listarfilmes', function () {
    return redirect()->intended(RouteServiceProvider::HOME);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/meus_filmes', 'App\Http\Controllers\Locatario\meusFilmes@listarmeusfilmes', function(){
    return redirect()->intended(RouteServiceProvider::HOME);
})->middleware(['auth', 'verified'])->name('meus_filmes');

Route::get('/dashboard_adm', function() {
    return view('dashboard_adm');
})->middleware('admin');

Route::get('/crud_adm', function() {
    return view('crud_adm');
})->middleware('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/alugar', 'App\Http\Controllers\Locatario\AluguelFilmeController@alugar');

});

require __DIR__.'/auth.php';

