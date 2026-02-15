@extends('layouts.app')

@section('title', 'Proprietăți - Mini AirBnB')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-12">
    
    <!-- Page Header -->
    <div class="bg-white rounded-2xl shadow-xl p-10 text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-3">Proprietăți Disponibile</h2>
        <p class="text-xl text-gray-600">Descoperă cele mai bune oferte pentru cazare</p>
    </div>

    <!-- Listings Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @if(isset($properties) && count($properties) > 0)
            @foreach($properties as $property)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                <!-- Image -->
                <div class="h-48 relative" style="background: {{ $property['color'] }};">
                    <span class="absolute top-4 right-4 bg-white px-4 py-2 rounded-full text-sm font-bold text-gray-800 shadow-md">
                        {{ $property['type'] }}
                    </span>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $property['name'] }}</h3>
                    <p class="text-gray-600 mb-3">📍 {{ $property['location'] }}</p>
                    <p class="text-gray-600 mb-4">{{ $property['description'] }}</p>

                    <!-- Footer -->
                    <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                        <span class="text-2xl font-bold text-indigo-600">€{{ $property['price'] }}<span class="text-sm text-gray-500">/noapte</span></span>
                        <span class="text-lg text-yellow-500">⭐ {{ $property['rating'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-span-full text-center py-12">
                <p class="text-xl text-gray-600">Nu există proprietăți disponibile momentan.</p>
            </div>
        @endif
    </div>

</div>
@endsection