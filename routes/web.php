<?php

use App\Http\Controllers\AnggotaController;
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
    return view('template.page.index');
})->name('blank_page');

// Route::get('/anggota', function() {
//     return view('template.page.anggota');
// })->name('anggota');

Route::get('/anggota', [AnggotaController::class, 'create'])->name('anggota');

// ! DATA ANGGOTA, PETUGAS, BUKU
