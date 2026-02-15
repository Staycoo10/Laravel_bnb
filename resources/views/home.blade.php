@extends('layouts.app')

@section('title', 'Acasă - Mini AirBnB')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-12">
    
    <!-- Hero Section -->
    <div class="bg-white rounded-2xl shadow-xl p-12 text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Bine ai venit la Mini AirBnB!</h2>
        <p class="text-xl text-gray-600">Găsește cazarea perfectă pentru următoarea ta aventură.</p>
    </div>

    <!-- Features Section -->
    <div class="mb-12">
        <h3 class="text-3xl font-bold text-gray-800 text-center mb-8">De ce să ne alegi?</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition">
                <span class="text-5xl block mb-4">🏠</span>
                <h4 class="text-xl font-bold text-gray-800 mb-2">500+ Proprietăți</h4>
                <p class="text-gray-600">Opțiuni variate în toată România</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition">
                <span class="text-5xl block mb-4">⭐</span>
                <h4 class="text-xl font-bold text-gray-800 mb-2">Verificate</h4>
                <p class="text-gray-600">Toate proprietățile sunt verificate</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition">
                <span class="text-5xl block mb-4">💰</span>
                <h4 class="text-xl font-bold text-gray-800 mb-2">Prețuri Bune</h4>
                <p class="text-gray-600">Oferte competitive și transparente</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition">
                <span class="text-5xl block mb-4">🔒</span>
                <h4 class="text-xl font-bold text-gray-800 mb-2">Securitate</h4>
                <p class="text-gray-600">Plăți sigure și protecție</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl shadow-xl p-12 text-center text-white">
        <h3 class="text-3xl font-bold mb-4">Explorează Proprietățile</h3>
        <p class="text-xl mb-6 text-indigo-100">Descoperă cele mai bune oferte pentru vacanța ta</p>
        <a href="{{ route('listings') }}" 
           class="inline-block bg-white text-indigo-600 px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition shadow-lg">
            Vezi Toate Proprietățile
        </a>
    </div>

</div>
@endsection