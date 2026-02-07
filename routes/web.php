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

// Ruta GET pentru formularul de login - ADAUGĂ ->name('login')
Route::get('/login', function () {
    return view('login');
})->name('login');

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

// Grup protejat cu middleware auth
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return "Panoul de administrare";
    });
    
    Route::get('/users', function () {
        return "Lista utilizatori";
    });
    
    Route::get('/settings', function () {
        return "Setări aplicație";
    });
});