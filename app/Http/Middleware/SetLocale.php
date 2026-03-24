<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
{
    // Verificăm dacă există cheia 'locale' în sesiune
    if (session()->has('locale')) {
        // Aplicăm limba salvată în sesiune pentru cererea curentă
        app()->setLocale(session()->get('locale'));
    }

    return $next($request);
}
}
