<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserAppController;

Route::get('userapps', [UserAppController::class, 'index']);
Route::get('userapps/{id}', [UserAppController::class, 'show']);


