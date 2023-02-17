<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SocialiteController;

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

Route::get('/', function () {
    return view('welcome');
});



/**
 * socialite auth
 */
Route::get('/auth/redirect', [SocialiteController::class, 'redirectToGoogle']);
Route::get('/auth/callback', [SocialiteController::class, 'handleGoogleCallback']);
// Route untuk mengarahkan pengguna ke halaman login Google
// Route::get('login/google', 'Auth\LoginController@redirectToGoogle');

// Route untuk menangani callback setelah pengguna login
// Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
