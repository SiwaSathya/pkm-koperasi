<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoperasiController;
use App\Http\Controllers\PelaporanBuktiController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProfileController;


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



Route::resources([
    'koperasi'=> KoperasiController::class,
    'pelaporan'=> PelaporanController::class,
    'pelaporan-bukti'=> PelaporanBuktiController::class,
    'periode'=> PeriodeController::class,
    'profile' => ProfileController::class,
]);


Route::get('/pelaporan-detail/{id}', [PelaporanController::class, 'detail'])->name('pelaporan.detail');
