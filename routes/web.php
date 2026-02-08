<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

// Ruta principală - Home
Route::get('/', [SiteController::class, 'home'])->name('home');

// Ruta pentru lista de proprietăți
Route::get('/listings', [SiteController::class, 'listings'])->name('listings');

// Ruta About
Route::get('/about', [SiteController::class, 'about'])->name('about');

// Ruta Contact
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

// Rute pentru Login
Route::get('/login', [SiteController::class, 'showLogin'])->name('login');
Route::post('/login', [SiteController::class, 'processLogin']);

// Rute cu parametri 
Route::get('/user/{id}', function ($id) {
    return "Profil utilizator cu ID = " . $id;
});

Route::get('/article/{category}/{id}', function ($category, $id) {
    return "Articol din categoria: " . $category . " cu ID = " . $id;
});

// Grup admin protejat cu middleware
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [SiteController::class, 'admin'])->name('admin.dashboard');
    
    Route::get('/users', function () {
        return "Lista utilizatori - Admin";
    })->name('admin.users');
    
    Route::get('/settings', function () {
        return "Setări aplicație - Admin";
    })->name('admin.settings');
});