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
