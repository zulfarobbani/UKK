<?php

use App\Http\Controllers\FashotController;
use App\Http\Controllers\FaskamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Models\Fashot;
use App\Models\Pesan;
use Illuminate\Auth\Events\Login;
use Illuminate\Routing\RouteGroup;

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

Route::get('/a', function () {  
    return view('welcome');
});


//login-register
//login
Route::get('/login',  [LoginController::class, 'tampilLogin']
)->name('login');
Route::post('/login-proses', [LoginController::class, 'login'])->name('masuk');
//register
Route::get('/register', [LoginController::class, 'tampilRegister'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('buat-akun');
//logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//tamu
Route::get('/', function(){
    return view('dashboard');
})->name('dashboard');
//kamar
Route::get('/kamar', [KamarController::class, 'index'])->name('tamu.index');

//pesan
Route::get('/reservasi', [PesanController::class, 'index'])->name('tamu.reservasi');
Route::get('/pesan', [PesanController::class, 'create'])->name('tamu.pesan');
Route::post('/booking', [PesanController::class, 'store'])->name('tamu.booking');
Route::get('/reservasi/cetak/{id}', [PesanController::class, 'cetak'])->name('tamu.cetak');



//fasilitas
Route::get('/fasilitas-hotel', [FashotController::class, 'index'])->name('tamu.fasilitas');
//endtamu

Route::middleware('auth')->group(function(){
//admin
//kamar
Route::get('/admin/kamar', [KamarController::class, 'indexadmin'])->name('admin.kamar');
Route::get('/admin/kamar/tambah', [KamarController::class, 'create'])->name('admin.tambah-kamar');
Route::post('/admin/kamar/simpan', [KamarController::class, 'store'])->name('admin.simpan-kamar');
Route::get('/admin/kamar/edit/{id}', [KamarController::class, 'edit'])->name('admin.edit-kamar');
Route::post('/admin/kamar/update/{id}', [KamarController::class, 'update'])->name('admin.update-kamar');
route::get('/admin/kamar/hapus/{id}', [KamarController::class, 'destroy'])->name('admin.hapus-kamar');

//fasilitas kamar
Route::get('/admin/fasilitas-kamar', [FaskamController::class, 'indexadmin'])->name('admin.faskam');
Route::get('/admin/fasilitas-kamar/tambah', [FaskamController::class, 'create'])->name('admin.tambah-faskam');
Route::post('admin/fasilitas-kamar/simpan', [FaskamController::class, 'store'])->name('admin.simpan-faskam');
Route::get('admin/fasilitas-kamar/hapus/{id}', [FaskamController::class, 'destroy'])->name('admin.hapus-faskam');

//fasilitas hotel
Route::get('/admin/fasilitas-hotel', [FashotController::class, 'indexadmin'])->name('admin.fashot');
Route::get('/admin/fasilitas-hotel/tambah', [FashotController::class, 'create'])->name('admin.tambah-fashot');
Route::post('admin/fasilitas-hotel/simpan', [FashotController::class, 'store'])->name('admin.simpan-fashot');
Route::get('admin/fasilitas-hotel/edit/{id}', [FashotController::class, 'edit'])->name('admin.edit-fashot');
Route::post('/admin/fasilitas-hotel/update/{id}', [FashotController::class, 'update'])->name('admin.update-fashot');
Route::get('/admin/fasilitas-hotel/delete/{id}', [FashotController::class, 'destroy'])->name('admin.hapus-fashot');
});
