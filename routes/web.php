<?php

use App\Http\Controllers\Master\KategoriKasController;
use App\Http\Controllers\Transaksi\PemasukanController;
use App\Http\Controllers\Transaksi\PengeluaranController;
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
// transaksi pemasukan
Route::get('/transaksi/pemasukan', [PemasukanController::class, 'index'])->name('transaksi.pemasukan');
Route::get('/transaksi/pemasukan/add', [PemasukanController::class, 'add'])->name('transaksi.pemasukan.add');
Route::post('/transaksi/pemasukan/add/proses', [PemasukanController::class, 'add_proses'])->name('transaksi.pemasukan.add.proses');
Route::get('/transaksi/pemasukan/update', [PemasukanController::class, 'update'])->name('transaksi.pemasukan.update');
Route::post('/transaksi/pemasukan/update/proses', [PemasukanController::class, 'update_proses'])->name('transaksi.pemasukan.update.proses');
Route::get('/transaksi/pemasukan/delete', [PemasukanController::class, 'delete'])->name('transaksi.pemasukan.delete');
// transaksi pengeluaran
Route::get('/transaksi/pengeluaran', [PengeluaranController::class, 'index'])->name('transaksi.pengeluaran');
Route::get('/transaksi/pengeluaran/add', [PengeluaranController::class, 'add'])->name('transaksi.pengeluaran.add');
Route::post('/transaksi/pengeluaran/add/proses', [PengeluaranController::class, 'add_proses'])->name('transaksi.pengeluaran.add.proses');
Route::get('/transaksi/pengeluaran/update', [PengeluaranController::class, 'update'])->name('transaksi.pengeluaran.update');
Route::get('/transaksi/pengeluaran/update/proses', [PengeluaranController::class, 'update_proses'])->name('transaksi.pengeluaran.update.proses');
Route::get('/transaksi/pengeluaran/delete', [PengeluaranController::class, 'delete'])->name('transaksi.pengeluaran.delete');
// utang
Route::get('/transaksi/utang', [UtangController::class, 'index'])->name('transaksi.utang');
Route::get('/transaksi/utang/add', [UtangController::class, 'add'])->name('transaksi.utang.add');
Route::post('/transaksi/utang/add/proses', [UtangController::class, 'add_proses'])->name('transaksi.utang.add_proses');
Route::get('/transaksi/utang/update', [UtangController::class, 'update'])->name('transaksi.utang.update');
Route::get('/transaksi/utang/update/proses', [UtangController::class, 'update_proses'])->name('transaksi.utang.update_proses');
Route::get('/transaksi/utang/delete', [UtangController::class, 'delete'])->name('transaksi.utang.delete');