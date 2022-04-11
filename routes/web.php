<?php

use App\Http\Controllers\Master\KategoriKasController;
use App\Http\Controllers\Transaksi\PemasukanController;
use App\Http\Controllers\Transaksi\PengeluaranController;
use App\Http\Controllers\Transaksi\PiutangController;
use App\Http\Controllers\Transaksi\TransaksiController;
use App\Http\Controllers\Transaksi\UtangController;
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
// Kategori Kas
Route::get('/kategori_kas', [KategoriKasController::class, 'kategori_kas'])->name('kategori_kas');
Route::get('/kategori_kas/add', [KategoriKasController::class, 'add'])->name('kategori_kas.add');
Route::post('/kategori_kas/add/proses', [KategoriKasController::class, 'add_proses'])->name('kategori_kas.add.proses');
Route::get('/kategori_kas/update', [KategoriKasController::class, 'update'])->name('kategori_kas.update');
Route::post('/kategori_kas/update/proses', [KategoriKasController::class, 'update_proses'])->name('kategori_kas.update.proses');
Route::get('/kategori_kas/delete', [KategoriKasController::class, 'delete'])->name('kategori_kas.delete');
// user
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/add', [UserController::class, 'add'])->name('users.add');
Route::post('/users/add/proses', [UserController::class, 'add_proses'])->name('users.add.proses');
Route::get('/users/update', [UserController::class, 'update'])->name('users.update');
Route::post('/users/update/proses', [UserController::class, 'update_proses'])->name('users.update.proses');
Route::get('/users/delete', [UserController::class, 'delete'])->name('users.delete');
// transaksi
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('/transaksi/detail', [TransaksiController::class, 'detail'])->name('transaksi.detail');
Route::get('/transaksi/add', [TransaksiController::class, 'add'])->name('transaksi.add');
Route::post('/transaksi/add/proses', [TransaksiController::class, 'add_proses'])->name('transaksi.add.proses');
Route::get('/transaksi/update', [TransaksiController::class, 'update'])->name('transaksi.update');
Route::post('/transaksi/update/proses', [TransaksiController::class, 'update_proses'])->name('transaksi.update.proses');
Route::get('/transaksi/delete', [TransaksiController::class, 'delete'])->name('transaksi.delete');