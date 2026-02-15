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
         // Date dinamice - array de proprietăți
        $properties = [
            [
                'name' => 'Apartament Modern în Centru',
                'location' => 'București, România',
                'description' => 'Apartament spațios cu 2 camere în zona centrală',
                'price' => 45,
                'rating' => 4.8,
                'type' => 'Apartament',
                'color' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)'
            ],
            [
                'name' => 'Vilă la Munte',
                'location' => 'Brașov, România',
                'description' => 'Vilă rustică cu vedere panoramică',
                'price' => 85,
                'rating' => 4.9,
                'type' => 'Vilă',
                'color' => 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)'
            ],
            [
                'name' => 'Casă la Mare',
                'location' => 'Constanța, România',
                'description' => 'Casă confortabilă la 5 min de plajă',
                'price' => 120,
                'rating' => 4.7,
                'type' => 'Casă',
                'color' => 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)'
            ],
            [
                'name' => 'Studio Confortabil',
                'location' => 'Cluj-Napoca, România',
                'description' => 'Studio modern perfect pentru studenți',
                'price' => 35,
                'rating' => 4.6,
                'type' => 'Studio',
                'color' => 'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)'
            ],
            [
                'name' => 'Căsuță Rustică',
                'location' => 'Sibiu, România',
                'description' => 'Căsuță tradițională în centrul vechi',
                'price' => 65,
                'rating' => 4.9,
                'type' => 'Casă',
                'color' => 'linear-gradient(135deg, #fa709a 0%, #fee140 100%)'
            ],
            [
                'name' => 'Penthouse de Lux',
                'location' => 'București, România',
                'description' => 'Penthouse cu terasă și vedere spectaculoasă',
                'price' => 150,
                'rating' => 5.0,
                'type' => 'Penthouse',
                'color' => 'linear-gradient(135deg, #30cfd0 0%, #330867 100%)'
            ]
        ];
        return view('listings', compact('properties'));

    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
         $contactInfo = [
            'email' => 'contact@miniairbnb.com',
            'support_email' => 'support@miniairbnb.com',
            'phone' => '+40 123 456 789',
            'address' => 'Str. Exemplu Nr. 123',
            'city' => 'București, România',
            'schedule' => [
                'Luni - Vineri' => '9:00 - 18:00',
                'Sâmbătă - Duminică' => '10:00 - 16:00'
            ]
        ];

        return view('contact', compact('contactInfo'));
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