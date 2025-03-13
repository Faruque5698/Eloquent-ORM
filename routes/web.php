<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [\App\Http\Controllers\ArticleController::class, "store"]);

Route::get('users', [\App\Http\Controllers\UserController::class, 'index']);
