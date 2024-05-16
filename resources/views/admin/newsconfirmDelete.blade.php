<x-layout>
    <x-slot:title>Adm Noticias</x-slot:title>
    <div class="flex flex-col items-center justify-center min-h-screen py-2">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 flex flex-col">
            <h1 class="mb-4">Confirmar eliminación</h1>
            <p class="mb-6">¿Estás seguro de que quieres eliminar la noticia "{{ $news->title }}"?</p>
            <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST" class="mb-4">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Sí, eliminar
                </button>
            </form>
            <a href="{{ route('admin.news.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                No, volver a la lista de noticias
            </a>
        </div>
    </div>
</x-layout>
