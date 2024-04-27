<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <header>
            <h1 class="text-3xl font-bold underline text-blue-600">
                Hello world!
            </h1>
        </header>
        <main>
            <p>This is a simple Laravel application</p>
        </main>
    </body>
</html>
