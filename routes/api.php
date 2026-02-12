<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtworkController;
use Illuminate\Support\Facades\Route;

// Rutas Públicas: RA7 (Acceso a recursos)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/artworks', [ArtworkController::class, 'index']);
Route::get('/artworks/{id}', [ArtworkController::class, 'show']);

// Rutas Protegidas: RA4 (Autenticación y Permisos)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/artworks', [ArtworkController::class, 'store']);
    Route::put('/artworks/{id}', [ArtworkController::class, 'update']);
    Route::delete('/artworks/{id}', [ArtworkController::class, 'destroy'])->middleware('admin');
});
