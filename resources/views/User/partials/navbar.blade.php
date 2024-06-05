<!-- resources/views/layouts/app.blade.php -->

<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="text-xl font-semibold">Sistem Kantin</div>
        <div>
            <a href="{{ route('home') }}" class="text-gray-700 px-3">Home</a>
            <a href="{{ route('about') }}" class="text-gray-700 px-3">Tentang</a>
            <a href="{{ route('menu') }}" class="text-gray-700 px-3">Menu</a>
            <a href="{{ route('contact') }}" class="text-gray-700 px-3">Hubungi Kami</a>
            @guest
                <!-- Show login form -->
                <a href="{{ route('login') }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Login</a>
            @else
                <!-- Show logged-in user's profile or dashboard -->
                <!-- You can add links to the user's profile or dashboard here -->
            @endguest
        </div>
    </div>
</nav>
