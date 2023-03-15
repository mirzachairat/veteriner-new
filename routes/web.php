<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\PengirimController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Jenis_hargaController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PenyeliaController;
use App\Http\Controllers\PengujiController;

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
Route::get('/login', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'create_user']);
Route::post('/login', [UserController::class, 'authenticate'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LogoutController::class, 'logout']);

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/pengirim', [PengirimController::class, 'index']);
    Route::get('/form', [PengirimController::class, 'form_permohonan']);
    Route::get('/view/pengirim/{id}', [DashboardController::class, 'detail']);

    // Module Permohononan
    Route::post('/permohonan', [PermohonanController::class, 'tambah']);

    //Module Penerima 
    Route::get('/penerima', [PenerimaController::class, 'index'])->name('penerima');
    Route::get('/form/penerima/{id}', [PenerimaController::class, 'form_detail']);
    Route::get('/view/penerima/{id}', [DashboardController::class, 'detail']);
    Route::get('/cetak/penerima', [PenerimaController::class, 'view_allform']);
    Route::post('/penerima/update', [PenerimaController::class, 'update_jenis_sampel']);

    //Mudulw Manager
    Route::get('/manager', [ManagerController::class, 'index']);
    Route::get('/form/manager/{id}', [ManagerController::class, 'form_detail']);
    Route::get('/view/manager/{id}', [DashboardController::class, 'detail']);
    Route::get('/cetak/manager', [ManagerController::class, 'view_allform']);
    Route::post('/manager/update', [ManagerController::class, 'update_jenis_sampel']);

    //Module Penyelia
    Route::get('/penyelia', [PenyeliaController::class, 'index']);
    Route::get('/form/penyelia/{id}', [PenyeliaController::class, 'form_detail']);
    Route::post('/penyelia/update', [PenyeliaController::class, 'update_jenis_sampel']);
    
    //Module Penguji
    Route::get('/penguji', [PengujiController::class, 'index']);
    Route::get('/form/penguji/{id}', [PengujiController::class, 'form_detail']);
    Route::get('/view/penguji/{id}', [DashboardController::class, 'detail']);
    Route::post('/penguji/update', [PengujiController::class, 'update_jenis_sampel']);

    // Getdata harga
    Route::get('/daftar_harga', [Jenis_hargaController::class, 'index']);
    Route::get('/daftar_harga/select', [Jenis_hargaController::class, 'getHarga']);
    Route::post('/daftar_harga/create', [Jenis_hargaController::class, 'store']);
    Route::get('/tambah_form', [Jenis_hargaController::class, 'add_form']);


    //Dokumen route

    Route::get('/download/form/{id}',[DokumenController::class, 'filepdf']);
    Route::get('/dokumen/{form_f6}', 'DokumenController@index');


});