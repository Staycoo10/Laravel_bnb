<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despre Noi - Mini AirBnB</title>
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
                    <a href="{{ route('listings') }}" class="text-gray-300 hover:text-indigo-400 transition">Arenda</a>
                    <a href="{{ route('about') }}" class="text-indigo-400 font-medium">Despre</a>
                    <a href="{{ route('contact') }}" class="text-gray-300 hover:text-indigo-400 transition">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="max-w-4xl mx-auto px-4">
        
        <div class="bg-gray-800 rounded-lg shadow-xl p-8 mb-6 border border-gray-700">
            <h1 class="text-3xl font-bold text-white mb-4">Despre Mini AirBnB</h1>
            <p class="text-gray-300 text-lg mb-4">
                Mini AirBnB este o platformă care conectează oameni cu locuri unice din întreaga lume. 
                Credem că fiecare călătorie ar trebui să fie o experiență memorabilă.
            </p>
            <p class="text-gray-300 text-lg">
                Fie că ești în căutarea unui apartament modern în centrul orașului sau o vilă liniștită la munte, 
                platforma noastră îți oferă acces la cele mai diverse opțiuni de cazare.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            
            <div class="bg-gray-800 rounded-lg shadow-xl p-6 text-center border border-gray-700">
                <div class="text-4xl mb-3">🏠</div>
                <h3 class="text-xl font-bold text-white mb-2">500+ Proprietăți</h3>
                <p class="text-gray-400">În peste 50 de orașe</p>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl p-6 text-center border border-gray-700">
                <div class="text-4xl mb-3">⭐</div>
                <h3 class="text-xl font-bold text-white mb-2">4.8/5 Rating</h3>
                <p class="text-gray-400">Din 10,000+ recenzii</p>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl p-6 text-center border border-gray-700">
                <div class="text-4xl mb-3">👥</div>
                <h3 class="text-xl font-bold text-white mb-2">50,000+ Utilizatori</h3>
                <p class="text-gray-400">Comunitate activă</p>
            </div>

        </div>

        <div class="bg-gray-800 rounded-lg shadow-xl p-8 border border-gray-700">
            <h2 class="text-2xl font-bold text-white mb-4">De Ce Mini AirBnB?</h2>
            <ul class="space-y-3">
                <li class="flex items-start">
                    <span class="text-indigo-400 font-bold text-xl mr-3">✓</span>
                    <div>
                        <p class="font-semibold text-white">Verificare Riguroasă</p>
                        <p class="text-gray-400">Toate proprietățile sunt verificate</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-indigo-400 font-bold text-xl mr-3">✓</span>
                    <div>
                        <p class="font-semibold text-white">Suport 24/7</p>
                        <p class="text-gray-400">Asistență non-stop</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-indigo-400 font-bold text-xl mr-3">✓</span>
                    <div>
                        <p class="font-semibold text-white">Prețuri Transparente</p>
                        <p class="text-gray-400">Fără costuri ascunse</p>
                    </div>
                </li>
            </ul>
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