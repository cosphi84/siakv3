<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <style>[x-cloak] { display: none !important; }</style>
        
        <!-- Scripts -->
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ menuOpen: false }" class="flex min-h-screen custom-scrollbar">
            <div :class="menuOpen ? 'block' : 'hidden'" @click="menuOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden">
            </div>

            @include('layouts.sidenav')

            <!-- Main Panel -->
            <div class="lg:pl-64 w-full flex flex-col">
                
                <!-- Tob nav -->
                <div class="flex flex-col">
                    @include('layouts.topnav')
                </div>
                
                <!-- COntent -->
                <div class="h-full bg-gray-300 dark:bg-dark p-8">
                
                    {{ $slot }}
                </div>

                <div class="flex flex-col">
                    @include('layouts.footer')
                </div>
            </div>
        </div>
    </body>
</html>
