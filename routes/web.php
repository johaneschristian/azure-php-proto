<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\ProtectedController;

Route::get('/index', [BaseController::class, 'index'])->name('login');
Route::get('/callback', [BaseController::class, 'callback']);

Route::view('/register', 'register');
Route::post('/register', [BaseController::class, 'registerEmail']);

Route::get('/protected', [ProtectedController::class, 'protectedRoute'])->middleware('auth');