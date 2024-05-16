<x-layout>
    <x-slot:title>Adm Trabajos</x-slot:title>

    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
        <div class="py-8">
            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                <h2 class="text-2xl leading-tight">
                    Trabajos
                </h2>
                <a href="{{ route('recluiter.addjob') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Crear Trabajo
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
                    @foreach($jobs as $job)
                        <tr>
                            <td class="border px-4 py-2">{{ $job->title }}</td>
                            <td class="border px-4 py-2">{{ Str::limit($job->description, 200) }}</td>
                            <td class="border px-4 py-2">
                                <div class="flex space-x-4">
                                    <a href="{{ route('recluiter.jobs.edit', $job->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                        Editar
                                    </a>

                                    <form method="GET" action="{{ route('recluiter.jobs.confirmDelete', $job->id) }}" class="inline">
                                        @csrf
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
            <div class="md:flex md:justify-center mt-4">
                {{ $jobs->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
</x-layout>
