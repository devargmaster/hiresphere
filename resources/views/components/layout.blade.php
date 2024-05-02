<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ $title }} :: HireSphere</title>
    @vite('resources/css/app.css')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const profileMenu = document.getElementById('profile-menu');
            const profileLink = document.getElementById('profile-link');

            profileLink.addEventListener('mouseover', () => {
                profileMenu.style.display = 'block';
            });

            profileMenu.addEventListener('mouseleave', () => {
                profileMenu.style.display = 'none';
            });
        });
    </script>
</head>
<body class="bg-gray-100">
<header class="p-5 border-b bg-white shadow">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex flex-col items-center"><a class="font-bold  text-red-800 text-sm" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="HireSphere" class="h-18 w-auto mb-2"/>
            <h1 class="text-xl font-black uppercase text-red-800">HireSphere</h1>
            </a>
        </div>
        <nav class="flex gap-2 items-center">
            <a class="font-bold uppercase text-red-800 text-sm" href="{{ route('news.index') }}">Novedades</a>|
            <a class="font-bold uppercase text-red-800 text-sm" href="{{ route('login') }}">Login</a>|
            <a href="#" class="font-bold uppercase text-red-800 text-sm">Empleos</a>|
            <a class="font-bold uppercase text-red-800 text-sm" href="{{ route('register') }}">Crear Cuenta</a>|
            <a class="font-bold uppercase text-red-800 text-sm" href="{{ route('about') }}">Sobre Nosotros</a>|
            <div id="profile-container" class="relative font-bold uppercase text-red-800 text-sm cursor-pointer">
                <div id="profile-link">
                    Perfil
                </div>
                <div id="profile-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50 hidden">
                    <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Administrar Perfil</a>
                    <a href="{{ route('admin.news.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Administrar News</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Administrar Empleos</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Administrar Postulaciones</a>
                    <a href="{{ route('applicant') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Administrar Candidatos</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Configuración</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Salir</a>
                </div>
            </div>
        </nav>
    </div>
</header>
<main>

    {{ $slot }}
</main>
<footer class="mt-10 text-center p-5 text-gray-500 font-bold">
    HireSphere {{ now()->year }} - Todos los derechos reservados
</footer>
</body>
</html>
