<?php

use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

//kriteria
Route::get('/kriteria', [App\Http\Controllers\kriteriaController::class, 'index'])->name('kriteria');
Route::get('/kriteria/tambah', [App\Http\Controllers\kriteriaController::class, 'create'])->name('kriteria.tambah');
Route::post('/kriteria/tambah/submit', [App\Http\Controllers\kriteriaController::class, 'store'])->name('kriteria.simpan');
Route::get('/kriteria/delete/{idkriteria}', [App\Http\Controllers\kriteriaController::class, 'destroy'])->name('kriteria.destroy');

//alternatif
Route::get('/alternatif', [App\Http\Controllers\alternatifController::class, 'index'])->name('alternatif');
Route::get('/alternatif/tambah', [App\Http\Controllers\alternatifController::class, 'create'])->name('alternatif.tambah');
Route::post('/alternatif/tambah/submit', [App\Http\Controllers\alternatifController::class, 'store'])->name('alternatif.simpan');
Route::get('/alternatif/delete/{id}', [App\Http\Controllers\alternatifController::class, 'destroy'])->name('alternatif.destroy');
Route::get('/alternatif/{id}', [App\Http\Controllers\alternatifController::class, 'show'])->name('alternatif.show');
Route::post('/alternatif/edit/{idalternatif}', [App\Http\Controllers\alternatifController::class, 'edit'])->name('alternatif.edit');

//bobot
Route::get('/bobotahp', [App\Http\Controllers\bobotahpController::class, 'index'])->name('bobot.ahp');

//input bobot ahp
Route::get('/bobotinputahp', [App\Http\Controllers\inputbobotahpController::class, 'index'])->name('bobot.inputahp');
Route::get('/bobotinputahp/tambah', [App\Http\Controllers\inputbobotahpController::class, 'create'])->name('bobot.inputtambah');
