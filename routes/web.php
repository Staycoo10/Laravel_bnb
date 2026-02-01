<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ruta About
Route::get('/about', function () {
    return view('about');
});

// Ruta Contact
Route::get('/contact', function () {
    return view('contact');
});

// Afișează formularul de login (GET)
Route::get('/login', function () {
    return view('login');
});

// Procesează login-ul (POST)
Route::post('/login', function () {
    return "Autentificare în curs...";
});

// Ruta cu parametru ID
Route::get('/user/{id}', function ($id) {
    return "Profil utilizator cu ID = " . $id;
});
// Ruta cu doi parametri
Route::get('/article/{category}/{id}', function ($category, $id) {
    return "Articol din categoria: " . $category . " cu ID = " . $id;
});