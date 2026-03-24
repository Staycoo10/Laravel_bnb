<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Afișează formularul de login
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Procesează autentificarea
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            
            // Salvează mesaj în sesiune
            session()->flash('success', 'Bine ai revenit, ' . Auth::user()->name . '!');
            
            return redirect()->intended(route('properties.index'));
        }

        return back()->withErrors([
            'email' => 'Credențialele introduse nu sunt corecte.',
        ])->onlyInput('email');
    }

    /**
     * Afișează formularul de înregistrare
     */
    public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * Procesează înregistrarea
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        session()->flash('success', 'Contul a fost creat cu succes!');

        return redirect()->route('properties.index');
    }

    /**
     * Deconectare
     */
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        session()->flash('success', 'Te-ai deconectat cu succes!');

        return redirect()->route('home');
    }
}