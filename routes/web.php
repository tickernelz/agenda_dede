<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
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
    Route::group(['middleware' => ['role:super_admin']], function () {
        // Kelola User
        Route::get('user', [UserController::class, 'index'])->name('index-user');
        Route::get('user/tambah', [UserController::class, 'tambahindex'])->name('tambahindex-user');
        Route::post('user/tambah/post', [UserController::class, 'tambah'])->name('tambah-user');
        Route::get('user/edit/{id}', [UserController::class, 'editindex'])->name('editindex-user');
        Route::post('user/edit/{id}/post', [UserController::class, 'edit'])->name('edit-user');
        Route::get('user/hapus/{id}', [UserController::class, 'hapus'])->name('hapus-user');
    });
    Route::group(['middleware' => ['role:super_admin|admin']], function () {
        Route::get('kegiatan', [KegiatanController::class, 'index'])->name('index-kegiatan');
        Route::get('kegiatan/cari', [KegiatanController::class, 'cari'])->name('cari-kegiatan');
        Route::post('kegiatan/cari/tambah-post', [KegiatanController::class, 'tambah'])->name('tambah-kegiatan');
        Route::get('kegiatan/cari/hapus/{id}', [KegiatanController::class, 'hapus'])->name('hapus-kegiatan');
    });
    Route::get('home', [HomeController::class, 'index'])->name('home');
});
