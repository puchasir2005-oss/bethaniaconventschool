<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/vision', function () {
    return view('vision');
});

Route::get('/programs', function () {
    return view('programs');
});
