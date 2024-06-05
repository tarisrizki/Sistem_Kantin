@extends('layouts.app')

@section('title', 'Home')
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


    <!-- Hero Section -->
    <header class="relative">
        <img src="{{ asset('images/Background.jpg') }}" alt="Background" class="w-full h-96 object-cover">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold">Kantin FMIPA</h1>
            <p class="mt-4 text-lg md:text-xl">Kantin FMIPA, Hidangan Lezat di Jantung Ilmu</p>
        </div>
    </header>

    @include('User.partials.welcome-section')
    @include('User.partials.menu-section')

</body>
</html>
@endsection