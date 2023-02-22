<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/login', [LoginController::class, "index"])->middleware('guest');
Route::post('/login', [LoginController::class, "login"])->name('login');
Route::get('/auth/google/redirect', [SocialiteController::class, 'redirecttogoogle']);
Route::get('/auth/google/callback', [SocialiteController::class, 'handlegooglecallback']);
Route::get('/register', [RegisterController::class, "index"])->middleware('guest');
Route::post('/register', [RegisterController::class, "register"])->name('register');
Route::post('/logout', [DashboardController::class, "logout"])->middleware('auth');
Route::get('/lupa-password', [ForgotPasswordController::class, 'forgotpassword']);
Route::post('/lupa-password', [ForgotPasswordController::class, 'createtoken']);
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'resetpassword'])->name('reset-password');
Route::post('/reset-password', [ForgotPasswordController::class, 'sendresetpassword']);

// Route::post('/hubungi-mail', [EmailController::class, "hubungi"]);
// Route::get('/hubungi-mail', [EmailController::class, "hubungi"]);
// Route::post('/registrasi-mail', [EmailController::class, "registrasi"]);
// Route::get('/registrasi-mail', [EmailController::class, "registrasi"]);

Route::group(['middleware'=>['auth','role:0']], function()
{
    Route::get('/admin', [DashboardController::class, "admin"])->name('dashboard-admin');
    Route::get('/profile-admin', [DashboardController::class, "profileadmin"]);
});