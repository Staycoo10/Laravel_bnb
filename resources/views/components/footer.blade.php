<footer class="bg-gray-800 text-white mt-16">
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Section 1 -->
            <div>
                <h3 class="text-xl font-bold mb-4">Mini AirBnB</h3>
                <p class="text-gray-300">Platforma ta de încredere pentru cazări</p>
            </div>

            <!-- Section 2 -->
            <div>
                <h3 class="text-xl font-bold mb-4">Link-uri Rapide</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition">Acasă</a></li>
                    <li><a href="{{ route('listings') }}" class="text-gray-300 hover:text-white transition">Proprietăți</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition">Despre</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition">Contact</a></li>
                </ul>
            </div>

            <!-- Section 3 -->
            <div>
                <h3 class="text-xl font-bold mb-4">Contact</h3>
                <p class="text-gray-300 mb-2">Email: contact@miniairbnb.com</p>
                <p class="text-gray-300">Tel: +40 123 456 789</p>
            </div>
        </div>

        <!-- Bottom -->
        <div class="border-t border-gray-700 pt-8 text-center text-gray-400">
            <p>&copy; 2026 Mini AirBnB. Toate drepturile rezervate.</p>
        </div>
    </div>
</footer>