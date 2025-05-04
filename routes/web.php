<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\LoginPelangganController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\RegistPelangganController;
use Illuminate\Support\Facades\Auth;
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


/* ========================== PELANGGAN ==========================*/
Route::resource('/', App\Http\Controllers\HomeController::class);
Route::resource('/about', App\Http\Controllers\AboutController::class);
Route::resource('/news', App\Http\Controllers\NewsController::class);
Route::resource('/contact', App\Http\Controllers\ContactController::class);
Route::resource('/wisata', App\Http\Controllers\WisataController::class);


Route::get('/register-pelanggan', [RegistPelangganController::class, 'index']);
Route::post('/register-pelanggan', [RegistPelangganController::class, 'register'])->name('register-pelanggan');
Route::get('/login-pelanggan', [LoginPelangganController::class, 'index'])->name('login-pelanggan');
Route::post('/login-pelanggan', [LoginPelangganController::class, 'login']);

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


/* ========================== KARYAWAN ==========================*/

    Route::get('/login-karyawan', [LoginAdminController::class, 'index'])->name('login');
    Route::post('/login-karyawan', [LoginAdminController::class, 'login'])->name('login');


    Route::get('/logout', [LoginAdminController::class, 'logout'])->name('logout');
    Route::get('/logout', [LoginPelangganController::class, 'logout']);

/* ===================== admin =================================*/
Route::group(['middleware' => ['auth'], 'as' => 'admin'], function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/userM', [AdminController::class, 'user'])->name('user');
    Route::get('/newsM', [AdminController::class, 'news'])->name('news');
});

/* ===================== bendahara  ========================*/
Route::group(['middleware' => ['auth'], 'as' => 'bendahara'], function(){
    Route::get('/bendahara', [BendaharaController::class, 'index'])->name('bendahara');
    Route::get('/wisata-list', [BendaharaController::class, 'paket'])->name('paket');
    Route::get('/homestay', [BendaharaController::class, 'homestay'])->name('homestay');
});

/* =====================pemilik =========================*/
Route::group(['middleware' => ['auth'], 'as' => 'pemilik'], function(){
    Route::get('/pemilik', [OwnerController::class, 'index'])->name('pemilik');
});