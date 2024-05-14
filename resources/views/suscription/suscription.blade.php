<x-layout>
    <x-slot:title>Suscripciones</x-slot:title>

    <h2 class="font-black text-3xl text-center md:flex md:justify-center mt-6">Mejora tu perfil tanto de candidato como de reclutador</h2>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold text-center mb-6">Opciones de Suscripción</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
            <!-- Card Free -->
            <div class="bg-white p-4 shadow rounded-lg transition transform hover:scale-105">
                <img src="https://via.placeholder.com/300x200" alt="Free Plan" class="w-full h-auto rounded-t-lg">
                <h2 class="text-xl font-bold mt-4">Plan Free</h2>
                <p class="mt-2">Acceso a ofertas básicas de empleo, envío de aplicaciones limitadas y visibilidad estándar en la plataforma.</p>
                <div class="mt-4">
                    <button class="bg-gray-300 text-black font-bold py-2 px-4 rounded hover:bg-gray-400">Quedarse con Gratuito</button>
                </div>
            </div>

            <!-- Card Premium Mensual -->
            <div class="bg-blue-500 p-4 shadow-lg rounded-lg transition transform hover:scale-110">
                <img src="https://via.placeholder.com/300x200" alt="Premium Monthly Plan" class="w-full h-auto rounded-t-lg">
                <h2 class="text-xl font-bold text-white mt-4">Premium Mensual</h2>
                <p class="text-white mt-2">Acceso ilimitado a todas las ofertas, destacado en listados y análisis avanzados de perfil.</p>
                <div class="mt-4">
                    <button class="bg-white text-blue-500 font-bold py-2 px-4 rounded hover:bg-gray-100">Suscribirse</button>
                </div>
            </div>

            <!-- Card Anual con Descuento -->
            <div class="bg-white p-4 shadow rounded-lg transition transform hover:scale-110">
                <img src="https://via.placeholder.com/300x200" alt="Annual Plan" class="w-full h-auto rounded-t-lg">
                <h2 class="text-xl font-bold mt-4">Anual - 15% Descuento</h2>
                <p class="mt-2">Todos los beneficios del Premium por un año, con un ahorro del 15% sobre la tarifa mensual.</p>
                <div class="mt-4">
                    <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">Suscribirse</button>
                </div>
            </div>
        </div>
    </div>
</x-layout>
