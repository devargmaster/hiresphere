<x-layout>
    <x-slot:title>Detalle</x-slot:title>
    @if($id == 1)
        <p>El ID es 1. Mostrar información específica para el ID 1.</p>
    @elseif($id == 2)
        <p>El ID es 2. Mostrar información específica para el ID 2.</p>
    @else
        <p>El ID es {{ $id }}. Mostrar información genérica.</p>
    @endif
</x-layout>
