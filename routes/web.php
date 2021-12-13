<?php

use App\Models\HargaKomponen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KomponenController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\HargaKomponenController;
use App\Http\Controllers\DataKaryawanController;
use App\Models\DataKaryawan;

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

Route::get('/', [AdminController::class, 'dashboard']);

// Route Varian Product
Route::get('/product', [ProductController::class, 'tampil']);
Route::get('/product/tambah', [ProductController::class, 'tambah']);
Route::post('/product/upload', [ProductController::class, 'upload']);
Route::get('/product/edit/{id_product}', [ProductController::class, 'edit']);
Route::put('/product/update/{id_product}', [ProductController::class, 'update']);
Route::get('/product/hapus/{id_product}', [ProductController::class, 'hapus']);

// Route Komponen Pembuatan per Produk
Route::get('/komponen', [KomponenController::class, 'tampil']);
Route::get('/komponen/tambah', [KomponenController::class, 'tambah']);
Route::post('/komponen/upload', [KomponenController::class, 'upload']);
Route::get('/komponen/edit/{id_komponen}', [KomponenController::class, 'edit']);
Route::put('/komponen/update/{id_komponen}', [KomponenController::class, 'update']);
Route::get('/komponen/hapus/{id_komponen}', [KomponenController::class, 'hapus']);

// Route Harga per komponen untuk membuat 1 produk
Route::get('/harga_komponen', [HargaKomponenController::class, 'tampil']);
Route::get('/harga_komponen/tambah', [HargaKomponenController::class, 'tambah']);
Route::post('/harga_komponen/upload', [HargaKomponenController::class, 'upload']);
Route::get('/harga_komponen/edit/{id_harga_komponen}', [HargaKomponenController::class, 'edit']);
Route::put('/harga_komponen/update/{id_harga_komponen}', [HargaKomponenController::class, 'update']);
Route::get('/harga_komponen/hapus/{id_harga_komponen}', [HargaKomponenController::class, 'hapus']);

// Route Order Produk
Route::get('/order', [OrderController::class, 'tampil']);
Route::get('/order/tambah', [OrderController::class, 'tambah']);
Route::post('/order/upload', [OrderController::class, 'upload']);
Route::get('/order/edit/{id_order}', [OrderController::class, 'edit']);
Route::put('/order/update/{id_order}', [OrderController::class, 'update']);
Route::get('/order/hapus/{id_order}', [OrderController::class, 'hapus']);

// Route Productio Product
Route::get('/production', [ProductionController::class, 'tampil']);
Route::post('/production/proses', [ProductionController::class, 'proses']);
Route::get('/production/detail/{id_production}', [ProductionController::class, 'detail']);

// Route Master Data Karyawan
Route::get('/data_karyawan', [DataKaryawanController::class, 'tampil']);
Route::get('/data_karyawan/tambah', [DataKaryawanController::class, 'tambah']);
Route::post('data_karyawan/upload', [DataKaryawanController::class, 'upload']);
Route::get('/data_karyawan/edit/{id_karyawan}', [DataKaryawanController::class, 'edit']);
Route::put('/data_karyawan/update/{id_karyawan}', [DataKaryawanController::class, 'update']);
Route::get('/data_karyawan/hapus/{id_karyawan}', [DataKaryawanController::class, 'hapus']);