<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/redirects',[HomeController::class,'redirects'])->name('redirect');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
});
