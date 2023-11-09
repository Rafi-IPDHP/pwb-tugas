<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\RakController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('blank_page');

// Route::get('/anggota', function() {
//     return view('template.page.anggota');
// })->name('anggota');

Route::resource('/anggota', AnggotaController::class);
Route::resource('/buku', BukuController::class);
Route::resource('/petugas', PetugasController::class);
Route::resource('/rak', RakController::class);
Route::resource('/peminjaman', PeminjamanController::class);
Route::resource('/pengembalian', PengembalianController::class);

Route::controller(AuthController::class)->group(function() {
    Route::post('/proses', 'prosesAnggota')->name('auth.prosesAnggota');
    Route::post('/proses-petugas', 'prosesPetugas')->name('auth.prosesPetugas');
    Route::get('/logout', 'logout')->name('logout');
});

// * https://kelasprogrammer.com/contoh-database-perpustakaan-mysql/
