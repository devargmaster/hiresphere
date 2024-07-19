<x-layout>
    <x-slot:title>Suscripción</x-slot:title>
    @auth
        <div class="container mx-auto px-4 py-6">
            <h2 class="text-4xl font-bold text-center mb-6">Hola, {{ auth()->user()->name }}!</h2>
            <p class="text-center mb-4">Elige tu plan de suscripción:</p>
            <form action="/ruta-de-destino" method="POST">
                @csrf
                <div class="flex justify-center space-x-4 mb-6">
                    <!-- Opción Mensual -->
                    <div class="card" onclick="this.closest('form').submit()">
                        <input type="hidden" name="plan" value="mensual">
                        <h3 class="text-xl font-bold">Mensual</h3>
                        <p>Precio: $50</p>
                    </div>
                    <!-- Opción Anual -->
                    <div class="card" onclick="this.closest('form').submit()">
                        <input type="hidden" name="plan" value="anual">
                        <h3 class="text-xl font-bold">Anual</h3>
                        <p>Precio: $500</p>
                    </div>
                </div>
            </form>
        </div>
    @else
        <script>window.location.href = '/login';</script>
    @endauth
</x-layout>

<style>
    .card {
        cursor: pointer;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 8px;
        transition: transform 0.2s, background-color 0.2s;
        /* Color de fondo inicial */
        background-color: #fff;
        /* Color del texto inicial */
        color: #000;
    }

    .card:hover {
        transform: scale(1.05);
        /* Nuevo color de fondo al pasar el mouse */
        background-color: #007bff;
        /* Nuevo color del texto al pasar el mouse */
        color: #fff;
    }
</style>
