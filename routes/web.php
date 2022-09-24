<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;


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
    return view('coba');
});

// Route::get('/hotel', function () {
//     return view('dashboardhotel');
// });

Route::get('/home', function () {
    return view('hotel');
});

Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
Route::post('/tambah', [KamarController::class, 'tambah'])->name('tambah');
Route::get('/edit/{id}', [KamarController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [KamarController::class, 'update'])->name('update');


