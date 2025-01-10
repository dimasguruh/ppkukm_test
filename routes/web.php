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
    return view('index');
});

use App\Http\Controllers\SoalController;

Route::get('/soal1', [SoalController::class, 'soal1']);
Route::get('/soal2', [SoalController::class, 'soal2']);
Route::get('/soal3', [SoalController::class, 'soal3']);
Route::get('/soal4', [SoalController::class, 'soal4']);
