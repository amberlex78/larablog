<?php

use Illuminate\Support\Facades\Route;

Route::group(['as' => 'admin.', 'prefix' => 'backend'], static function () {
    require_once __DIR__ . '/admin/web.php';
});

Route::group(['as' => 'front.'], static function () {
    require_once __DIR__ . '/front/web.php';
});
