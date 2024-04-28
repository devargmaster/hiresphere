@extends('components.app')

@section('contenido')
    <div class="md:flex md:flex-col md:justify-center md:items-center text-center">
        <h1 class="text-3xl font-bold mt-6 mb-4">Últimas Noticias del Mercado Laboral</h1>

        <!-- Contenedor de noticias -->
        <div class="md:w-10/12 mb-6">
            <div class="md:flex md:items-center bg-white p-6 rounded-lg shadow-xl">
                <img src="https://via.placeholder.com/400x200" alt="MercadoLibre Expansión" class="md:w-1/2">
                <div class="md:w-1/2 md:pl-6">
                    <h2 class="text-2xl font-bold mb-3">MercadoLibre expande sus desarrollos en Argentina</h2>
                    <p class="mb-3">MercadoLibre ha anunciado una expansión significativa en Argentina, con planes de contratar a 1500 nuevos empleados para fortalecer su equipo de desarrollo y operaciones locales. Esta expansión subraya el crecimiento continuo de la empresa en la región y su compromiso con la economía local.</p>
                    <a href="#" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white font-bold py-2 px-4 rounded">Leer más</a>
                </div>
            </div>

            <!-- Otro bloque de noticias con la misma estructura -->
            <div class="md:flex md:items-center bg-white p-6 rounded-lg shadow-xl mt-6">
                <img src="https://via.placeholder.com/400x200" alt="Imagen Noticia" class="md:w-1/2">
                <div class="md:w-1/2 md:pl-6">
                    <h2 class="text-2xl font-bold mb-3">Otra Noticia Importante del Mercado Laboral</h2>
                    <p class="mb-3">Descripción breve de la noticia siguiente, ofreciendo un resumen del contenido y su relevancia para el mercado laboral.</p>
                    <a href="#" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white font-bold py-2 px-4 rounded">Leer más</a>
                </div>
            </div>
        </div>

    </div>
@endsection
