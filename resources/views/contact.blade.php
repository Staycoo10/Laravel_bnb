@extends('layouts.app')

@section('title', 'Contact - Mini AirBnB')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-12">
    
    <!-- Page Header -->
    <div class="bg-white rounded-2xl shadow-xl p-10 text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-3">Contactează-ne</h2>
        <p class="text-xl text-gray-600">Suntem aici pentru a te ajuta</p>
    </div>

    <!-- Contact Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <!-- Contact Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Trimite-ne un mesaj</h3>
            
            <form class="space-y-6">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Nume</label>
                    <input type="text" required 
                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:outline-none transition">
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" required 
                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:outline-none transition">
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Subiect</label>
                    <input type="text" required 
                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:outline-none transition">
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Mesaj</label>
                    <textarea rows="5" required 
                              class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:outline-none transition resize-none"></textarea>
                </div>

                <button type="submit" 
                        class="w-full bg-indigo-600 text-white py-3 rounded-lg font-bold text-lg hover:bg-indigo-700 transition shadow-lg">
                    Trimite Mesajul
                </button>
            </form>
        </div>

        <!-- Contact Info -->
        <div class="space-y-6">
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Informații de Contact</h3>
                
                @if(isset($contactInfo))
                    <div class="space-y-6">
                        <div class="p-4 bg-gray-50 rounded-xl">
                            <h4 class="font-bold text-gray-800 text-lg mb-2">📧 Email</h4>
                            <p class="text-gray-600">{{ $contactInfo['email'] }}</p>
                            <p class="text-gray-600">{{ $contactInfo['support_email'] }}</p>
                        </div>

                        <div class="p-4 bg-gray-50 rounded-xl">
                            <h4 class="font-bold text-gray-800 text-lg mb-2">📱 Telefon</h4>
                            <p class="text-gray-600">{{ $contactInfo['phone'] }}</p>
                        </div>

                        <div class="p-4 bg-gray-50 rounded-xl">
                            <h4 class="font-bold text-gray-800 text-lg mb-2">📍 Adresă</h4>
                            <p class="text-gray-600">{{ $contactInfo['address'] }}</p>
                            <p class="text-gray-600">{{ $contactInfo['city'] }}</p>
                        </div>

                        <div class="p-4 bg-gray-50 rounded-xl">
                            <h4 class="font-bold text-gray-800 text-lg mb-2">🕐 Program</h4>
                            @foreach($contactInfo['schedule'] as $day => $hours)
                                <p class="text-gray-600"><strong>{{ $day }}:</strong> {{ $hours }}</p>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="space-y-6">
                        <div class="p-4 bg-gray-50 rounded-xl">
                            <h4 class="font-bold text-gray-800 text-lg mb-2">📧 Email</h4>
                            <p class="text-gray-600">contact@miniairbnb.com</p>
                        </div>

                        <div class="p-4 bg-gray-50 rounded-xl">
                            <h4 class="font-bold text-gray-800 text-lg mb-2">📱 Telefon</h4>
                            <p class="text-gray-600">+40 123 456 789</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>

    </div>

</div>
@endsection