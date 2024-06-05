<!-- Navbar untuk dashboard admin -->
<nav class="bg-gray-800 text-white">
    <div class="container mx-auto px-4 py-4">
        <!-- Tambahkan link-link untuk setiap fitur di sini -->
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.menu.add') }}">Tambah Menu</a>
        <!-- Tambahkan link lainnya sesuai kebutuhan -->
        <a href="{{ route('logout') }}">Logout</a>
    </div>
</nav>

<!-- Bagian konten -->
<div class="container mx-auto px-4 py-4">
    @yield('content')
</div>
