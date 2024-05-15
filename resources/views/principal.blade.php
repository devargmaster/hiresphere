<x-layout>
    <x-slot:title>Home</x-slot:title>
    @if(session('feedback.message'))
        <div class="bg-green-100 border border-green-400 text-green-700 container mx-auto px-4 sm:px-8 max-w-3xl mt-4">
            <div class="py-8">
                <strong class="font-bold">{{ session('feedback.message') }}</strong>
            </div>
        </div>
    @endif
    <div class="md:flex md:flex-col md:items-center text-center">
        <h1 class="text-4xl font-bold">Bienvenido a HireSphere</h1>
        <p class="text-xl">Tu portal para las oportunidades laborales más atractivas del mercado.</p>

        <img src="{{ asset('img/workimage.webp') }}" alt="Buscar Trabajo"
             class="shadow-lg border border-gray-200 rounded-lg
             transition-transform hover:transform">

        <h2 class="text-2xl font-bold mt-8">¿Cómo funciona?</h2>
        <p class="mb-6 w-11/12 md:w-8/12 mx-auto">En HireSphere, conectamos talento con oportunidad. Explora miles de ofertas, sube tu
            currículum y deja que las mejores empresas te encuentren, y suscribiéndote al plan premium obtendrás más beneficios.
            Si estás buscando los mejores candidatos, regístrate y suscríbete al plan <a class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white font-bold rounded text-center mr-2 ml-2" href="{{ route('suscription') }}">Premium</a></p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white p-4 shadow-lg rounded-lg ml-4 mr-4">
                <h3 class="text-xl font-bold">Regístrate</h3>
                <p>Empieza tu búsqueda creando una cuenta en solo minutos. Elije si eres candidato o reclutador y para más beneficios te ofrecemos nuestro plan <a class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer text-white font-bold rounded text-center mr-2 ml-2" href="{{ route('suscription') }}">Premium</a></p>
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

        <a href="{{ route('register') }}"
           class="bg-sky-600 hover:bg-sky-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">Crea tu cuenta</a>
    </div>
</x-layout>
