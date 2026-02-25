<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PropertyController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/listings', [SiteController::class, 'listings'])->name('listings');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

// Rute Login
Route::get('/login', [SiteController::class, 'showLogin'])->name('login');
Route::post('/login', [SiteController::class, 'processLogin']);

// Rute CRUD pentru Properties
Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::get('/properties/{property}', [PropertyController::class, 'show'])->name('properties.show');
Route::delete('/properties/{property}', [PropertyController::class, 'destroy'])->name('properties.destroy');

// Rute pentru interogări suplimentare
Route::get('/properties-sorted', [PropertyController::class, 'sortByPrice'])->name('properties.sorted');
Route::get('/properties-available', [PropertyController::class, 'filterAvailable'])->name('properties.available');
Route::get('/properties/type/{type}', [PropertyController::class, 'filterByType'])->name('properties.type');

// Rute cu parametri (din lab 2)
Route::get('/user/{id}', function ($id) {
    return "Profil utilizator cu ID = " . $id;
});

Route::get('/article/{category}/{id}', function ($category, $id) {
    return "Articol din categoria: " . $category . " cu ID = " . $id;
});

// Grup admin protejat
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [SiteController::class, 'admin'])->name('admin.dashboard');
    Route::get('/users', function () {
        return "Lista utilizatori - Admin";
    })->name('admin.users');
    Route::get('/settings', function () {
        return "Setări aplicație - Admin";
    })->name('admin.settings');
});