<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Setează limba din sesiune
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
        }
    }
}