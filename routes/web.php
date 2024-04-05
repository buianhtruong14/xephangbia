<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login']);

Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'register']);
Route::get('/', function () {
    return view('welcome');
});
