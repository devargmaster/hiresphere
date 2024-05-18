<x-layout>
    <x-slot:title>Adm Noticias</x-slot:title>
    <div class="flex flex-col items-center justify-center ">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 flex flex-col">
            <p class="text-black font-bold">Confirmar eliminación</p>
            <p class="mb-6">¿Estás seguro de que quieres eliminar la noticia "{{ $news->title }}"?</p>
            <div class="flex flex-row justify-center items-center space-x-4">
                <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-48 text-center">
                        Sí
                    </button>
                </form>
                <a href="{{ route('admin.news.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-48 text-center">
                    No
                </a>
            </div>
        </div>
    </div>
</x-layout>
