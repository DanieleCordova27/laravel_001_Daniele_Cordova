<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Chi-Siamo', function () {
    return view('chisiamo');
});

Route::get('/Contatti', function () {
    return view('contatti');
});

Route::get('/Storia', function () {
    return view('storia');
});
