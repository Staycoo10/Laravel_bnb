<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Ruta About
Route::get('/about', function () {
    return "Pagina About";
});

// Ruta Contact
Route::get('/contact', function () {
    return "Pagina Contact";
});