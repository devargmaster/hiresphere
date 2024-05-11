<?php

use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuscriptionSignupController;
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

Route::get('/',[HomeController::class, 'home'])
    ->name('home');
Route::get('register',[\App\Http\Controllers\RegisterController::class, 'create'])
    ->name('register');
Route::get('about',[HomeController::class, 'about'])
    ->name('about');
Route::get('login',[\App\Http\Controllers\UserController::class, 'login'])
    ->name('login');
Route::get('news',[\App\Http\Controllers\NewsController::class, 'news'])
    ->name('news');
Route::get('profile',[ProfileController::class, 'profile'])
    ->name('profile')
    ->middleware('auth');
Route::get('profile/edit', [ProfileController::class, 'edit'])
    ->middleware('auth')
    ->name('edit.profile');
Route::put('profile', [ProfileController::class, 'update'])
    ->middleware('auth')
    ->name('profile.update');
Route::get('suscription',[SuscriptionSignupController::class, 'suscriptions'])
    ->name('suscription');
Route::get('applicant',[ApplicantController::class, 'applicant'])
    ->name('applicant');
Route::get('applicant/{id}/edit', [ApplicantController::class, 'edit'])
    ->name('applicant.edit');
Route::get('news', [NewsController::class, 'index'])
    ->name('news.index');
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::prefix('admin')->group(function () {
    Route::get('/news', [AdminNewsController::class, 'index'])
        ->name('admin.news.index')
        ->middleware('auth');
    Route::get('/news/create', [AdminNewsController::class, 'create'])
        ->name('admin.news.create')
        ->middleware('auth')
        ->middleware('auth');
    Route::post('/news', [AdminNewsController::class, 'store'])
        ->name('admin.news.store')
        ->middleware('auth');
    Route::get('/news/{id}/edit', [AdminNewsController::class, 'edit'])
        ->name('admin.news.edit')
        ->whereNumber('id')
        ->middleware('auth');
    Route::put('/news/{id}', [AdminNewsController::class, 'update'])
        ->name('admin.news.update')
        ->whereNumber('id')
        ->middleware('auth');
    Route::delete('/news/{id}', [AdminNewsController::class, 'destroy'])
        ->name('admin.news.destroy')
        ->whereNumber('id')
        ->middleware('auth');
});

Route::get('jobs/applicants', [AdminJobController::class, 'showApplicants'])
    ->name('recluiter.jobs.applicants')
    ->middleware('auth');
Route::delete('applicant/{id}', [\App\Http\Controllers\ApplicantController::class, 'delete'])
    ->name('applicant.delete')
    ->whereNumber('id');
Route::post('registro', [\App\Http\Controllers\RegisterController::class, 'store'])
    ->name('register.store')
    ->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');
Route::get('jobs', [\App\Http\Controllers\JobController::class, 'index'])
    ->name('jobs.index');
Route::get('/jobs/{job}', [\App\Http\Controllers\JobController::class, 'show'])
    ->name('jobs.show')
    ->whereNumber('job');
Route::post('/jobs/{job}/apply', [\App\Http\Controllers\JobController::class, 'apply'])
    ->name('jobs.apply')
    ->middleware('auth');

Route::prefix('recluiter')->group(function () {
    Route::get('jobs', [AdminJobController::class, 'index'])
        ->name('recluiter.jobs.index')
        ->middleware('auth');
    Route::get('jobs/create', [AdminJobController::class, 'create'])
        ->name('recluiter.addjob')->middleware('auth')
        ->middleware('auth');
    Route::post('jobs', [AdminJobController::class, 'store'])
        ->name('recluiter.jobs.store')
        ->middleware('auth');
    Route::get('/jobs/{id}/edit', [AdminJobController::class, 'edit'])
        ->name('recluiter.jobs.edit')
        ->whereNumber('id');
    Route::put('/jobs/{id}', [AdminJobController::class, 'update'])
        ->name('recluiter.jobs.update')
        ->whereNumber('id');
    Route::delete('/jobs/{id}', [AdminJobController::class, 'destroy'])
        ->name('recluiter.jobs.destroy')
        ->whereNumber('id');
});
