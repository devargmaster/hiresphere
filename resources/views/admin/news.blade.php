<x-layout>
    <x-slot:title>Adm Noticias</x-slot:title>

    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
        <div class="py-8">
            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                <h2 class="text-2xl leading-tight">
                    Noticias
                </h2>
                <a href="{{ route('admin.news.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Crear Noticia
                </a>
            </div>
            <div class="py-4">
                @foreach($news as $new)
                    <div class="mb-4">
                        <h3 class="text-xl font-bold">{{ $new->title }}</h3>
                        <p>{{ $new->content }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
