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
Route::get('registro',[\App\Http\Controllers\RegisterController::class, 'create'])->name('register');
Route::get('about',[\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('login',[\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('news',[\App\Http\Controllers\NewsController::class, 'news'])->name('news');
Route::get('profile',[\App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
Route::get('suscription',[\App\Http\Controllers\SuscriptionSignupController::class, 'suscriptions'])->name('suscription');

Route::post('registro', [\App\Http\Controllers\RegisterController::class, 'store']);
