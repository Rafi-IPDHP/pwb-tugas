<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;
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

// * https://kelasprogrammer.com/contoh-database-perpustakaan-mysql/
