<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} :: HireSphere</title>
    @vite('resources/css/app.css')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100">
<header class="p-5 md:p-8 lg:p-10 border-b bg-white shadow">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
        <div class="flex flex-col items-center md:items-start">
            <a class="font-bold text-red-800 text-sm" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="HireSphere" class="h-18 w-auto mb-2"/>
                <h1 class="text-xl md:text-2xl lg:text-3xl font-black uppercase text-red-800">HireSphere</h1>
            </a>
        </div>
        <nav class="flex flex-col md:flex-row gap-2 items-center mt-4 md:mt-0">
            <a class="block px-4 py-2 text-red-800 font-bold hover:bg-gray-100 uppercase text-sm" href="{{ route('news.index') }}">Novedades</a>
            @if(!auth()->check())
                <a class="block px-4 py-2 text-red-800 font-bold hover:bg-gray-100 uppercase text-sm" href="{{ route('login') }}">Login</a>
                <a class="block px-4 py-2 text-red-800 font-bold hover:bg-gray-100 uppercase text-sm" href="{{ route('register') }}">Crear Cuenta</a>
            @endif
            <a class="block px-4 py-2 text-red-800 font-bold hover:bg-gray-100 uppercase text-sm" href="{{ route('jobs.index')  }}">Empleos</a>
            <a class="block px-4 py-2 text-red-800 font-bold hover:bg-gray-100 uppercase text-sm" href="{{ route('about') }}">Sobre Nosotros</a>
            @if(auth()->check())
                <div id="profile-container" class="relative font-bold uppercase text-red-800 text-sm cursor-pointer">
                    <div id="profile-link">
                        <a class="block px-4 py-2 text-red-800 font-bold hover:bg-gray-100 uppercase text-sm" href="{{ route('profile.menu') }}"> Perfil</a>
                    </div>
                </div>
            @endif
        </nav>
    </div>
</header>
<main class="p-5 md:p-8 lg:p-10">
    {{ $slot }}
</main>
<footer class="mt-10 text-center p-5 text-gray-500 font-bold">
    HireSphere {{ now()->year }} - Todos los derechos reservados
</footer>
</body>
</html>
