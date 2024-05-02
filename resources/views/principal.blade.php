<x-layout>
    <x-slot:title>Home</x-slot:title>
    <div class="md:flex md:flex-col md:items-center text-center">
        <h1 class="text-4xl font-bold mt-6 mb-2">Bienvenido a HireSphere</h1>
        <p class="text-xl mb-4">Tu portal para las oportunidades laborales más atractivas del mercado.</p>

        <img src="{{'img/workimage.webp'}}" alt="Buscar Trabajo"
             class="shadow-lg border border-gray-200 rounded-lg transition-transform hover:scale-x-105 duration-300">


        <h2 class="text-2xl font-bold">¿Cómo funciona?</h2>
        <p class="mb-6 w-8/12">En HireSphere, conectamos talento con oportunidad. Explora miles de ofertas, sube tu
            currículum y deja que
            las mejores empresas te encuentren, y suscribiendote al plan premium obtendras mas beneficios.
            Si estas buscando los mejores candidatos registrate, y suscribete al plan premium</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white p-4 shadow-lg rounded-lg ml-4 mr-4">
                <h3 class="text-xl font-bold">Regístrate</h3>
                <p>Empieza tu búsqueda creando una cuenta en solo minutos. Elije si eres candidato o reclutador</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg ml-4 mr-4">
                <h3 class="text-xl font-bold">Explora Empleos</h3>
                <p>Navega por las últimas ofertas de trabajo que se ajustan a tus habilidades y preferencias.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg ml-4 mr-4">
                <h3 class="text-xl font-bold">Aplica</h3>
                <p>Aplica fácilmente a empleos y gestiona tus aplicaciones desde tu perfil.</p>
            </div>
        </div>

        <a href="{{route('register')}}"
           class="bg-sky-600 hover:bg-sky-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">Crea tu
            cuenta</a>
    </div>
</x-layout>
