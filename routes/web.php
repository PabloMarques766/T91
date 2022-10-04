<?php

use App\Http\Controllers\UsuariosController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('usuarios')
->middleware(['auth'])
->controller(UsuariosController::class)
->group(function () {
    Route::get('/' , 'index')->name('usuario.index');
    Route::get('/novo', 'create')->name('usuario.create');
    Route::get('/editar/{id}', 'edit')->name('usuario.edit');
    Route::get('/mostrar/{id}', 'show')->name('usuario.show');
    Route::post('/cadastrar', 'store')->name('usuario.store');
    Route::post('/atualizar/{id}', 'update')->name('usuario.update');
    Route::post('/deletar/{id}', 'destroy')->name('usuario.destroy');
});