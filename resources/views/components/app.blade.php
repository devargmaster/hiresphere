<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HireSphere</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<header class="p-5 border-b bg-white shadow">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex flex-col items-center"> <!-- Cambia a flex-col para alinear en columna -->
            <img src="{{'img/logo.png'}}" alt="HireSphere" class="h-12 w-auto mb-2"/> <!-- Ajusta el tamaño según necesario y añade margen abajo -->
            <h1 class="text-xl font-black uppercase text-red-800">HireSphere</h1> <!-- Ajusta el tamaño del texto si es necesario -->
        </div>
        <nav class="flex gap-2 items-center">
            <a class="font-bold uppercase text-red-800 text-sm" href="{{ route('news') }}">Novedades</a>
            <a class="font-bold uppercase text-red-800 text-sm" href="{{ route('login') }}">Login</a>
            <a class="font-bold uppercase text-red-800 text-sm" href="{{ route('register') }}">Crear Cuenta</a>
            <a class="font-bold uppercase text-red-800 text-sm" href="{{ route('about') }}">Sobre Nosotros</a>
            <a class="font-bold uppercase text-red-800 text-sm" href="{{ route('profile') }}">Perfil</a>
        </nav>
    </div>
</header>


<main>
    <h2 class="font-black text-center text-3xl mb-10">
        @yield('titulo')
    </h2>
    @yield('contenido')
</main>
<footer class="mt-10 text-center p-5 text-gray-500 font-bold">
    HireSphere {{ now()->year }} - Todos los derechos reservados
</footer>

</body>
</html>
