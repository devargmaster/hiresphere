<?php

use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\NewsController;
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
Route::get('register',[\App\Http\Controllers\RegisterController::class, 'create'])->name('register');
Route::get('about',[\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('login',[\App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::get('news',[\App\Http\Controllers\NewsController::class, 'news'])->name('news');
Route::get('profile',[\App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
Route::get('suscription',[\App\Http\Controllers\SuscriptionSignupController::class, 'suscriptions'])->name('suscription');
Route::get('applicant',[\App\Http\Controllers\ApplicantController::class, 'applicant'])->name('applicant');
Route::get('applicant/{id}/edit', [\App\Http\Controllers\ApplicantController::class, 'edit'])->name('applicant.edit');

Route::get('news', [NewsController::class, 'index'])->name('news.index');


Route::prefix('admin')->group(function () {
    Route::get('/news', [AdminNewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news', [AdminNewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{id}/edit', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/{id}', [AdminNewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/news/{id}', [AdminNewsController::class, 'destroy'])->name('admin.news.destroy');
});

Route::delete('applicant/{id}', [\App\Http\Controllers\ApplicantController::class, 'delete'])->name('applicant.delete');
Route::post('registro', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');

Route::get('jobs', [\App\Http\Controllers\JobController::class, 'index'])->name('jobs.index');
Route::prefix('recluiter')->group(function () {
    Route::get('jobs', [AdminJobController::class, 'index'])->name('recluiter.jobs.index');
    Route::get('jobs/create', [AdminJobController::class, 'create'])->name('recluiter.addjob');
    Route::post('jobs', [AdminJobController::class, 'store'])->name('recluiter.jobs.store');
    Route::put('/jobs/{id}', [AdminJobController::class, 'update'])->name('admin.jobs.update');
    Route::delete('/jobs/{id}', [AdminJobController::class, 'destroy'])->name('admin.jobs.destroy');
});
