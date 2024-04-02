<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('layouts.index');
});



// Rotas de autenticação
//Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rotas de registro
//Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::withoutMiddleware([Authenticate::class])->group(function () {
    Route::get('/home', [HomeController::class, 'store'])->name('home-view');
});
