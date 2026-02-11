<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hero', function () {
    return view('hero', ['page' => 'hero']);
});
