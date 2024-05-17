<x-layout>
    <x-slot:title>Noticias</x-slot:title>
    <div class="md:flex md:flex-col md:justify-center md:items-center text-center">
        <h1 class="text-3xl font-bold mt-6 mb-4">Últimas Noticias del Mercado Laboral</h1>
        <div class="md:w-10/12 mb-6">
            @foreach($news as $new)
                <div class="md:flex md:items-center bg-white p-6 rounded-lg shadow-xl mb-4">
                    <img src="{{ asset('images/' . $new->image) }}" alt="Imagen Noticia" class="md:w-1/4 w-full object-cover h-64 md:h-auto">
                    <div class="md:w-1/2 md:pl-6">
                        <h2 class="text-2xl font-bold mb-3">{{ $new->title }}</h2>
                        <p class="mb-3">{{ $new->content }}</p>
                        <a href="#"
                           class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white font-bold py-2 px-4 rounded">Leer
                            más</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="md:flex md:justify-center mt-4">
            {{ $news->links('vendor.pagination.custom') }}
        </div>
    </div>
</x-layout>
