<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoperasiController;

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

Route::resource('koperasi', KoperasiController::class);

Route::get('/get', function() {
 $data = [
  'tittle' => 'test'
 ];
 return view('template-frontend.form', $data);
});