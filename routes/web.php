<?php

use App\Http\Controllers\bina_data;
use App\Http\Controllers\koperasi_profil;
use App\Http\Controllers\peserta;
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

Route::get('/', function () {
    return view('layout.index');
});

Route::get('bina_data',[bina_data::class,'index']);
Route::get('koperasi_profil',[koperasi_profil::class,'index']);
Route::get('koperasi_profil/input',[koperasi_profil::class,'input']);
Route::post('koperasi_profil/store', [koperasi_profil::class,'store']);

Route::get('peserta',[peserta::class,'index'])->name('peserta');
Route::get('pesertaInput',[peserta::class,'tambahpage'])->name('form');
Route::post('pesertaInput/tambah',[peserta::class, 'insertPeserta']);
Route::delete('peserta/{id}',[peserta::class,'destroy'])->name('hapus');
Route::delete('myproductsDeleteAll',[peserta::class,'deletAll'])->name('hapussemua');

/* ==== Route Use Data RestApi ==== */
Route::get('user',[UserController::class,'index']);