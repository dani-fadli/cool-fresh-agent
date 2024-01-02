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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('homePage');
});

Route::get('/listPesanan', function () {
    return view('listPesanan');
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