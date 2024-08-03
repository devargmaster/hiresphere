<x-layout>
    <x-slot:title>{{ $statistics['title'] }}</x-slot:title>

    <h1>{{ $statistics['title'] }}</h1>

    @if(count($statistics['details']) > 0)
        <ul>
            @foreach($statistics['details'] as $user)
                <li>{{ $user->name }} - {{ $user->email }}</li>
            @endforeach
        </ul>
    @else
        <p>No hay detalles disponibles para este ID.</p>
    @endif
</x-layout>
