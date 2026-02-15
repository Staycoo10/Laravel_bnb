@extends('layouts.app')

@section('title', 'Despre Noi - Mini AirBnB')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    
    <!-- Page Header -->
    <div class="bg-white rounded-2xl shadow-xl p-10 text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-3">Despre Mini AirBnB</h2>
        <p class="text-xl text-gray-600">Platforma ta de încredere pentru cazări</p>
    </div>

    <!-- Content Section -->
    <div class="bg-white rounded-2xl shadow-xl p-10 mb-12">
        <h3 class="text-3xl font-bold text-gray-800 mb-6">Misiunea Noastră</h3>
        <p class="text-lg text-gray-600 mb-4 leading-relaxed">
            Mini AirBnB este o platformă care conectează oameni cu locuri unice din întreaga lume. 
            Credem că fiecare călătorie ar trebui să fie o experiență memorabilă, iar găsirea cazării 
            perfecte este primul pas către o aventură de neuitat.
        </p>
        <p class="text-lg text-gray-600 leading-relaxed">
            Fie că ești în căutarea unui apartament modern în centrul orașului, o vilă liniștită 
            la munte sau o casă primitoare la mare, platforma noastră îți oferă acces la cele mai 
            diverse opțiuni de cazare, toate verificate și evaluate de comunitatea noastră.
        </p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl shadow-xl p-8 text-center text-white">
            <h4 class="text-5xl font-bold mb-2">500+</h4>
            <p class="text-xl">Proprietăți</p>
        </div>

        <div class="bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl shadow-xl p-8 text-center text-white">
            <h4 class="text-5xl font-bold mb-2">50,000+</h4>
            <p class="text-xl">Utilizatori</p>
        </div>

        <div class="bg-gradient-to-br from-blue-500 to-cyan-600 rounded-2xl shadow-xl p-8 text-center text-white">
            <h4 class="text-5xl font-bold mb-2">4.8/5</h4>
            <p class="text-xl">Rating Mediu</p>
        </div>

        <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl shadow-xl p-8 text-center text-white">
            <h4 class="text-5xl font-bold mb-2">50+</h4>
            <p class="text-xl">Orașe</p>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="bg-white rounded-2xl shadow-xl p-10">
        <h3 class="text-3xl font-bold text-gray-800 mb-6">De Ce Să Ne Alegi?</h3>
        <ul class="space-y-4">
            <li class="flex items-start p-4 bg-gray-50 rounded-xl">
                <span class="text-2xl text-indigo-600 font-bold mr-4">✓</span>
                <div>
                    <p class="font-bold text-gray-800 text-lg">Verificare Riguroasă</p>
                    <p class="text-gray-600">Toate proprietățile sunt verificate de echipa noastră</p>
                </div>
            </li>

            <li class="flex items-start p-4 bg-gray-50 rounded-xl">
                <span class="text-2xl text-indigo-600 font-bold mr-4">✓</span>
                <div>
                    <p class="font-bold text-gray-800 text-lg">Suport 24/7</p>
                    <p class="text-gray-600">Echipa noastră este disponibilă non-stop pentru asistență</p>
                </div>
            </li>

            <li class="flex items-start p-4 bg-gray-50 rounded-xl">
                <span class="text-2xl text-indigo-600 font-bold mr-4">✓</span>
                <div>
                    <p class="font-bold text-gray-800 text-lg">Prețuri Transparente</p>
                    <p class="text-gray-600">Fără costuri ascunse, fără surprize neplăcute</p>
                </div>
            </li>

            <li class="flex items-start p-4 bg-gray-50 rounded-xl">
                <span class="text-2xl text-indigo-600 font-bold mr-4">✓</span>
                <div>
                    <p class="font-bold text-gray-800 text-lg">Rezervare Simplă</p>
                    <p class="text-gray-600">Proces de rezervare rapid și intuitiv</p>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection