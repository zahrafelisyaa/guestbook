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

Route::group([
    'middleware' => ['auth'], 
    'prefix' => 'admin', //semua halaman diawali dengan/admin
    'as' => 'admin.' //diawali dengan (admin.)

], function () {

    //guestbook.test/admin -> route('admin.index')
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']) ->name('index');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
});