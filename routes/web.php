<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('registro',[\App\Http\Controllers\ActiveJobsController::class, 'register'])->name('register');
Route::get('about',[\App\Http\Controllers\HomeController::class, 'about'])->name('about');
