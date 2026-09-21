<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');
Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});
Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});
Route::get('/about', function () {
    return view('halaman-about');
});
Route::get('/detail', function () {
    return view('detail-mahasiswa');
});
Route::get('/profil', function () {
    return view('profil-mahasiswa');
});

Route::get('/', function () {
    return view('welcome');
});

route :: get('/mahasiswa/{param1}' , [MahasiswaController:: class, 'show']);