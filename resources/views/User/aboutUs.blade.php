@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin FMIPA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-900 p-0 m-0"> <!-- Tambahkan padding dan margin 0 -->

    <!-- Main Content Section -->
    <main class="max-w-7xl mx-auto p-6 bg-white shadow-lg mt-8 rounded-lg">
    <header class="relative w-full">
        <img src="{{ asset('images/Background.jpg') }}" alt="Background" class="w-full h-96 object-cover">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold">Kantin FMIPA</h1>
        </div>
    </header>
        <div class="text-gray-700 text-lg leading-relaxed">
            <p>
                Selamat datang di Kantin FIMPA USK, sebuah tempat istirahat di kampus yang menjadi pusat kegiatan ilmiah dan sosial bagi mahasiswa, staf, dan pengunjung lainnya. Terletak strategis di dalam lingkungan Fakultas Matematika dan Ilmu Pengetahuan Alam, kantin ini menjadi tempat makan yang nyaman serta menyediakan berbagai hidangan lezat.
            </p>
            <p class="mt-4">
                Selain makanan dan minuman, kantin kami sering menjadi tempat untuk acara ilmiah seperti bincang-bincang, presentasi, dan diskusi. Kami menyediakan hidangan lokal, internasional, dan juga pilihan vegetarian serta vegan. Nikmati makanan lezat sambil berinteraksi dengan komunitas akademik dalam suasana yang santai dan menyenangkan.
            </p>
            <p class="mt-4">
                Dengan beragam pilihan makanan dan minuman serta suasana yang nyaman, kantin FIMPA USK diharapkan dapat menjadi bagian integral dari kehidupan kampus. Kami berkomitmen untuk memberikan pelayanan terbaik dengan harga yang terjangkau.
            </p>
            <p class="mt-4">
                Kami tunggu kedatangan Anda – dari sekadar menikmati secangkir kopi hingga mengadakan pertemuan penting di meja kantin kami yang menenangkan! Terima kasih atas kunjungan Anda dan semoga hari Anda menyenangkan.
            </p>
        </div>
    </main>

   

    <!-- FontAwesome for Social Media Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

@endsection
