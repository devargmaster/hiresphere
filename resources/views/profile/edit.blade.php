<x-layout>
    <x-slot:title>Editar Perfil</x-slot:title>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 py-6 sm:px-6 lg:px-8">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-2xl">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="col-span-2">
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        Editar Perfil
                    </h2>
                    <form class="mt-8 space-y-6" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Campos del usuario -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input id="name" name="name" type="text" value="{{ $user->name }}" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                            <input id="email" name="email" type="email" value="{{ $user->email }}" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <!-- Campos del solicitante -->
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700">Foto de perfil</label>
                            <input id="image" name="image" type="file" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                            <input id="phone" name="phone" type="text" value="{{ $applicant->phone }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-700">Dirección</label>
                            <input id="address" name="address" type="text" value="{{ $applicant->address }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700">Ciudad</label>
                            <input id="city" name="city" type="text" value="{{ $applicant->city }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="state" class="block text-sm font-medium text-gray-700">Estado</label>
                            <input id="state" name="state" type="text" value="{{ $applicant->state }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="zip" class="block text-sm font-medium text-gray-700">Código Postal</label>
                            <input id="zip" name="zip" type="text" value="{{ $applicant->zip }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="country" class="block text-sm font-medium text-gray-700">País</label>
                            <input id="country" name="country" type="text" value="{{ $applicant->country }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="resume" class="block text-sm font-medium text-gray-700">Currículum</label>
                            <input id="resume" name="resume" type="text" value="{{ $applicant->resume }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="cover_letter" class="block text-sm font-medium text-gray-700">Carta de Presentación</label>
                            <input id="cover_letter" name="cover_letter" type="text" value="{{ $applicant->cover_letter }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="notes" class="block text-sm font-medium text-gray-700">Notas</label>
                            <input id="notes" name="notes" type="text" value="{{ $applicant->notes }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="referrer" class="block text-sm font-medium text-gray-700">Referente</label>
                            <input id="referrer" name="referrer" type="text" value="{{ $applicant->referrer }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-span-1 flex flex-col items-center justify-center">
                    <a href="{{ route('suscription') }}" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">
                        Cambiar Membresía
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
