<?php

use App\Http\Controllers\Front\Auth\LoginController;
use App\Http\Controllers\Front\Auth\RegisterController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PageController;
use Illuminate\Support\Facades\Route;

// Auth
Route::group(['as' => 'auth.', 'middleware' => 'guest'], static function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});
Route::group(['as' => 'auth.'], static function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});


Route::get('/', HomeController::class)->name('home');
Route::get('{slug}', [PageController::class, 'index'])->name('page');
