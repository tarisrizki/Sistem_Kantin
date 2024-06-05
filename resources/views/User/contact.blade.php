@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin FMIPA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-900">

    <!-- Header Section -->
    <header class="relative w-full h-96 bg-cover bg-center" style="background-image: url('{{ asset("images/Background.jpg") }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex items-center justify-center h-full">
            <h1 class="text-white text-4xl font-bold">Hubungi Kami</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        <!-- Contact Form Section -->
        <div class="flex flex-col md:flex-row">
            <!-- Map -->
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.594339264247!2d110.3724411!3d-7.7935841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5987c9c0c9b9%3A0xf0c9242e0b8f0f0!2sGudeg%20Yu%20Djum!5e0!3m2!1sen!2sid!4v1605881163112!5m2!1sen!2sid" 
                    width="100%" 
                    height="100%" 
                    frameborder="0" 
                    style="border:0;" 
                    allowfullscreen="" 
                    aria-hidden="false" 
                    tabindex="0"></iframe>
            </div>
            <!-- Contact Form -->
            <div class="w-full md:w-1/2">
                <form class="bg-white p-6 rounded-lg shadow-md">
                    <div class="mb-4">
                        <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Subjek</label>
                        <input type="text" id="subject" name="subject" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Pesan</label>
                        <textarea id="message" name="message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4"></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>

@endsection
