<?php

use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SuscriptionSignupController;
use App\Http\Controllers\UserController;
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
/**
 * Rutas para el usuario
 */
Route::get('/',[HomeController::class, 'home'])
    ->name('home');
Route::get('register',[RegisterController::class, 'create'])
    ->name('register');
Route::get('about',[HomeController::class, 'about'])
    ->name('about');
Route::get('login',[UserController::class, 'login'])
    ->name('login');
Route::get('news',[NewsController::class, 'news'])
    ->name('news');

Route::get('suscription',[SuscriptionSignupController::class, 'suscriptions'])
    ->name('suscription');

Route::get('applicant',[ApplicantController::class, 'applicant'])
    ->name('applicant');
Route::get('applicant/{id}/edit', [ApplicantController::class, 'edit'])
    ->name('applicant.edit');
Route::get('/applicants/{id}', [ApplicantController::class, 'show'])
    ->name('applicants.show')
    ->whereNumber('id')
    ->middleware('auth');
Route::get('news', [NewsController::class, 'index'])
    ->name('news.index');
Route::get('news/{id}', [NewsController::class, 'show'])
    ->name('news.show')
    ->whereNumber('id')
    ->middleware('auth');
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login');
Route::post('/login', [LoginController::class, 'login']);

/**
 * Rutas para el perfil del usuario
 */
Route::prefix('profile')->group(function(){
    Route::get('/',[ProfileController::class, 'show'])
        ->name('profile.show')
        ->middleware('auth');
    Route::get('/menu',[ProfileController::class,'menu'])
        ->name('profile.menu')
        ->middleware('auth');
    Route::get('edit', [ProfileController::class, 'edit'])
        ->name('edit.profile')
        ->middleware('auth');
    Route::post('update', [ProfileController::class, 'update'])
        ->name('profile.update')
        ->middleware('auth');
});


/**
 * Rutas para el administrador
 */
Route::prefix('admin')->group(function () {
    Route::get('/news', [AdminNewsController::class, 'index'])
        ->name('admin.news.index')
        ->middleware('is_admin');
    Route::get('/news/create', [AdminNewsController::class, 'create'])
        ->name('admin.news.create')
        ->middleware('auth')
        ->middleware('is_admin');
    Route::post('/news', [AdminNewsController::class, 'store'])
        ->name('admin.news.store')
        ->middleware('is_admin');
    Route::get('/news/{id}/edit', [AdminNewsController::class, 'edit'])
        ->name('admin.news.edit')
        ->whereNumber('id')
        ->middleware('is_admin');
    Route::put('/news/{id}', [AdminNewsController::class, 'update'])
        ->name('admin.news.update')
        ->whereNumber('id')
        ->middleware('is_admin');
    Route::delete('/news/{id}', [AdminNewsController::class, 'destroy'])
        ->name('admin.news.destroy')
        ->whereNumber('id')
        ->middleware('is_admin');
    Route::get('/news/{id}/newsconfirmDelete', [AdminNewsController::class, 'confirmDelete'])
        ->name('admin.news.confirmDelete')
        ->whereNumber('id')
        ->middleware('is_admin');
    Route::get('/users', [UserController::class, 'index'])
        ->name('admin.users.index')
        ->middleware('is_admin');
});


Route::get('jobs/applicants', [AdminJobController::class, 'showApplicants'])
    ->name('recluiter.jobs.applicants')
    ->middleware('auth');
Route::delete('applicant/{id}', [ApplicantController::class, 'delete'])
    ->name('applicant.delete')
    ->whereNumber('id');
Route::post('registro', [RegisterController::class, 'store'])
    ->name('register.store')
    ->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');
Route::get('jobs', [JobController::class, 'index'])
    ->name('jobs.index');
Route::get('/jobs/{job}', [JobController::class, 'show'])
    ->name('jobs.show')
    ->whereNumber('job')
    ->middleware('auth');
Route::post('/jobs/{job}/apply', [JobController::class, 'apply'])
    ->name('jobs.apply')
    ->middleware('auth');

/**
 * Rutas para el reclutador
 */
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
    Route::get('/jobs/{id}/confirm-delete', [AdminJobController::class, 'confirmDelete'])
        ->name('recluiter.jobs.confirmDelete')
        ->whereNumber('id')
        ->middleware('auth');
});
Route::get('/profile/change-password', [ProfileController::class, 'ChangePassword'])->name('profile.ChangePassword');
Route::post('/profile/update-password', [ProfileController::class, 'UpdatePassword'])->name('profile.update-password');
