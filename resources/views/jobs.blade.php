<x-layout>
    <x-slot:title>Jobs</x-slot:title>
    <div class="flex flex-wrap justify-between md:px-4">
        <div class="w-full md:w-3/12 px-4">
            <div class="mt-6">
                <h2 class="mb-4 text-lg font-bold text-gray-700">Filtros</h2>
                <div>
                    <h3 class="mb-2 text-sm font-semibold text-gray-600">Por ubicación</h3>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-sky-600">
                            <span class="ml-2">Buenos Aires</span>
                        </label>
                    </div>

                </div>
            </div>
        </div>
        <div class="w-full md:w-9/12 px-4">
            <h1 class="text-3xl font-bold mt-6 mb-4 w-full">Bolsa de trabajo</h1>
            @foreach($jobs as $job)
                <div class="bg-white p-6 rounded-lg shadow-xl mb-4">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('storage/' . $job->image) }}" alt="Logo" class="w-20 h-20 object-cover">
                        <div class="ml-4">
                            <h2 class="text-2xl font-bold">{{ $job->title }}</h2>
                            <p class="text-gray-600">{{ $job->company_name }}</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">{{ Str::limit($job->description, 150) }}</p>
                    <div class="flex justify-between items-end">
                        <p class="text-gray-600">{{ $job->location }}</p>
                        <a href="{{ route('jobs.show', $job) }}"
                           class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                            text-white font-bold py-2 px-4 rounded">Ver Empleo</a>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600">Publicado: {{ $job->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            @endforeach
            <div class="md:flex md:justify-center mt-4">
                {{ $jobs->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
</x-layout>
