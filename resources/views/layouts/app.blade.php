<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white text-gray-900">

    @include('User.partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('User.partials.footer')

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
