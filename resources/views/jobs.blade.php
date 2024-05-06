<x-layout>
    <x-slot:title>Jobs</x-slot:title>
    <div class="md:flex md:flex-wrap md:justify-center md:items-start text-center">
        <h1 class="text-3xl font-bold mt-6 mb-4 w-full">Bolsa de trabajo</h1>
        @foreach($jobs as $job)
            <div class="md:w-1/2 p-4">
                <div class="bg-white p-6 rounded-lg shadow-xl">
                    <h2 class="text-2xl font-bold mb-3">{{ $job->title }}</h2>
                    <p class="mb-3">{{ $job->description }}</p>
                    <a href="{{ route('jobs.show', $job) }}"
                       class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white font-bold py-2 px-4 rounded">Ver Empleo</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="md:flex md:justify-center mt-4">
        {{ $jobs->links() }}
    </div>
</x-layout>
