<?php

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

// Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
// Route::post('/login', [App\Http\Controllers\LoginController::class, 'postLogin']);
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
   // Route::get('/homePage', 'HomeController@index')->name('home');
   Route::get('/homePage', function () {
    return view('homePage');
    });
    Route::get('/listPesanan', [App\Http\Controllers\ListPesananController::class, 'listPesanan'])->name('listPesanan');
    Route::get('detailPesanan/{idPesanan}', [App\Http\Controllers\ListPesananController::class, 'detailPesanan'])->name('detailPesanan');
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
