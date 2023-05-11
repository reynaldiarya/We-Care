<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\VerifikasiAkunController;
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

/* Halaman Utama */

Route::get('/', [LandingController::class, "index"]);
Route::get('/buat-campaign', [CampaignController::class, "buatcampaigndonatur"]);
Route::post('/createCampaign', [CampaignController::class, "createcampaigndonatur"]);
Route::post('/logout', [DashboardController::class, "logout"]);

/* Login & Register */
Route::get('/login', [LoginController::class, "index"])->middleware('guest');
Route::post('/login', [LoginController::class, "login"])->name('login');
Route::get('/auth/google/redirect', [SocialiteController::class, "redirecttogoogle"]);
Route::get('/auth/google/callback', [SocialiteController::class, "handlegooglecallback"]);
Route::get('/register', [RegisterController::class, "index"])->middleware('guest');
Route::post('/register', [RegisterController::class, "register"])->name('register');

/* Lupa Password */
Route::get('/lupa-password', [ForgotPasswordController::class, "forgotpassword"]);
Route::post('/lupa-password', [ForgotPasswordController::class, "createtoken"]);
Route::get('/reset-password/{token}', [ForgotPasswordController::class, "resetpassword"])->name('reset-password');
Route::post('/reset-password', [ForgotPasswordController::class, "sendresetpassword"]);

/* Verifikasi Email */
Route::get('/verifikasi/{token}', [VerifikasiAkunController::class, "verifikasiakun"])->name('verifikasi-akun');

/* Blog */
Route::get('/blog', [BlogController::class, "blogview"]);
Route::get('/blog/{slug}', [BlogController::class, "blogviewdetail"]);

/* Campaign */
Route::get('/campaign/{id}', [CampaignController::class, "index"]);

/* Dashboard Admin */
Route::group(['middleware' => ['auth', 'role:0']], function () {
    /* Dashboard Admin */
    Route::get('/admin', [DashboardController::class, "admin"])->name('dashboard-admin');
    Route::get('/admin/profil', [DashboardController::class, "profileadmin"]);
    Route::post('/admin/profil-update', [DashboardController::class, "updateprofileadmin"]);
    Route::post('/admin/password-update', [DashboardController::class, "updatepasswordadmin"]);
    /* Admin Data User */
    Route::get('/admin/donatur', [DonaturController::class, "donatur"]);
    Route::get('/admin/pegawai', [PegawaiController::class, "pegawai"]);
    Route::post('/admin/pegawai/tambah-pegawai', [PegawaiController::class, "tambahpegawai"]);
    Route::post('/admin/pegawai/hapus-pegawai', [PegawaiController::class, "deletepegawai"]);
    /* Admin Campaign */
    Route::get('/admin/campaign/daftar-campaign', [CampaignController::class, "campaign"]);
    Route::get('/admin/campaign/berita', [CampaignController::class, "news"]);
    Route::get('/admin/campaign/berita/tambah-berita', [CampaignController::class, "tambahnews"]);
    Route::post('/admin/campaign/berita/tambah-berita/upload-gambar', [CampaignController::class, "uploadgambar"])->name('upload-gambar-berita');
    Route::post('/admin/campaign/berita/post-tambah-berita', [CampaignController::class, "posttambahberita"]);
    Route::get('/admin/campaign/berita/edit-berita/{id}', [CampaignController::class, "editberita"]);
    Route::post('/admin/campaign/berita/post-edit-berita', [CampaignController::class, "posteditberita"]);
    Route::get('/admin/campaign/kategori', [CampaignController::class, "kategori"]);
    Route::post('/admin/campaign/kategori/tambah-kategori', [CampaignController::class, "tambahkategori"]);
    Route::post('/admin/campaign/kategori/hapus-kategori', [CampaignController::class, "deletekategori"]);
    /* Admin Transaksi */
    Route::get('/admin/transaksi-donasi', [TransaksiController::class, "transaksi"]);
    /* Admin Blog */
    Route::get('/admin/artikel-blog', [BlogController::class, "blog"]);
    Route::post('/admin/hapus-artikel', [BlogController::class, "deleteartikel"])->name('hapus-artikel');
    Route::get('/admin/tambah-artikel', [BlogController::class, "tambahartikel"]);
    Route::post('/admin/tambah-artikel/upload-gambar', [BlogController::class, "uploadgambar"])->name('upload-gambar-artikel');
    Route::post('/admin/post-tambah-artikel', [BlogController::class, "posttambahartikel"]);
    Route::get('/admin/edit-artikel/{id}', [BlogController::class, "editartikel"]);
    Route::post('/admin/post-edit-artikel', [BlogController::class, "posteditartikel"]);
});
