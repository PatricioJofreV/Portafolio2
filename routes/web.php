<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/', HomeController::class)->name('home');

Route::get('usuario', [UsuarioController::class, 'index'])->name('usuarios.index');

Route::post('usuario', [UsuarioController::class, 'create'])->name('usuarios.create');

Route::get('usuario/registro', [UsuarioController::class, 'registro'])->name('usuarios.registro');

Route::get('usuario/{usuario}', [UsuarioController::class, 'perfil'])->name('usuarios.perfil');

Route::put('usuario/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');

Route::get('usuario/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');