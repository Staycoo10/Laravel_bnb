<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    public function index()
    {
        $properties = Property::all();
        return view('properties.index', compact('properties'));
    }
    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'type' => 'required|string',
            'rooms' => 'required|integer|min:1',
        ]);

        $validated['available'] = $request->has('available');

        Property::create($validated);

        return redirect()->route('properties.index')
            ->with('success', 'Proprietatea a fost adăugată cu succes!');
    }

    public function show(Property $property)
    {
        return view('properties.show', compact('property'));
    }

    public function destroy(Property $property)
    {
        $property->delete();

        return redirect()->route('properties.index')
            ->with('success', 'Proprietatea a fost ștearsă cu succes!');
    }
    public function sortByPrice()
    {
        $properties = Property::orderBy('price', 'asc')->get();
        return view('properties.index', compact('properties'));
    }
    /**
     * Filtrare după disponibilitate
     */
    public function filterAvailable()
    {
        $properties = Property::where('available', true)->get();
        return view('properties.index', compact('properties'));
    }
    public function filterByType($type)
    {
        $properties = Property::where('type', $type)->get();
        return view('properties.index', compact('properties'));
    }
}