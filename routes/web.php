<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\UserAppController;

// Route::get('userapps', [UserAppController::class, 'index']);
// Route::get('userapps/{id}', [UserAppController::class, 'show']);

use App\Http\Controllers\LoginController;




Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);




use App\Http\Controllers\HomeCodigoController;

Route::get('home', [HomeCodigoController::class, 'index']);
Route::get('home/{id}', [HomeCodigoController::class, 'show']);

use App\Http\Controllers\RegistrarseController;

Route::get('/registrarse', [RegistrarseController::class, 'show']);





use App\Http\Controllers\InicioController;

Route::get('/inicio', [InicioController::class, 'index']);


