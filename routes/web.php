<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/juego', function () {
    return view('juego');
})->name('juego');

Route::get('/bibliografias', function () {
    return view('bibliografias');
})->name('bibliografias');

Route::get('/inicio#game', function () {
    return view('inicio');
})->name('juego-inicio');

Route::get('/inicio#team', function () {
    return view('inicio');
})->name('integrantes');

Route::get('/inicio#about', function () {
    return view('inicio');
})->name('about');

Route::get('/inicio#disruptores', function () {
    return view('inicio');
})->name('disruptores');