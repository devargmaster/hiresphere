<x-layout>
    <x-slot:title>{{ $new->title }}</x-slot:title>
    <div class="md:flex md:flex-col md:justify-center md:items-center text-center">
        <h2 class="text-3xl font-bold mt-6 mb-4">{{ $new->title }}</h2>
        <div class="md:w-10/12 mb-6">
            <div class="md:flex md:flex-col md:items-center bg-white p-6 rounded-lg shadow-xl mb-4">
                <img src="{{ asset('images/' . $new->image) }}" alt="Imagen Noticia" class="w-1/5 object-cover h-64 md:h-auto mb-4">
                <div class="text-center">
                    <p class="mb-3">{{ $new->content }}</p>
                </div>
            </div>
            <a href="{{ url()->previous() }}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white font-bold py-2 px-4 rounded">Volver atrás</a>
        </div>
    </div>
</x-layout>
