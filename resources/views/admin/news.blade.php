<x-layout>
    <x-slot:title>Adm Noticias</x-slot:title>

    @if(session('feedback.message'))
        <div class="bg-green-100 border border-green-400 text-green-700 container mx-auto px-4 sm:px-8 max-w-3xl mt-4">
            <div class="py-8">
                <strong class="font-bold">{{ session('feedback.message') }}</strong>
            </div>
        </div>
    @endif
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
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">Título</th>
                        <th class="px-4 py-2">Contenido</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $new)
                        <tr>
                            <td class="border px-4 py-2">{{ $new->title }}</td>
                            <td class="border px-4 py-2">{{ $new->content }}</td>
                            <td class="border px-4 py-2">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.news.edit', $new->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                        Editar
                                    </a>
                                    <form method="POST" action="{{ route('admin.news.destroy', $new->id) }}" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
