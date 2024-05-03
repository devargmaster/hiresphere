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
                @foreach($jobs as $job)
                    <div class="mb-4">
                        <h3 class="text-xl font-bold">{{ $job->title }}</h3>
                        <p>{{ $job->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
