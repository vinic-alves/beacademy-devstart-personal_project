<?php

use Illuminate\Support\Facades\Route;


Route::get('/main', function () {
    return view('main');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});


