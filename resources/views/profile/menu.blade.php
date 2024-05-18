<x-layout>
    <x-slot:title>Menú Perfil</x-slot:title>
    <div id="profile-container" class="relative mx-auto mt-2 w-48 bg-white rounded-md shadow-lg z-50 flex flex-col justify-center items-center text-left">
        @auth
            <x-sidebar />
            <div id="profile-menu" class="relative mx-auto mt-2 w-48 bg-white rounded-md shadow-lg z-50 flex flex-col justify-center items-center text-left">

                @if(auth()->user()->role_id == 1)
                    <a href="{{ route('admin.news.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Administrar News</a>
                @endif
                @if(auth()->user()->role_id == 4)
                    <a href="{{ route('recluiter.jobs.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Empleos</a>
                    <a href="{{ route('recluiter.jobs.applicants') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ver Solicitantes</a>
                    <a href="{{ route('applicant') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Candidatos</a>
                @endif
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Configuración</a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Salir</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @endauth
    </div>
</x-layout>
