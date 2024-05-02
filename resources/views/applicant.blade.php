<x-layout>
    <x-slot:title>Adm Noticias</x-slot:title>
    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
        <div class="py-8">
            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                <h2 class="text-2xl leading-tight">
                    Candidatos
                </h2>
                <div class="text-end">
                    <form class="flex w-full max-w-sm space-x-3">
                        <div class=" relative ">
                            <input type="text" id="search" name="search"
                                   class="block w-full appearance-none rounded-lg border border-gray-300 px-4 py-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-sky-500"
                                   placeholder="Buscar...">
                        </div>
                        <button class="flex-shrink-0 bg-sky-500 hover:bg-sky-700 border-sky-500 hover:border-sky-700 text-sm border-4 text-white py-1 px-2 rounded"
                                type="submit">
                            Buscar
                        </button>
                    </form>
                </div>
            </div>
            <div class="py-4">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <div class="overflow-hidden">
                            @foreach($applicants as $applicant)
                                <div class="p-4 bg-white border-b border-gray-200">
                                    <div class="flex justify-between">
                                        <div class="text-sm text-gray-600">
                                            <p class="text-gray-900 leading-none">{{ $applicant->name }}</p>
                                            <p>{{ $applicant->email }}</p>
                                            <p>{{ $applicant->phone}}</p>
                                            <p>{{ $applicant->address }}</p>
                                        </div>
                                        <div class="mt-4 flex gap-2">
                                            <a href=""
                                               class="text-sm bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Editar</a>
                                            <a href=""
                                               class="text-sm bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
