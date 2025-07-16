<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Claymorphism Style -->
        <style>
            body {
                background-color: #EAF6FF;
                font-family: 'Figtree', sans-serif;
                color: #2F2F2F;
            }

            .clay-box {
                background: linear-gradient(145deg, #EAF6FF, #D0EBFF);
                border-radius: 20px;
                box-shadow:
                    8px 8px 20px #B0CFE6,
                    -8px -8px 20px #FFFFFF;
                padding: 2rem;
                transition: 0.3s ease;
            }

            .clay-box:hover {
                box-shadow:
                    10px 10px 25px #B0CFE6,
                    -10px -10px 25px #FFFFFF;
            }

            .clay-logo {
                filter: drop-shadow(4px 4px 6px #B0CFE6);
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#EAF6FF]">
            <div>
                <a href="/" class="clay-logo">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 clay-box">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
