<x-layout>
    <x-slot:title>{{ $applicant->name }}</x-slot:title>
    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
        <div class="py-8">
            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                <h2 class="text-2xl leading-tight">
                    Detalles del Candidato
                </h2>
            </div>
            <div class="py-4">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="p-4 bg-white border-b border-gray-200">
                                <div class="flex justify-between">
                                    <div class="text-sm text-gray-600">
                                        <p class="text-gray-900 leading-none">{{ $applicant->name }}</p>
                                        <p>{{ $applicant->email }}</p>
                                        <p>{{ $applicant->phone}}</p>
                                        <p>{{ $applicant->address }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ url()->previous() }}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white font-bold py-2 px-4 rounded">Volver atrás</a>
        </div>
    </div>
</x-layout>
