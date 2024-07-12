<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/ppdb', function () {
    return view('ppdb');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/inner-page', function () {
    return view('inner-page');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});
