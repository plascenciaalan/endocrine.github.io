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

Route::get('/definiciones', function () {
    return view('definiciones');
})->name('definiciones');

Route::get('/efectos', function () {
    return view('efectosdisruptores');
})->name('efectos');

Route::get('/enfermedades', function () {
    return view('enfermedades');
})->name('enfermedades');

Route::get('/tipos', function () {
    return view('tiposdisruptores');
})->name('tipos');

Route::get('/ejemplo', function () {
    return view('ejemplo');
})->name('ejemplo');