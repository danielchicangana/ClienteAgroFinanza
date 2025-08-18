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


use App\Http\Controllers\EditarPerfilController;

Route::get('/editar-perfil', [EditarPerfilController::class, 'index']);


use App\Http\Controllers\PerfilController;

Route::get('/perfil', [PerfilController::class, 'index']);



use App\Http\Controllers\FinanzasController;
Route::get('/Finanzas', [FinanzasController::class, 'index']);


use App\Http\Controllers\GastosController;
Route::get('/Gastos', [GastosController::class, 'index']);


use App\Http\Controllers\IngresosController;
Route::get('/Ingresos', [IngresosController::class, 'index']);


use App\Http\Controllers\HistorialController;
Route::get('/Historial', [HistorialController::class, 'index']);


use App\Http\Controllers\ComentariosController;
Route::get('/comentarios', [ComentariosController::class, 'index']);


use App\Http\Controllers\AguacateController;
Route::get('/aguacate', [AguacateController::class, 'index']);

use App\Http\Controllers\CafeController;
Route::get('/cafe', [CafeController::class, 'index']);

use App\Http\Controllers\AgronomiaController;
Route::get('/agronomia', [AgronomiaController::class, 'index']);

use App\Http\Controllers\GraficosController;
Route::get('/graficos', [GraficosController::class, 'index']);

use App\Http\Controllers\GallinaController;
Route::get('/gallina', [GallinaController::class, 'index']);