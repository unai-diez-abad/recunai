<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioControler;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\SolicitanteController;
use App\Http\Controllers\ComentarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
//inicio/registro y cierre de session
Route::get('/', [UsuarioControler::class,'index'])->name('login');
Route::post('/', [UsuarioControler::class,'login'])->name('login.check');
Route::get('/logout',[UsuarioControler::class,'logout'])->name('logout');

Route::get('/register', [UsuarioControler::class,'create'])->name('register.create');
Route::post('/register', [UsuarioControler::class,'store'])->name('register.store');
//control de inicio de session

Route::middleware('auth:usuario')->group(function(){
//inicial
Route::get('/inicio', [ObraController::class,'index'])->name('obra.inicio');
//ir a nueva obra
Route::get('/nuevaobra', [ObraController::class,'create'])->name('obra.create');
Route::post('/nuevaobra', [ObraController::class,'store'])->name('obra.store');
//Ver obras
Route::get('/listaobra', [ObraController::class,'show'])->name('obra.show');

//ir a nuevo solicitante
Route::get('/nuevosolicitante', [SolicitanteController::class,'create'])->name('solicitante.create');
Route::post('/nuevosolicitante', [SolicitanteController::class,'store'])->name('solicitante.store');
//ver solicitante
Route::get('/versolicitantes', [SolicitanteController::class,'show'])->name('solicitante.show');

//ir a edicion de obra
Route::get('/listaobra/{id}', [ObraController::class,'edit'])->name('obra.edit');
Route::post('/listaobra/{id}', [ObraController::class,'update'])->name('obra.update');

//poner nuevo comentario
Route::get('/crearobra/{id}', [ComentarioController::class,'create'])->name('comentario.create');
Route::post('/crearobra/{id}', [ComentarioController::class,'store'])->name('comentario.store');

//ver comentarios de una obra
Route::get('/comentarobra/{id}', [ComentarioController::class,'show'])->name('comentario.show');
});