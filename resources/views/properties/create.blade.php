@extends('layouts.app')

@section('title', 'Adaugă Proprietate')

@section('content')
<div class="max-w-3xl mx-auto px-6 py-8">
    
    <div class="mb-8">
        <a href="{{ route('properties.index') }}" 
           class="text-gray-600 hover:text-gray-900 flex items-center">
            ← Înapoi la listă
        </a>
        <h1 class="text-3xl font-semibold text-gray-900 mt-4">Adaugă Proprietate Nouă</h1>
    </div>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
        <form action="{{ route('properties.store') }}" method="POST">
            @csrf

            <div class="space-y-6">
                <!-- Nume -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nume Proprietate *</label>
                    <input type="text" name="name" required
                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:outline-none"
                           placeholder="Ex: Apartament Modern în Centru"
                           value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Locație -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Locație *</label>
                    <input type="text" name="location" required
                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:outline-none"
                           placeholder="Ex: București, România"
                           value="{{ old('location') }}">
                    @error('location')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Descriere -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Descriere *</label>
                    <textarea name="description" rows="4" required
                              class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:outline-none"
                              placeholder="Descrie proprietatea...">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tip -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tip Proprietate *</label>
                    <select name="type" required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:outline-none">
                        <option value="">Alege tipul...</option>
                        <option value="Apartament" {{ old('type') == 'Apartament' ? 'selected' : '' }}>Apartament</option>
                        <option value="Casă" {{ old('type') == 'Casă' ? 'selected' : '' }}>Casă</option>
                        <option value="Vilă" {{ old('type') == 'Vilă' ? 'selected' : '' }}>Vilă</option>
                        <option value="Studio" {{ old('type') == 'Studio' ? 'selected' : '' }}>Studio</option>
                        <option value="Penthouse" {{ old('type') == 'Penthouse' ? 'selected' : '' }}>Penthouse</option>
                    </select>
                    @error('type')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Preț și Camere -->
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Preț/Noapte (€) *</label>
                        <input type="number" name="price" step="0.01" min="0" required
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:outline-none"
                               placeholder="45.00"
                               value="{{ old('price') }}">
                        @error('price')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Număr Camere *</label>
                        <input type="number" name="rooms" min="1" required
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:outline-none"
                               placeholder="2"
                               value="{{ old('rooms', 1) }}">
                        @error('rooms')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Disponibilitate -->
                <div>
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" name="available" 
                               class="w-4 h-4 text-rose-600 border-gray-300 rounded focus:ring-rose-500"
                               {{ old('available') ? 'checked' : '' }}>
                        <span class="ml-2 text-sm text-gray-700">Proprietatea este disponibilă pentru rezervare</span>
                    </label>
                </div>

                <!-- Butoane -->
                <div class="flex space-x-4 pt-4">
                    <button type="submit"
                            class="flex-1 bg-rose-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-rose-600 transition">
                        Salvează Proprietatea
                    </button>
                    <a href="{{ route('properties.index') }}"
                       class="px-6 py-3 border-2 border-gray-300 rounded-lg font-semibold text-gray-700 hover:bg-gray-50 transition">
                        Anulează
                    </a>
                </div>
            </div>

        </form>
    </div>

</div>
@endsection