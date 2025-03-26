<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Inicio');
});

Route::get('/Inicio', function () {
    return view('Inicio');
})->name('Inicio');
