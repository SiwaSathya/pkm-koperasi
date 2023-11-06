<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoperasiController;
use App\Http\Controllers\PelaporanBuktiController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;


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



Route::middleware(['auth'])->group(function () {
    Route::resource('koperasi', KoperasiController::class);
    Route::resource('pelaporan', PelaporanController::class);
    Route::resource('pelaporan-bukti', PelaporanBuktiController::class);
    Route::resource('periode', PeriodeController::class);
    Route::resource('profile', ProfileController::class);
});
Route::get('/pelaporan-detail/{id}', [PelaporanController::class, 'detail'])->name('pelaporan.detail');
Route::get('/pelaporan-detail-api/{id}', [PelaporanController::class, 'detail_api']);
Route::get('/periode-set-to-not-null', [PeriodeController::class, 'setDeletedatNotNull'])->name('periode.setToNotNull');
Route::post('/show-laporan-not-null/{id}', [PelaporanController::class, 'showPelaporan'])->name('pelaporan.filters');
Route::post('/laporan-update-approve', [PelaporanController::class, 'updateRevisi'])->name('pelaporan.approve');
Route::post('/laporan-update-revisi', [PelaporanController::class, 'updateRevisiTrue'])->name('pelaporan.revisi');
Route::get('/show-profile/{id}', [ProfileController::class, 'showDetail'])->name('profile.detail');
Route::post('/update-revisi', [PelaporanController::class, 'updateRevisiToZero'])->name('update.revisi');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::post('/forget-password', [LoginController::class, 'forgetPassword'])->name('forget.password')->middleware('auth');
Route::get("/pelaporan-koperasi/{id}", [PelaporanController::class, 'koperasiLaporan'])->name('pelaporan.koperasi')->middleware('auth');

// Route::get('/get', function() {
//  $data = [
//   'tittle' => 'test'
//  ];
//  return view('template-frontend.form', $data);
// });
