<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;


Route::get('/index', [BaseController::class, 'index']);
Route::get('/callback', [BaseController::class, 'callback']);