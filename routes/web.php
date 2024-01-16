<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
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

// Route::get('/', function () {
//     return view('beranda'); # letak file /resources/views/beranda.blade.php
// });

Route::get('/login',      [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postLogin']);
Route::get('/logout',     [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function(){

    Route::view('/', 'beranda');

    Route::get('/profil',    [ProfileController::class, 'profile']);

    Route::get('/buku',             [BukuController::class, 'buku']);
    Route::get('/buku/tambah',      [BukuController::class, 'tambah_buku']);
    Route::post('/buku/tambah',     [BukuController::class, 'simpan_buku']);
    Route::get('/buku/echo',        [BukuController::class, 'buku_echo']);
    Route::get('/buku/{id}',        [BukuController::class, 'view']);
    Route::get('/buku/{id}/remove', [BukuController::class, 'hapus']);
    
    Route::get('/buku/{id}/edit',   [BukuController::class, 'edit']);
    Route::post('/buku/update',     [BukuController::class, 'update_buku']);
    
    Route::get('/mahasiswa',             [MahasiswaController::class, 'daftar_mahasiswa']);
    Route::get('/mahasiswa/tambah',      [MahasiswaController::class, 'tambah']);
    Route::post('/mahasiswa/simpan',     [MahasiswaController::class, 'simpan']);
    Route::get('/mahasiswa/{id}/remove', [MahasiswaController::class, 'hapus']);
    
    Route::get('/mahasiswa/{id}/edit',   [MahasiswaController::class, 'edit']);
    Route::post('/mahasiswa/update',     [MahasiswaController::class, 'update']);
    Route::get('/mahasiswa/{id}',        [MahasiswaController::class, 'view']);
    
    Route::prefix('/user')->group(function(){
        
        Route::get('',          [UserController::class, 'index']);
        Route::get('/tambah',   [UserController::class, 'tambah']);
        Route::post('/simpan',  [UserController::class, 'simpan']);
    
    });

});
