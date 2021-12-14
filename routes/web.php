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

Route::get('/geografis', function () {
    return view('letak-geografis');
});

Route::get('/deskripsi', function () {
    return view('deskripsi');
});

Route::get('/visi-misi', function () {
    return view('visi-misi');
});

Route::get('/struktur-organisasi', function () {
    return view('struktur-organisasi');
});

Route::get('/kontak', function () {
    return view('kontak');
});