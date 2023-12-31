<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ImovelController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/', [LoginController::class, 'ShowLoginForm']);

Auth::routes();

Route::middleware('auth')->group(function(){
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Rotas para manipulação de Usuarios
    Route::resource('usuarios', UsuarioController::class);

    //Rotas para manipulação de Tipo de Imoveis
    Route::resource('tipos', TipoController::class);

     //Rotas para manipulação de Imovels
     Route::resource('imovels', ImovelController::class);

});
