<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajadorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rutas para trabajadores
Route::apiResource('trabajadores', TrabajadorController::class);

// O si prefieres definir las rutas una por una:
// Route::get('trabajadores', [TrabajadorController::class, 'index']);
// Route::get('trabajadores/{id}', [TrabajadorController::class, 'show']);
// Route::post('trabajadores', [TrabajadorController::class, 'store']);
// Route::put('trabajadores/{id}', [TrabajadorController::class, 'update']);
// Route::delete('trabajadores/{id}', [TrabajadorController::class, 'destroy']);
