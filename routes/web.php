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

Route::get('/', function () {
    return view('beranda'); # letak file /resources/views/beranda.blade.php
});

Route::get('/profil',    [ProfileController::class, 'profile']);

Route::get('/login',     [LoginController::class, 'login']);
Route::get('/login-2',   [LoginController::class, 'login_2']);

Route::get('/buku',      [BukuController::class, 'buku']);
Route::get('/buku/echo', [BukuController::class, 'buku_echo']);
