<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            background-color: #EAF6FF;
            font-family: 'Figtree', sans-serif;
            color: #2F2F2F;
        }
    </style>
</head>
<body class="antialiased">
    <div class="min-h-screen flex">

        {{-- SIDEBAR --}}
        <aside class="w-64 bg-[#D0EBFF] shadow-[inset_4px_4px_8px_#B0CFE6,inset_-4px_-4px_8px_#FFFFFF] p-6">
            <div class="mb-8 text-2xl font-bold flex items-center gap-2">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />
                </svg>
                Pelatihan
            </div>
            <nav class="space-y-4 text-sm">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2 text-gray-800 hover:underline">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6M4 10v10h16V10l-8-8-8 8z" />
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('peserta.index') }}" class="flex items-center gap-2 text-gray-800 hover:underline">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                    Peserta
                </a>
                <a href="{{ route('pelatihan.index') }}" class="flex items-center gap-2 text-gray-800 hover:underline">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422A12.083 12.083 0 0112 21.5a12.083 12.083 0 01-6.16-10.922L12 14z" />
                    </svg>
                    Pelatihan
                </a>
                <a href="{{ route('pendaftaran.index') }}" class="flex items-center gap-2 text-gray-800 hover:underline">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                    </svg>
                    Pendaftaran
                </a>
                <form method="POST" action="{{ route('logout') }}" class="pt-6">
                    @csrf
                    <button type="submit" class="flex items-center gap-2 text-red-600 hover:underline">
                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1" />
                        </svg>
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        {{-- MAIN --}}
        <div class="flex-1">
            @isset($header)
                <header class="bg-white shadow px-6 py-4">
                    <h2 class="text-xl font-semibold">{{ $header }}</h2>
                </header>
            @endisset

            <main class="p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
