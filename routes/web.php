<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListPesananController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Order\OrderReturnController;
use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Authentication
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware(['auth'])->group(function () {
    // Homepage
    Route::get('/homePage', [HomeController::class, 'index'])->name('homepage');

    // Orders
    Route::controller(OrderController::class)->group(function () {
        Route::get('/list-orders', 'index');
        Route::get('/detail-order/{id}', 'show')->name('detailOrder');
    });

    Route::controller(OrderReturnController::class)->group(function () {
        Route::get('/form-return', 'index');
        Route::post('/create-return', 'create');
    });

    Route::controller(ListPesananController::class)->group(function () {
        Route::get('/listPesanan', 'listPesanan')->name('listPesanan');
        Route::get('/detailPesanan/{idPesanan}', 'detailPesanan')->name('detailPesanan');
    });

    Route::controller(AgentController::class)->group(function () {
        Route::get('/edit-profil-agent/{id}', 'editProfilAgen');
        Route::put('/update-agent/{id}', 'updateAgent');
    });
});


Route::get('/forgotPassword', function () {
    return view('forgotPassword');
});

Route::get('/editProfilAgen', function () {
    return view('editProfilAgen');
});

Route::get('/detailPesanan', function () {
    return view('detailPesanan');
});

Route::get('/pengajuanRetur', function () {
    return view('pengajuanRetur');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
