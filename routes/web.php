<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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

Route::view('/', 'beranda');

Route::get('/profil',    [ProfileController::class, 'profile']);

Route::get('/login',      [LoginController::class, 'login']);
Route::post('/postlogin', [LoginController::class, 'postLogin']);

Route::get('/buku',             [BukuController::class, 'buku']);
Route::get('/buku/tambah',      [BukuController::class, 'tambah_buku']);
Route::post('/buku/tambah',     [BukuController::class, 'simpan_buku']);
Route::get('/buku/echo',        [BukuController::class, 'buku_echo']);
Route::get('/buku/{id}',        [BukuController::class, 'view']);
Route::get('/buku/{id}/remove', [BukuController::class, 'hapus']);

Route::get('/buku/{id}/edit',   [BukuController::class, 'edit']);
Route::post('/buku/update',     [BukuController::class, 'update_buku']);
