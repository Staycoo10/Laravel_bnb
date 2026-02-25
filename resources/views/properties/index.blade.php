@extends('layouts.app')

@section('title', 'Administrare Proprietăți')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-8">
    
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-semibold text-gray-900">Administrare Proprietăți</h1>
        <a href="{{ route('properties.create') }}" 
           class="bg-rose-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-rose-600 transition">
            + Adaugă Proprietate
        </a>
    </div>

    <!-- Filtre și Sortare -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-4 mb-6">
        <div class="flex space-x-4">
            <a href="{{ route('properties.index') }}" 
               class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition">
                Toate
            </a>
            <a href="{{ route('properties.sorted') }}" 
               class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition">
                Sortează după Preț
            </a>
            <a href="{{ route('properties.available') }}" 
               class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition">
                Doar Disponibile
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    <!-- Lista Proprietăți -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nume</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Locație</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tip</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Preț/Noapte</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Camere</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acțiuni</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($properties as $property)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{ $property->name }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $property->location }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $property->type }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-semibold text-gray-900">€{{ $property->price }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $property->rooms }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($property->available)
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Disponibilă
                            </span>
                        @else
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Indisponibilă
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('properties.show', $property) }}" 
                           class="text-indigo-600 hover:text-indigo-900 mr-3">Vezi</a>
                        <form action="{{ route('properties.destroy', $property) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    onclick="return confirm('Sigur vrei să ștergi această proprietate?')"
                                    class="text-red-600 hover:text-red-900">
                                Șterge
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-6 py-4 text-center text-gray-500">
                        Nu există proprietăți în baza de date.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection