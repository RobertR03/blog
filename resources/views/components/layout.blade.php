<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $metaTitle ?? 'Mi Blog' }}</title>
        <meta name="description" content="{{ $metaDescription ?? 'Sin descripción' }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 flex h-screen flex-col bg-slate-100 selection:bg-sky-600 selection:text-white">
        {{-- @include('partials.nav') Se Hace si se guarda partials dentro de views--}}

        <x-partials.nav/>

        @session('status')
            <div class="status">
                {{ $value }}
            </div>
        @endsession
        
        <main class="flex-1 p-4">
            {{ $slot }}
        </main>

        @isset($sidebar)
            <aside id="sidebar">
                <h3>Sidebar {{ $metaTitle ?? '' }}</h3>
                {{ $sidebar }}
            </aside> 
        @endisset
    </body>
</html>
