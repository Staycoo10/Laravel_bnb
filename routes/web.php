<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\App;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/listings', [SiteController::class, 'listings'])->name('listings');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

// Rute Autentificare
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Schimbare limbă
Route::get('/locale/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'ro'])) {
        session()->put('locale', $lang);
        App::setLocale($lang);
    }
    return redirect()->back();
})->name('locale.switch');

// Rute CRUD pentru Properties (protejate cu auth)
Route::middleware(['auth'])->group(function () {
    Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
    Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
    Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
    Route::get('/properties/{property}', [PropertyController::class, 'show'])->name('properties.show');
    Route::delete('/properties/{property}', [PropertyController::class, 'destroy'])->name('properties.destroy');

    // Rute pentru interogări suplimentare
    Route::get('/properties-sorted', [PropertyController::class, 'sortByPrice'])->name('properties.sorted');
    Route::get('/properties-available', [PropertyController::class, 'filterAvailable'])->name('properties.available');
    Route::get('/properties/type/{type}', [PropertyController::class, 'filterByType'])->name('properties.type');
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