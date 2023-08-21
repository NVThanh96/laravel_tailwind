<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Navbar Example</title>
</head>

@php
    $isDarkMode = false; // Set this based on user preference or session
@endphp

<body class="{{ $isDarkMode ? 'dark' : '' }}">
    <!-- Will be white -->
    <div class="bg-white dark:bg-black">
        @include('layouts.header')
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
    </div>
</body>


</html>

