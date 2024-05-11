<x-layout>
    <x-slot:title>Login</x-slot:title>
    @if(session('feedback.message'))
        <div class="alert alert-success">
            {{ session('feedback.message') }}
        </div>
    @endif
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12">
            <img src="{{'img/login.jpg'}}" alt="Imagen de login" class="mt-4"/>
        </div>
        <div class="md:w-4/12 m-5 bg-white p-6 rounded-lg shadow-2xl">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email:</label>
                    <input type="email"
                           id="email"
                           name="email"
                           placeholder="Ingresa tu email"
                           class="border p-3 w-full rounded-lg"/>
                    @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password:</label>
                    <input type="password"
                           id="password"
                           name="password"
                           placeholder="Ingresa tu password"
                           class="border p-3 w-full rounded-lg"/>
                    @error('password')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <input type="submit"
                       value="Iniciar sesión"
                       class="bg-sky-600 hover:bg-sky-700 transition-colors
                             cursor-pointer
                             w-full p-3 text-white uppercase font-bold rounded-lg"/>
            </form>
        </div>
    </div>
</x-layout>
