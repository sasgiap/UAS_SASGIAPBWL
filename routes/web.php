<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//warga
Route::get('/warga', [App\Http\Controllers\wargaController::class, 'index']);
Route::get('/warga/create', [App\Http\Controllers\wargaController::class, 'create']);
Route::post('/warga', [App\Http\Controllers\WargaController::class, 'store'])->name('warga.store');
Route::get('/warga/{id}/edit', [App\Http\Controllers\wargaController::class, 'edit']);
Route::patch('/warga/{id}', [App\Http\Controllers\wargaController::class, 'update']);
Route::delete('/warga/{id}', [App\Http\Controllers\wargaController::class, 'destroy']);
//dusun
Route::get('/dusun', [App\Http\Controllers\dusunController::class, 'index']);
Route::get('/dusun/create', [App\Http\Controllers\dusunController::class, 'create']);
Route::post('/dusun', [App\Http\Controllers\dusunController::class, 'store']);
Route::get('/dusun/{id}/edit', [App\Http\Controllers\dusunController::class, 'edit']);
Route::patch('/dusun/{id}', [App\Http\Controllers\dusunController::class, 'update']);
Route::delete('/dusun/{id}', [App\Http\Controllers\dusunController::class, 'destroy']);
// pengguna
Route::get('/pengguna', [App\Http\Controllers\penggunaController::class, 'index']);
Route::get('/pengguna/create', [App\Http\Controllers\penggunaController::class, 'create']);
Route::post('/pengguna', [App\Http\Controllers\penggunaController::class, 'store']);
Route::get('/pengguna/{id}/edit', [App\Http\Controllers\penggunaController::class, 'edit']);
Route::patch('/pengguna/{id}', [App\Http\Controllers\penggunaController::class, 'update']);
Route::delete('/pengguna/{id}', [App\Http\Controllers\penggunaController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');