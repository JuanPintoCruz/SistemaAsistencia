<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    // Dashboard general - redirige según rol
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            $user = auth()->user();
            
            switch($user->rol_id) {
                case 1: // Admin
                    return redirect()->route('admin.dashboard');
                case 2: // Trabajador
                    return redirect()->route('trabajador.dashboard');
                default:
                    return Inertia::render('Dashboard');
            }
        })->name('dashboard');
    });

    // Rutas para Admin
    Route::middleware(['role:1'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', function () {
            return Inertia::render('Admin/Dashboard');
        })->name('dashboard');
    });

    // Rutas para Trabajador
    Route::middleware(['role:2'])->prefix('trabajador')->name('trabajador.')->group(function () {
        Route::get('/dashboard', function () {
            return Inertia::render('Trabajador/Dashboard');
        })->name('dashboard');
    });

});