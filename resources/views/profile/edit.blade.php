<x-layout>
    <x-slot:title>Editar Perfil</x-slot:title>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 py-6 sm:px-6 lg:px-8">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Editar Perfil
                </h2>
                <form class="mt-8 space-y-6" method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name" class="sr-only">Nombre</label>
                        <input id="name" name="name" type="text" value="{{ $user->name }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                    <div>
                        <label for="email" class="sr-only">Correo Electrónico</label>
                        <input id="email" name="email" type="email" value="{{ $user->email }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                    <div>
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Guardar Cambios
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
