<?php

use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use Illuminate\Support\Facades\Route;

// Auth
Route::group(['as' => 'auth.', 'middleware' => 'guest'], static function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});
Route::group(['as' => 'auth.'], static function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});

// Ajax
Route::group(['as' => 'ajax.', 'prefix' => 'ajax'], static function () {
    Route::patch('boolean/{id}/change', [AjaxController::class, 'booleanChange'])
        ->name('booleanChange')->where('id', '[0-9]+');
});


Route::get('/', DashboardController::class)->name('dashboard');
Route::resource('page', PageController::class);
