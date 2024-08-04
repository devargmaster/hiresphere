<x-layout>
    <x-slot:title>Jobs</x-slot:title>
    <div class="flex flex-wrap justify-between md:px-4">
        <div class="w-full md:w-3/12 px-4">
            <div class="mt-6">
                <img src="{{ asset('images/publi1.jpg') }}" alt="Publicidad1">
            </div>
            <div class="mt-6">
                <img src="{{ asset('images/publi2.jpg') }}" alt="Publicidad2">
            </div>
            <div class="mt-6">
                <img src="{{ asset('images/publi3.jpg') }}" alt="Publicidad3">
            </div>
            <div class="mt-6">
                <img src="{{ asset('images/publi4.jpg') }}" alt="Publicidad4">
            </div>
        </div>
        <div class="w-full md:w-9/12 px-4">
            <h2 class="text-4xl font-bold mt-6 mb-4 w-full">Bolsa de trabajo</h2>
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
