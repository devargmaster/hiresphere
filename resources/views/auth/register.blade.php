
<x-layout>
    <x-slot:title>Registro de usuario</x-slot:title>

    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 ml-5">
            <img src="{{'img/registrar.jpg'}}" alt="Imagen registro usuario"/>
        </div>
        <div class="md:w-4/12 m-5 bg-white p-6 rounded-lg shadow-2xl">
            <form action="{{ route('register.store') }}" method="post">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre:</label>
                    <input type="text" id="name" name="name" placeholder="Ingresa tu nombre"
                           class="border p-3 w-full rounded-lg"/>
                    @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Ingresa tu username"
                           class="border p-3 w-full rounded-lg"/>
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email:</label>
                    <input type="text" id="email" name="email" placeholder="Ingresa tu email"
                           class="border p-3 w-full rounded-lg"/>
                    @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu password"
                           class="border p-3 w-full rounded-lg"/>
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir
                        Password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                           placeholder="Repite tu password" class="border p-3 w-full rounded-lg"/>
                </div>

                <div class="mb-4">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">Regístrate como:</label>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" name="role_id" value="1" class="text-sky-600" checked>
                            <span class="ml-2">Candidato</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" name="role_id" value="2" class="text-sky-600">
                            <span class="ml-2">Reclutador</span>
                        </label>
                    </div>
                </div>

                <div class="text-xs text-gray-600 mb-4">
                    Al crear una cuenta, tienes la opción de suscribirte a <a href="{{ route('suscription') }}"
                                                                              class="text-sky-600 hover:underline">HireSphere
                        Premium</a> para acceder a beneficios exclusivos.
                </div>

                <input type="submit" value="Crear cuenta"
                       class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer w-full p-3 text-white uppercase font-bold rounded-lg"/>
            </form>
        </div>
    </div>
</x-layout>
