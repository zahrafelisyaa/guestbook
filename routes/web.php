<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
