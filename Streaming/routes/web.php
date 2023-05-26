<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class, 'index']);

Route::get('/home',[HomeController::class, 'redirect']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/tambah_paket_view',[AdminController::class, 'tambahview']);

Route::post('/upload_paket',[AdminController::class, 'upload']);

Route::post('/order',[HomeController::class, 'order']);

Route::get('/pesanan',[HomeController::class, 'pesanan']);

Route::get('/batalkan_pesanan/{id}',[HomeController::class, 'batalkan_pesanan']);

Route::get('/lihat_pesanan',[AdminController::class, 'lihat_pesanan']);

Route::get('/setuju/{id}',[AdminController::class, 'setuju']);

Route::get('/batal/{id}',[AdminController::class, 'batal']);

Route::get('/lihat_paket',[AdminController::class, 'lihat_paket']);

Route::get('/deletepaket/{id}',[AdminController::class, 'deletepaket']);

Route::get('/update_paket/{id}',[AdminController::class, 'update_paket']);

Route::post('/editpaket/{id}',[AdminController::class, 'editpaket']);


