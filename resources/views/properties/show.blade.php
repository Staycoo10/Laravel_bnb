@extends('layouts.app')

@section('title', $property->name)

@section('content')
<div class="max-w-5xl mx-auto px-6 py-8">
    
    <div class="mb-8">
        <a href="{{ route('properties.index') }}" 
           class="text-gray-600 hover:text-gray-900 flex items-center">
            ← Înapoi la listă
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-64"></div>

        <!-- Content -->
        <div class="p-8">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h1 class="text-3xl font-semibold text-gray-900 mb-2">{{ $property->name }}</h1>
                    <p class="text-gray-600 flex items-center">
                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        {{ $property->location }}
                    </p>
                </div>

                <div class="text-right">
                    <div class="text-3xl font-bold text-rose-500">€{{ $property->price }}</div>
                    <div class="text-gray-600">per noapte</div>
                </div>
            </div>

            <!-- Details Grid -->
            <div class="grid grid-cols-2 gap-6 mb-6">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="text-sm text-gray-600 mb-1">Tip Proprietate</div>
                    <div class="font-semibold text-gray-900">{{ $property->type }}</div>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="text-sm text-gray-600 mb-1">Număr Camere</div>
                    <div class="font-semibold text-gray-900">{{ $property->rooms }}</div>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="text-sm text-gray-600 mb-1">Status</div>
                    @if($property->available)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-green-100 text-green-800">
                            Disponibilă
                        </span>
                    @else
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-red-100 text-red-800">
                            Indisponibilă
                        </span>
                    @endif
                </div>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="text-sm text-gray-600 mb-1">Adăugată la</div>
                    <div class="font-semibold text-gray-900">{{ $property->created_at->format('d.m.Y') }}</div>
                </div>
            </div>

            <!-- Description -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Descriere</h3>
                <p class="text-gray-600 leading-relaxed">{{ $property->description }}</p>
            </div>

            <!-- Actions -->
            <div class="flex space-x-4 pt-6 border-t border-gray-200">
                <a href="{{ route('properties.index') }}"
                   class="flex-1 text-center bg-gray-100 text-gray-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
                    Înapoi la Lista
                </a>
                <form action="{{ route('properties.destroy', $property) }}" method="POST" class="flex-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            onclick="return confirm('Sigur vrei să ștergi această proprietate?')"
                            class="w-full bg-red-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-600 transition">
                        Șterge Proprietatea
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection