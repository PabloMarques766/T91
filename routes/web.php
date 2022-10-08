<?php

use App\Http\Controllers\UserController;
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


Route::prefix('/')
->middleware(['auth'])
->controller(UserController::class)
->group(function () {
    Route::get('/' , 'index')->name('home.index');
    Route::get('/novo', 'create')->name('home.create');
    Route::get('/editar/{id}', 'edit')->name('home.edit');
    Route::get('/mostrar/{id}', 'show')->name('home.show');
    Route::post('/cadastrar', 'store')->name('home.store');
    Route::post('/atualizar/{id}', 'update')->name('home.update');
    Route::get('/deletar/{id}', 'destroy')->name('home.destroy');
});
require __DIR__.'/auth.php';