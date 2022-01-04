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

// profile section
Route::get('/profile', function () {
    return view('profile');
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

Route::get('/profile/struktur-pemerintahan', function () {
    return view('profile/struktur-pemerintahan');
});

Route::get('/kontak', function () {
    return view('kontak');
});

// publikasi section
Route::get('/publikasi', function () {
    return view('publikasi');
});

Route::get('/publikasi/pengumuman', function () {
    return view('publikasi/pengumuman');
});

Route::get('/publikasi/foto', function () {
    return view('publikasi/foto');
});

Route::get('/publikasi/video', function(){
    return view('publikasi/video');
});

Route::get('/publikasi/berita', function(){
    return view('publikasi/berita');
});

Route::get('/publikasi/berita/judul-berita', function(){
    return view('publikasi/konten-berita');
});

// pemerintahan section
Route::get('/pemerintahan', function (){
    return view('pemerintahan');
});

Route::get('/pemerintahan/pemerintahan-desa', function (){
    return view('pemerintahan/desa');
});

Route::get('/pemerintahan/pengurus-adat', function (){
    return view('pemerintahan/adat');
});

Route::get('/pemerintahan/pengurus-karang-taruna', function (){
    return view('pemerintahan/karangtaruna');
});

Route::get('/pemerintahan/pengurus-pkk', function (){
    return view('pemerintahan/pkk');
});

Route::get('/pemerintahan/pengurus-masjid-dan-mushola', function (){
    return view('pemerintahan/masjid-mushola');
});

Route::get('/pemerintahan/pengurus-RT', function (){
    return view('pemerintahan/rt');
});

Route::get('/pemerintahan/pengurus-BPD', function (){
    return view('pemerintahan/bpd');
});

Route::get('/pemerintahan/pengurus-LPM', function (){
    return view('pemerintahan/lpm');
});