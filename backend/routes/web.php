<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {

    if (Auth::check()) {
        return redirect('/chat');
    }

    return redirect('/login');
});
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])
//     ->middleware('auth:sanctum');
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/chat', [MessageController::class, 'index'])->middleware('auth');

Route::post('/send-message', [MessageController::class, 'sendMessage']);

Route::post('/tokens/create', [AuthController::class, 'generateToken']);

