<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900">
        <!-- BACKGROUND ABSTRAK (BLOBS) -->
        <div class="min-h-screen bg-slate-50 relative overflow-hidden">
            <!-- Lingkaran Abstrak Melayang -->
            <div class="absolute top-[-10%] left-[-10%] w-[40rem] h-[40rem] bg-pink-300 rounded-full mix-blend-multiply filter blur-[100px] opacity-60 animate-pulse"></div>
            <div class="absolute top-[20%] right-[-5%] w-[35rem] h-[35rem] bg-yellow-300 rounded-full mix-blend-multiply filter blur-[100px] opacity-60"></div>
            <div class="absolute bottom-[-10%] left-[20%] w-[30rem] h-[30rem] bg-purple-300 rounded-full mix-blend-multiply filter blur-[100px] opacity-60 animate-pulse" style="animation-delay: 2s;"></div>

            <div class="relative z-10">
                @include('layouts.navigation')

                <!-- Page Heading (Gaya Kaca/Glassmorphism) -->
                @isset($header)
                    <header class="bg-white/40 backdrop-blur-xl border-b border-white/50 shadow-sm relative z-20">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>