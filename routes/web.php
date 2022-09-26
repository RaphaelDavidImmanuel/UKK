<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\UserController;

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
    return view('hotel');
});

// Route::get('/hotel', function () {
//     return view('dashboardhotel');
// });

// Route::get('/home', function () {
//     return view('hotel');
// })->name('home');

// Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
// Route::post('/tambah', [KamarController::class, 'tambah'])->name('tambah');
// Route::get('/edit/{id}', [KamarController::class, 'edit'])->name('edit');
// Route::post('/update/{id}', [KamarController::class, 'update'])->name('update');

// Route::group(['middleware' => ('auth')], function () {
//     Route::group(['middleware' => ('Masuk:admin')], function () {
//         Route::resource('/kamar', KamarController::class);
//     });
// });

Route::resource('/pemesanan', PemesananController::class);

Route::get('/admin', function () {
    return view('layouts.partials.main', ['title' => 'Main']);
})->name('main');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

// Route::get('/register', [AuthController::class, 'register'])->name('register');
// route::post('/register', [AuthController::class, 'store']);

// Route::get('/', [AuthController::class, 'index'])->name('login');
// Route::post('/proseslogin', [AuthController::class, 'proseslogin'])->name('proseslogin');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
