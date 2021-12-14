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

Route::get('/profile/geografis', function () {
    return view('profile/letak-geografis');
});

Route::get('/profile/deskripsi', function () {
    return view('profile/deskripsi');
});

Route::get('/profile/visi-misi', function () {
    return view('profile/visi-misi');
});

Route::get('/profile/struktur-organisasi', function () {
    return view('profile/struktur-organisasi');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/publikasi', function () {
    return view('publikasi');
});

Route::get('/publikasi/pengumuman', function () {
    return view('publikasi/pengumuman');
});

Route::get('/publikasi/foto', function () {
    return view('publikasi/foto');
});