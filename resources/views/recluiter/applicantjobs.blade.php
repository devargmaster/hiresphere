<x-layout>
    <x-slot:title>Candidatos</x-slot:title>
    <div class="flex justify-center mt-4">
        <form method="GET" action="{{ route('recluiter.jobs.applicants') }}" class="mb-4">
            <input type="text" name="search" placeholder="Buscar solicitantes" value="{{ request('search') }}"
                   class="border-2 border-gray-300 p-2 rounded-md">
            <input type="submit" value="Buscar"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </form>
    </div>
    <div class="flex justify-center">
        <table class="table-auto border-collapse border border-gray-300">
            <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2 text-gray-800">Nombre del trabajo</th>
                <th class="border border-gray-300 px-4 py-2 text-gray-800">Solicitantes</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobs as $job)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $job->title }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <ul>
                            @foreach($job->applicants->take(5) as $applicant)
                                <li>{{ $applicant->name }}</li>
                            @endforeach
                        </ul>
                        @if($job->applicants->count() > 5)
                            <a href="{{ route('recluiter.jobs.applicants.all', $job) }}" class="text-blue-500">Ver todos los solicitantes</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <div class="flex justify-center mt-4">
        {{ $jobs->links('vendor.pagination.custom') }}
    </div>
</x-layout>
