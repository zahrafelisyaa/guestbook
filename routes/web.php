<?php

use App\Http\Controllers\FormGuestController;
use App\Models\Guest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', [FormGuestController::class,'index'])->name('form.index');
Route::post('/', [FormGuestController::class,'store'])->name('form.store');

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
    


    //CRUD institution
    Route::resource('/institution',App\Http\Controllers\InstitutionController::class);
    Route::resource('/guests', App\Http\Controllers\GuestController::class)
    ->only(['index','show', 'destroy']);
    Route::resource('/reports', App\Http\Controllers\ReportController::class)
    ->only(['index','show','destroy']);
});





Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login'); // Arahkan ke halaman login setelah logout
})->name('logout');

