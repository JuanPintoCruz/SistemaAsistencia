<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\TrabajadorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



//Trabajadores
Route::get('trabajadores', [TrabajadorController::class, 'index']);        
Route::get('trabajadores/{id}', [TrabajadorController::class, 'show']);   
Route::post('trabajadores', [TrabajadorController::class, 'store']);     


//Áreas 
Route::get('areas', [AreasController::class, 'index']);                    
Route::get('areas/{id}', [AreasController::class, 'show']);                
Route::post('areas', [AreasController::class, 'store']);                   
Route::put('areas/{id}', [AreasController::class, 'update']);
Route::delete('areas/{id}', [AreasController::class, 'destroy']);