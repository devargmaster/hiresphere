<x-layout>
    <x-slot:title>Adm Trabajos</x-slot:title>
    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">

        <h2 class="font-extrabold text-2xl mb-4">{{ $job->title }}</h2>
        <img src="{{ asset('storage/' . $job->image) }}" alt="Job Image" class="w-64 h-64 object-cover mb-4">
        <p class="text-lg mb-2">{{ $job->company_name }}</p>
        <p class="text-lg mb-2">{{ $job->location }}</p>
        <p class="text-lg mb-4">{{ $job->description }}</p>
        @if (session('success'))
            <div class="alert alert-success text-green-500">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger text-red-500">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('jobs.apply', $job) }}">
            @csrf
            @if(auth()->check())
                <button type="submit"  class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white font-bold py-2 px-4 rounded">Aplicar a este trabajo</button>
            @else
                <a href="{{ route('register') }}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white font-bold py-2 px-4 rounded block text-center">Registrate</a>
            @endif

        </form>
    </div>
</x-layout>
