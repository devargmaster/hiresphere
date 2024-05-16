<x-layout>
    <x-slot:title>Adm Trabajos</x-slot:title>

    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
        <div class="py-8">
            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                <h2 class="text-2xl leading-tight">
                    Editar Trabajo
                </h2>
            </div>
            <div class="py-4">
                <form method="POST" action="{{ route('recluiter.jobs.update', $job->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                            Título
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="title" type="text" placeholder="Título del trabajo" name="title" value="{{ $job->title }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                            Imagen
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" type="file" name="image">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="company_name">
                            Nombre de la empresa
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="company_name" type="text" placeholder="Nombre de la empresa" name="company_name" value="{{ $job->company_name }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="location">
                            Ubicación
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="location" type="text" placeholder="Ubicación" name="location" value="{{ $job->location }}">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                            Contenido
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="content" placeholder="descripcion del trabajo" name="description">{{ $job->description }}</textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                            Guardar Cambios
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
