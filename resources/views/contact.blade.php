<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Mini AirBnB</title>
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
                    <a href="{{ route('about') }}" class="text-gray-300 hover:text-indigo-400 transition">Despre</a>
                    <a href="{{ route('contact') }}" class="text-indigo-400 font-medium">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="max-w-4xl mx-auto px-4">
        
        <div class="bg-gray-800 rounded-lg shadow-xl p-8 mb-6 border border-gray-700">
            <h1 class="text-3xl font-bold text-white mb-2">Contactează-ne</h1>
            <p class="text-gray-300">
                Suntem aici pentru a te ajuta. Completează formularul de mai jos sau folosește informațiile de contact.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            
            <!-- Contact Form -->
            <div class="bg-gray-800 rounded-lg shadow-xl p-8 border border-gray-700">
                <h2 class="text-xl font-bold text-white mb-4">Trimite-ne un mesaj</h2>
                
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Nume</label>
                        <input type="text" required 
                               class="w-full px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                        <input type="email" required 
                               class="w-full px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Mesaj</label>
                        <textarea rows="4" required 
                                  class="w-full px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"></textarea>
                    </div>

                    <button type="submit" 
                            class="w-full bg-indigo-600 text-white py-2 rounded-lg font-semibold hover:bg-indigo-700 transition">
                        Trimite Mesajul
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="bg-gray-800 rounded-lg shadow-xl p-8 border border-gray-700">
                <h2 class="text-xl font-bold text-white mb-4">Informații de Contact</h2>
                
                <div class="space-y-4">
                    <div>
                        <p class="font-semibold text-white mb-1">📧 Email</p>
                        <p class="text-gray-400">contact@miniairbnb.com</p>
                    </div>

                    <div>
                        <p class="font-semibold text-white mb-1">📱 Telefon</p>
                        <p class="text-gray-400">+40 123 456 789</p>
                    </div>

                    <div>
                        <p class="font-semibold text-white mb-1">📍 Adresă</p>
                        <p class="text-gray-400">Str. Exemplu Nr. 123</p>
                        <p class="text-gray-400">București, România</p>
                    </div>

                    <div>
                        <p class="font-semibold text-white mb-1">🕐 Program</p>
                        <p class="text-gray-400">Luni - Vineri: 9:00 - 18:00</p>
                        <p class="text-gray-400">Weekend: 10:00 - 16:00</p>
                    </div>
                </div>
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