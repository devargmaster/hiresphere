<x-layout>
    <x-slot:title>Perfil</x-slot:title>
    <div class="text-center">
        <h2 class="text-4xl font-bold mt-6 mb-2">Perfil del Usuario</h2>
        @if (session('success'))
            <div class="alert alert-success text-green-500">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger text-red-500">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <div class="flex md:flex-row flex-wrap justify-center">
        {{-- Menú en una columna --}}
        <div class="w-full md:w-1/4 p-4">
            <div id="profile-container" class="bg-white rounded-md shadow-lg z-50 flex flex-col justify-center items-center text-left">
                @auth

                    <div id="profile-menu" class="mt-2 w-full bg-white rounded-md shadow-lg z-50 flex flex-col justify-center items-center text-left">
                        @if(auth()->user()->role_id == 1)
                            <a href="{{ route('admin.news.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Administrar News</a>
                            <a href="{{ route('admin.users.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Administrar Usuarios</a>
                        @endif
                        @if(auth()->user()->role_id == 4)
                            <a href="{{ route('recluiter.jobs.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Empleos</a>
                            <a href="{{ route('recluiter.jobs.applicants') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ver Solicitantes</a>
                            <a href="{{ route('applicant') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Candidatos</a>
                        @endif
                        <a href="{{route ('profile.ChangePassword')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Configuración</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block mb-4 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Salir</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endauth
            </div>
        </div>

        {{-- Contenido principal en otra columna --}}
        <div class="w-full md:w-3/4 p-4">

            <div class="mb-5 bg-white p-6 rounded-lg shadow-xl">
                <div class="flex flex-col items-center">
                    @if($user->applicant)
                        <img src="{{ asset('images/' . $user->applicant->image) }}" alt="Foto de perfil" class="h-24 w-24 rounded-full mb-4">
                    @else
                        <img src="{{ asset('img/perfil.jpg') }}" alt="Foto de perfil" class="h-24 w-24 rounded-full mb-4">
                    @endif
                    <h2 class="text-2xl font-bold">{{ Auth::user()->name }}</h2>
                    <p class="text-sm text-gray-600">{{ Auth::user()->email }}</p>
                </div>
            </div>

            <div class="mb-5 bg-white p-6 rounded-lg shadow-xl">
                <h2 class="text-2xl font-bold">Información del Perfil</h2>
                <p class="mt-3">Descripción o detalles adicionales sobre el usuario.</p>
                <div class="mt-4">
                    <a href="{{ route('edit.profile') }}" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">Editar Perfil</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
