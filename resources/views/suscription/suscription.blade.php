<x-layout>
    <x-slot:title>Suscripciones</x-slot:title>

    <h2 class="font-black text-3xl text-center md:flex md:justify-center mt-6">Mejora tu perfil tanto de candidato como de reclutador</h2>
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-4xl font-bold text-center mb-6">Opciones de Suscripción</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
            <!-- Card Free -->
            <div class="bg-white p-4 shadow rounded-lg transition transform hover:scale-105">
                <img src="https://via.placeholder.com/300x200" alt="Free Plan" class="w-full h-auto rounded-t-lg">
                <h2 class="text-xl font-bold mt-4">Plan Gratuito</h2>
                <p class="mt-2">Disfruta de acceso a ofertas básicas de empleo y envía aplicaciones limitadas. Perfecto para comenzar tu búsqueda de trabajo con visibilidad estándar en nuestra plataforma.</p>
                <div class="mt-4">
                    @guest
                        <a href="{{ route('register') }}" class="bg-gray-300 text-black font-bold py-2 px-4 rounded hover:bg-gray-400">Únete Gratis</a>
                    @else
                        <button id="stayFreeButton" class="bg-gray-300 text-black font-bold py-2 px-4 rounded hover:bg-gray-400">Mantener Gratuito</button>
                    @endguest
                </div>
            </div>

            <!-- Card Premium Mensual -->
            <div class="bg-blue-500 p-4 shadow-lg rounded-lg transition transform hover:scale-110">
                <img src="https://via.placeholder.com/300x200" alt="Premium Monthly Plan" class="w-full h-auto rounded-t-lg">
                <h2 class="text-xl font-bold text-white mt-4">Plan Premium Mensual</h2>
                <p class="text-white mt-2">Accede a todas las ofertas sin restricciones, destaca en los listados y obtén análisis avanzados de tu perfil para maximizar tus oportunidades laborales.</p>
                <div class="mt-4">
                    @guest
                        <a href="{{ route('register') }}" class="bg-white text-blue-500 font-bold py-2 px-4 rounded hover:bg-gray-100">Suscribirse Ahora</a>
                    @else
                        <button id="subscribeMonthlyButton" class="bg-white text-blue-500 font-bold py-2 px-4 rounded hover:bg-gray-100">Suscribirse Ahora</button>
                    @endguest
                </div>
            </div>

            <!-- Card Anual con Descuento -->
            <div class="bg-white p-4 shadow rounded-lg transition transform hover:scale-110">
                <img src="https://via.placeholder.com/300x200" alt="Annual Plan" class="w-full h-auto rounded-t-lg">
                <h2 class="text-xl font-bold mt-4">Plan Anual - 15% Descuento</h2>
                <p class="mt-2">Obtén todos los beneficios del plan Premium durante un año entero con un ahorro del 15% en comparación con la tarifa mensual. Ideal para comprometerse a largo plazo.</p>
                <div class="mt-4">
                    @guest
                        <a href="{{ route('register') }}" class="bg-white text-blue-500 font-bold py-2 px-4 rounded hover:bg-gray-100">Suscribirse Ahora</a>
                    @else
                        <button id="subscribeAnnualButton" class="bg-white text-blue-500 font-bold py-2 px-4 rounded hover:bg-gray-100">Suscribirse Ahora</button>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</x-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var subscribeMonthlyButton = document.getElementById('subscribeMonthlyButton');
        var subscribeAnnualButton = document.getElementById('subscribeAnnualButton');
        var stayFreeButton = document.getElementById('stayFreeButton');
        if (stayFreeButton) {
            stayFreeButton.addEventListener('click', function() {
                window.location.href = '/';
            });
        }
        if (subscribeMonthlyButton) {
            subscribeMonthlyButton.addEventListener('click', function() {
                window.location.href = '/test/mercadopago?plan=mensual';
            });
        }

        if (subscribeAnnualButton) {
            subscribeAnnualButton.addEventListener('click', function() {
                window.location.href = '/test/mercadopago?plan=anual';
            });
        }
    });

</script>
