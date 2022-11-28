<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\TiketController;
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

Route::group(["prefix" => "/destinasi"], function () {
    Route::get('/all', [DestinasiController::class, 'index']);
    Route::get('/detail/{destinasi:nama_destinasi}', [DestinasiController::class, 'show']);
});

Route::group(["prefix" => "/tiket"], function () {
    Route::get('/create/{id}', [TiketController::class, 'create']);
    Route::get('/detail/{destinasi:nama_destinasi}', [DestinasiController::class, 'show']);
});
