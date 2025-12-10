<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Alpine.js (needed for certificate modal) -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Tailwind via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    {{-- Navbar --}}
    @include('components.partials.nav')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('components.partials.footer')

</body>
</html>
