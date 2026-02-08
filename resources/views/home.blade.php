<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini AirBnB - Acasă</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100">
    
    <!-- Navigation -->
    <nav class="bg-gray-800 shadow-lg mb-8 border-b border-gray-700">
        <div class="max-w-5xl mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-indigo-400">Mini AirBnB</h1>
                <div class="space-x-4">
                    <a href="{{ route('home') }}" class="text-indigo-400 font-medium">Acasă</a>
                    <a href="{{ route('listings') }}" class="text-gray-300 hover:text-indigo-400 transition">Arenda</a>
                    <a href="{{ route('about') }}" class="text-gray-300 hover:text-indigo-400 transition">Despre</a>
                    <a href="{{ route('contact') }}" class="text-gray-300 hover:text-indigo-400 transition">Contact</a>
                    <a href="{{ route('login') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="max-w-5xl mx-auto px-4">
        
        <div class="bg-gray-800 rounded-lg shadow-xl p-8 mb-8 border border-gray-700">
            <h1 class="text-4xl font-bold text-white mb-4">Bine ai venit la Mini AirBnB!</h1>
            <p class="text-gray-300 text-lg mb-4">
                Găsește cazarea perfectă pentru următoarea ta aventură. 
                Avem proprietăți în cele mai frumoase orașe din România.
            </p>
            <p class="text-gray-400">
                Navighează prin paginile noastre pentru a descoperi toate opțiunile disponibile.
            </p>
        </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-16 py-8 bg-gray-800 border-t border-gray-700 ">
        <div class="max-w-5xl mx-auto px-4 text-center text-gray-400">
            <p>&copy; 2026 Mini AirBnB. Toate drepturile rezervate.</p>
        </div>
    </footer>

</body>
</html>