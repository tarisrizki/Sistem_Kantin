<!-- resources/views/menu.blade.php -->
@extends('layouts.app')

@section('title', 'Menu')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin FMIPA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Header Section -->
    <header class="relative">
        <img src="{{ asset('images/Background.jpg') }}" alt="Background Image" class="w-full h-96 object-cover">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-4xl font-bold">Menu</h1>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="max-w-7xl mx-auto p-6 bg-white shadow-lg mt-8 rounded-lg">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-yellow-500">Specialties</h2>
            <h3 class="text-2xl font-semibold text-gray-700">Menu Kami</h3>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($menuItems as $item)
                <div class="border p-4 rounded-lg shadow-md bg-white">
                    <img src="{{ asset('images/menu/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-40 object-cover rounded-md">
                    <div class="mt-4 flex justify-between items-center">
                        <h4 class="text-xl font-semibold text-gray-800">{{ $item->name }}</h4>
                        <span class="text-lg font-bold text-yellow-500">{{ $item->price }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-8">
            <button class="bg-green-500 text-white px-4 py-2 rounded-md">Online Order</button>
        </div>
    </main>

@endsection