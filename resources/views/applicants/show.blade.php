<x-layout>
    <x-slot:title>Detalle del Candidato</x-slot:title>
    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
        <div class="py-8">
            <h2 class="text-2xl leading-tight">Detalle del Candidato</h2>
            <div class="bg-white p-6 rounded-lg shadow-xl">
                <p class="text-gray-900 leading-none font-bold">{{ $applicant->name }}</p>
                <p>{{ $applicant->email }}</p>
                <p>{{ $applicant->phone }}</p>
                <p>{{ $applicant->address }}</p>
                <p>{{ $applicant->city }}, {{ $applicant->state }} {{ $applicant->zip }}</p>
                <p>{{ $applicant->country }}</p>
                <p>{{ $applicant->resume }}</p>
                <p>{{ $applicant->cover_letter }}</p>
                <p>{{ $applicant->status }}</p>
                <p>{{ $applicant->notes }}</p>
                <p>{{ $applicant->source }}</p>
                <p>{{ $applicant->applied_at }}</p>
                <a href="{{ url()->previous() }}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white font-bold py-2 px-4 rounded">Volver atrás</a>
            </div>
        </div>
    </div>
</x-layout>
