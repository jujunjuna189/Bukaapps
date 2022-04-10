<?php

use App\Http\Controllers\Master\KategoriKasController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kategori_kas', [KategoriKasController::class, 'kategori_kas'])->name('kategori_kas');
Route::get('/kategori_kas/add', [KategoriKasController::class, 'add'])->name('kategori_kas.add');
// user
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/add', [UserController::class, 'add'])->name('users.add');
Route::post('/users/proses', [UserController::class, 'add_proses'])->name('users.add.proses');
Route::get('/users/update', [UserController::class, 'update'])->name('users.update');
Route::post('/users/proses', [UserController::class, 'update_proses'])->name('users.update.proses');