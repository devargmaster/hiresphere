<?php
/** @var \MercadoPago\Resources\Preference $preference */
/** @var string $mpPublicKey */
$selectedPlan = $selectedPlan ?? 'mensual';
?>
<x-layout>
    <x-slot:title>Suscripción</x-slot:title>
    @auth
        <div class="container mx-auto px-4 py-6">
            <h2 class="text-4xl font-bold text-center mb-6">Hola, {{ auth()->user()->name }}!</h2>
            <p class="text-center mb-4">Elige tu plan de suscripción:</p>
            <form id="subscription-form" action="/ruta-de-destino" method="POST">
                @csrf
                <div class="flex justify-center space-x-4 mb-6">
                    <!-- Opción Mensual -->
                    <label class="card" data-plan="mensual">
                        <input type="radio" name="plan" value="mensual" class="mr-2">Mensual - $50
                    </label>
                    <!-- Opción Anual -->
                    <label class="card" data-plan="anual">
                        <input type="radio" name="plan" value="anual" class="mr-2">Anual - $500
                    </label>
                </div>
                <button type="submit" class="btn">Pagar</button>
            </form>
            <div id="wallet_container"></div>
        </div>
    @else
        <script>window.location.href = '/login';</script>
    @endauth
</x-layout>
<style>
    .selected {
        border-color: #007bff; /* Cambia el color del borde */
        background-color: #e7f1ff; /* Cambia el color de fondo */
    }
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

// SDK MercadoPago.js
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
        const mp = new MercadoPago('<?= $mpPublicKey; ?>');
        mp.bricks().create("wallet", "wallet_container", {
            initialization: {
                preferenceId: '<?= $preference->id; ?>',
            },
            customization: {
                texts: {
                    valueProp: 'smart_option',
                },
            },
        });
    });

</script>
