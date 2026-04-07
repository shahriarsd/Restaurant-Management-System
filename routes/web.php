<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/',[HomeController::class,'index']);
Route::get('/users',[AdminController::class,'user']);
Route::get('/foodmenu',[AdminController::class,'foodmenu']);

Route::get('/updateview/{id}',[AdminController::class,'updateview']);

Route::post('/update/{id}',[AdminController::class,'update']);

Route::get('/deletemenu/{id}',[AdminController::class,'deletemenu']);
Route::post('/uploadfood',[AdminController::class,'upload']);
Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [HomeController::class, 'redirects'])->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function ()
// {
//     return view('home');
// })->name('dashboard');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('home');
//     })->name('dashboard');

// });
