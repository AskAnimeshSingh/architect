<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/superadmin', function () {
    return view('superadmin.welcome');
});


Route::get('/builder', function () {
    return view('builderpanel.welcome');
});


Route::get('/architect', function () {
    return view('architectpanel.welcome');
});


Route::get('/mcd', function () {
    return view('mcdpanel.welcome');
});

