<x-layout>
    <x-slot:title>{{ $statistics['title'] }}</x-slot:title>

    <div class="text-center my-4">
        <h2 class="text-2xl font-bold">{{ $statistics['title'] }}</h2>
    </div>

    @if(count($statistics['details']) > 0)
        <div class="flex justify-center">
            <table class="table-auto border-collapse border border-gray-300">
                <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Nombre</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($statistics['details'] as $user)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $user->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-center">No hay detalles disponibles para este ID.</p>
    @endif
</x-layout>
