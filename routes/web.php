<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer/{customer:kode_user}', [CustomerController::class, 'show'])->name('customer.show');
Route::get('/customer/{customer:kode_user}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::patch('/customer/{customer:kode_user}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customer/{customer:kode_user}', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
Route::get('/karyawan/{karyawan:kode_user}', [KaryawanController::class, 'show'])->name('karyawan.show');
Route::get('/karyawan/{karyawan:kode_user}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::patch('/karyawan/{karyawan:kode_user}', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::delete('/karyawan/{karyawan:kode_user}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/{admin:kode_user}', [AdminController::class, 'show'])->name('admin.show');
Route::get('/admin/{admin:kode_user}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::patch('/admin/{admin:kode_user}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/{admin:kode_user}', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');


require __DIR__.'/auth.php';
