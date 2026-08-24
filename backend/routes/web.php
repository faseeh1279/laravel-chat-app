<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])
//     ->middleware('auth:sanctum');

Route::get('/chat', [MessageController::class, 'index']);
Route::post('/send-message', [MessageController::class, 'sendMessage']);