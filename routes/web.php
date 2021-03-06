<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BagianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiKegiatan;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KirimEmailController;
use App\Http\Controllers\UserController;
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

Route::get('/', [AuthController::class, 'formlogin'])->name('index');
Route::get('login', [AuthController::class, 'formlogin'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('login', [AuthController::class, 'login'])->name('post-login');

// Route Akses
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['can:kelola user']], function () {
        // Kelola User
        Route::get('user', [UserController::class, 'index'])->name('index-user');
        Route::get('user/tambah', [UserController::class, 'tambahindex'])->name('tambahindex-user');
        Route::post('user/tambah/post', [UserController::class, 'tambah'])->name('tambah-user');
        Route::get('user/edit/{id}', [UserController::class, 'editindex'])->name('editindex-user');
        Route::post('user/edit/{id}/post', [UserController::class, 'edit'])->name('edit-user');
        Route::get('user/hapus/{id}', [UserController::class, 'hapus'])->name('hapus-user');
    });
    Route::group(['middleware' => ['can:kelola bagian']], function () {
        // Kelola User
        Route::get('bagian', [BagianController::class, 'index'])->name('index-bagian');
        Route::get('bagian/tambah', [BagianController::class, 'tambahindex'])->name('tambahindex-bagian');
        Route::post('bagian/tambah/post', [BagianController::class, 'tambah'])->name('tambah-bagian');
        Route::get('bagian/edit/{id}', [BagianController::class, 'editindex'])->name('editindex-bagian');
        Route::post('bagian/edit/{id}/post', [BagianController::class, 'edit'])->name('edit-bagian');
        Route::get('bagian/hapus/{id}', [BagianController::class, 'hapus'])->name('hapus-bagian');
    });
    Route::group(['middleware' => ['can:kelola agenda']], function () {
        Route::get('kegiatan', [KegiatanController::class, 'index'])->name('index-kegiatan');
        Route::get('kegiatan/cari', [KegiatanController::class, 'cari'])->name('cari-kegiatan');
        Route::post('kegiatan/cari/tambah-post', [KegiatanController::class, 'tambah'])->name('tambah-kegiatan');
        Route::post('kegiatan/cari/edit-post', [KegiatanController::class, 'edit'])->name('edit-kegiatan');
        Route::get('kegiatan/cari/hapus/{id}', [KegiatanController::class, 'hapus'])->name('hapus-kegiatan');
        Route::get('kegiatan/cari/hapus-berkas/{id}', [KegiatanController::class, 'hapus_berkas'])->name('hapus-berkas-kegiatan');
        Route::get('get-kegiatan', [KegiatanController::class, 'getdataKegiatan'])->name('get-kegiatan');
        Route::get('/kirim_email/{id}', [KirimEmailController::class, 'kirim'])->name('kirim-notifikasi');

    });
    Route::group(['middleware' => ['can:melihat agenda']], function () {
        Route::get('informasi', [InformasiKegiatan::class, 'index'])->name('index-informasi');
    });
    Route::get('home', [HomeController::class, 'index'])->name('home');
});
