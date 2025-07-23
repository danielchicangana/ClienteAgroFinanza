<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserAppController;

Route::get('userapps', [UserAppController::class, 'index']);
Route::get('userapps/{id}', [UserAppController::class, 'show']);

use App\Http\Controllers\LoginController;

use App\Http\Controllers\AuthClienteController;
use Illuminate\Auth\Events\Login;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('cliente.login.form');
Route::post('login', [LoginController::class, 'login'])->name('cliente.login');






