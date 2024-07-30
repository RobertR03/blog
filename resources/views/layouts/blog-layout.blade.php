<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $metaTitle }}</title>
        <meta name="description" content="{{ $metaDescription }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 flex h-screen flex-col bg-slate-100 selection:bg-sky-600 selection:text-white">
        @include('layouts.blog-navigation')

        @session('status')
            <div class="bg-green-600 p-4 text-xl text-green-50 dark:bg-green-800">
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
