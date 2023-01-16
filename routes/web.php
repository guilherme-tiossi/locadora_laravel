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

Route::get('/dashboard_adm', 'App\Http\Controllers\financeiroController@index', function() {
    return view('dashboard_adm');
})->middleware('admin')->name('pegar_ano');

Route::get('/crud_adm', 'App\Http\Controllers\AdminCrudController@index', function() {
    return view('crud_adm');
})->middleware('admin');

Route::get('/empregados_adm','App\Http\Controllers\funcionariosController@index', function() {
    return view('empregados_adm');
})->middleware('admin');

Route::get('/teste', function() {
    return view('teste');
});

    Route::post('create_genero', 'App\Http\Controllers\tbgenerosController@store')->name('create_genero');
    Route::post('create_filme', 'App\Http\Controllers\tbfilmesController@store')->name('create_filme');
    Route::post('update_filme', 'App\Http\Controllers\tbfilmesController@update')->name('update_filme');
    Route::post('update_genero', 'App\Http\Controllers\tbgenerosController@update')->name('update_genero');
    Route::post('update_funcionario', 'App\Http\Controllers\funcionariosController@update')->name('update_funcionario');
    Route::get('delete_funcionario', 'App\Http\Controllers\funcionariosController@delete')->name('delete_funcionario');
    Route::get('delete_genero', 'App\Http\Controllers\tbgenerosController@delete')->name('delete_genero');
    Route::get('delete_filme', 'App\Http\Controllers\tbfilmesController@delete')->name('delete_filme');
    Route::post('create_funcionario', 'App\Http\Controllers\funcionariosController@store')->name('create_funcionario');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/alugar', 'App\Http\Controllers\Locatario\AluguelFilmeController@alugar');
    Route::get('/devolver', 'App\Http\Controllers\Locatario\AluguelFilmeController@devolver');
});

require __DIR__.'/auth.php';

