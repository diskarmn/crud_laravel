<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;

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


Route::get('/pegawai', [PegawaiController::class,'pegawai'])->name('pegawai');
Route::get('/tambah', [PegawaiController::class,'tambah'])->name('tambah');
Route::post('/tambah-data', [PegawaiController::class,'tambah_data'])->name('tambah_data');
Route::get('/tampil-edit/{id}', [PegawaiController::class,'tampil_edit'])->name('tampil_edit');
Route::post('/edit-data/{id}', [PegawaiController::class,'edit'])->name('edit');
Route::POST('/delete/{id}', [PegawaiController::class,'delete'])->name('delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
