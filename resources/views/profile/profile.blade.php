@extends('components.app')

@section('contenido')
    <div class="md:flex md:flex-col md:justify-center md:items-center text-center">
        <h1 class="text-3xl font-bold mt-6 mb-2">Perfil del Usuario</h1>

        <div class="md:w-8/12 mb-5 bg-white p-6 rounded-lg shadow-xl">
            <div class="flex flex-col items-center">
{{--                <img src="{{ asset('img/user-profile.png') }}" alt="Foto de perfil" class="h-24 w-24 rounded-full mb-4">--}}
                <img src="https://via.placeholder.com/400x200" alt="Foto de perfil"  class="h-24 w-24 rounded-full mb-4">
{{--                <h2 class="text-2xl font-bold">{{ Auth::user()->name }}</h2>--}}
{{--                <p class="text-sm text-gray-600">{{ Auth::user()->email }}</p>--}}
            </div>
        </div>

        <div class="md:w-8/12 mb-5 bg-white p-6 rounded-lg shadow-xl">
            <h2 class="text-2xl font-bold">Información del Perfil</h2>
            <p class="mt-3">Descripción o detalles adicionales sobre el usuario.</p>
            <div class="mt-4">
{{--                <a href="{{ route('edit.profile') }}" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">Editar Perfil</a>--}}
            </div>
        </div>
    </div>
@endsection
