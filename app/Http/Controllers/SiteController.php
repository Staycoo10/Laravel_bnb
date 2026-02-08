<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function listings()
    {
        return view('listings');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function admin()
    {
        return view('admin');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        // Aici va fi logica de autentificare
        return "Autentificare în curs pentru: " . $request->email;
    }
}