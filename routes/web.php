<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\UserAppController;

// Route::get('userapps', [UserAppController::class, 'index']);
// Route::get('userapps/{id}', [UserAppController::class, 'show']);

use App\Http\Controllers\LoginController;




Route::get('/logi', [LoginController::class, 'show'])->name('login');
Route::post('/logi', [LoginController::class, 'authenticate']);




use App\Http\Controllers\HomeCodigoController;

Route::get('/', [HomeCodigoController::class, 'index']);
// Route::get('/home/{id}', [HomeCodigoController::class, 'show']);

use App\Http\Controllers\RegistrarseController;

Route::get('/registrarse', [RegistrarseController::class, 'show']);







use App\Http\Controllers\InicioController;

Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');



use App\Http\Controllers\EditarPerfilController;

Route::get('/editar-perfil', [EditarPerfilController::class, 'index']);


use App\Http\Controllers\PerfilController;

// Ver perfil
Route::get('/perfil', [PerfilController::class, 'show'])->name('perfil.show');

// Editar perfil
Route::get('/perfil/editar', [PerfilController::class, 'edit'])->name('perfil.edit');

// Guardar cambios
Route::put('/perfil/{id}', [PerfilController::class, 'update'])->name('perfil.update');

use App\Http\Controllers\FinanceClienteController;
Route::get('/finances', [FinanceClienteController::class, 'index'])->name('client.index');

// Formularios
Route::get('/finances/income/create', [FinanceClienteController::class, 'createIncome'])->name('client.income.create');
Route::post('/finances/income', [FinanceClienteController::class, 'storeIncome'])->name('client.income.store');

Route::get('/finances/expense/create', [FinanceClienteController::class, 'createExpense'])->name('client.expense.create');
Route::post('/finances/expense', [FinanceClienteController::class, 'storeExpense'])->name('client.expense.store');






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
use App\Http\Controllers\AuthController;

Route::get('/agronomia', [AgronomiaController::class, 'index']);

use App\Http\Controllers\GraficosController;
Route::get('/graficos', [GraficosController::class, 'index']);

use App\Http\Controllers\GallinaController;
use App\Http\Controllers\UserAppController;

Route::get('/gallina', [GallinaController::class, 'index']);


Route::get('user_apps', [UserAppController::class, 'index'])->name('user_apps');
Route::get('user_apps/{user_app}', [UserAppController::class, 'show'])->name('user_app.show');





//diseño
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

