<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
        <ul class="flex justify-center items-center space-x-1">
            <li>
                <a href="{{ route('home') }}" 
                   class="block px-6 py-4 text-gray-700 hover:text-indigo-600 hover:bg-gray-50 transition font-medium">
                    Acasă
                </a>
            </li>
            <li>
                <a href="{{ route('listings') }}" 
                   class="block px-6 py-4 text-gray-700 hover:text-indigo-600 hover:bg-gray-50 transition font-medium">
                    Proprietăți
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" 
                   class="block px-6 py-4 text-gray-700 hover:text-indigo-600 hover:bg-gray-50 transition font-medium">
                    Despre
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" 
                   class="block px-6 py-4 text-gray-700 hover:text-indigo-600 hover:bg-gray-50 transition font-medium">
                    Contact
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" 
                   class="block px-6 py-3 ml-4 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition font-medium">
                    Login
                </a>
            </li>
        </ul>
    </div>
</nav>