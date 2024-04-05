<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home-new');

Auth::routes();

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about-new');
