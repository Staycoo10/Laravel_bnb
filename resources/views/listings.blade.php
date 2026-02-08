<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arenda - Mini AirBnB</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100">
    
    <!-- Navigation -->
    <nav class="bg-gray-800 shadow-lg mb-8 border-b border-gray-700">
        <div class="max-w-5xl mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}">
                    <h1 class="text-2xl font-bold text-indigo-400">Mini AirBnB</h1>
                </a>
                <div class="space-x-4">
                    <a href="{{ route('home') }}" class="text-gray-300 hover:text-indigo-400 transition">Acasă</a>
                    <a href="{{ route('listings') }}" class="text-indigo-400 font-medium">Arenda</a>
                    <a href="{{ route('about') }}" class="text-gray-300 hover:text-indigo-400 transition">Despre</a>
                    <a href="{{ route('contact') }}" class="text-gray-300 hover:text-indigo-400 transition">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="max-w-5xl mx-auto px-4">
        
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 mb-8 border border-gray-700">
            <h1 class="text-3xl font-bold text-white mb-2">Arenda Disponibile</h1>
            <p class="text-gray-300">
                Descoperă cele mai bune oferte pentru vacanța ta. 
                Toate proprietățile sunt verificate și evaluate de utilizatorii noștri.
            </p>
        </div>

        <!-- Listings Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="bg-gray-800 rounded-lg shadow-xl p-6 border border-gray-700 hover:border-indigo-500 transition">
                <div class="bg-gradient-to-br from-blue-600 to-blue-800 h-40 rounded-lg mb-4"></div>
                <h3 class="font-bold text-white mb-2">Apartament Modern</h3>
                <p class="text-gray-400 text-sm mb-3">București, România</p>
                <p class="text-2xl font-bold text-indigo-400">€45<span class="text-sm text-gray-500">/noapte</span></p>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl p-6 border border-gray-700 hover:border-indigo-500 transition">
                <div class="bg-gradient-to-br from-green-600 to-green-800 h-40 rounded-lg mb-4"></div>
                <h3 class="font-bold text-white mb-2">Vilă la Munte</h3>
                <p class="text-gray-400 text-sm mb-3">Brașov, România</p>
                <p class="text-2xl font-bold text-indigo-400">€85<span class="text-sm text-gray-500">/noapte</span></p>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl p-6 border border-gray-700 hover:border-indigo-500 transition">
                <div class="bg-gradient-to-br from-purple-600 to-purple-800 h-40 rounded-lg mb-4"></div>
                <h3 class="font-bold text-white mb-2">Casă la Mare</h3>
                <p class="text-gray-400 text-sm mb-3">Constanța, România</p>
                <p class="text-2xl font-bold text-indigo-400">€120<span class="text-sm text-gray-500">/noapte</span></p>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl p-6 border border-gray-700 hover:border-indigo-500 transition">
                <div class="bg-gradient-to-br from-orange-600 to-orange-800 h-40 rounded-lg mb-4"></div>
                <h3 class="font-bold text-white mb-2">Studio Confortabil</h3>
                <p class="text-gray-400 text-sm mb-3">Cluj-Napoca, România</p>
                <p class="text-2xl font-bold text-indigo-400">€35<span class="text-sm text-gray-500">/noapte</span></p>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl p-6 border border-gray-700 hover:border-indigo-500 transition">
                <div class="bg-gradient-to-br from-pink-600 to-pink-800 h-40 rounded-lg mb-4"></div>
                <h3 class="font-bold text-white mb-2">Căsuță Rustică</h3>
                <p class="text-gray-400 text-sm mb-3">Sibiu, România</p>
                <p class="text-2xl font-bold text-indigo-400">€65<span class="text-sm text-gray-500">/noapte</span></p>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl p-6 border border-gray-700 hover:border-indigo-500 transition">
                <div class="bg-gradient-to-br from-yellow-600 to-yellow-800 h-40 rounded-lg mb-4"></div>
                <h3 class="font-bold text-white mb-2">Penthouse de Lux</h3>
                <p class="text-gray-400 text-sm mb-3">București, România</p>
                <p class="text-2xl font-bold text-indigo-400">€150<span class="text-sm text-gray-500">/noapte</span></p>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-16 py-8 bg-gray-800 border-t border-gray-700">
        <div class="max-w-5xl mx-auto px-4 text-center text-gray-400">
            <p>&copy; 2026 Mini AirBnB. Toate drepturile rezervate.</p>
        </div>
    </footer>

</body>
</html>