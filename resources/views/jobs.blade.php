<x-layout>
    <x-slot:title>Jobs</x-slot:title>
    <div class="md:flex md:flex-col md:justify-center md:items-center text-center">
        <h1 class="text-3xl font-bold mt-6 mb-4">Latest Job Market News</h1>

        <!-- Job container -->
        <div class="md:w-10/12 mb-6">
            @foreach($jobs as $job)
                <div class="md:flex md:items-center bg-white p-6 rounded-lg shadow-xl">
                    <div class="md:w-1/2 md:pl-6">
                        <h2 class="text-2xl font-bold mb-3">{{ $job->title }}</h2>
                        <p class="mb-3">{{ $job->description }}</p>
                        <a href="#"
                           class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white font-bold py-2 px-4 rounded">Read
                            more</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
