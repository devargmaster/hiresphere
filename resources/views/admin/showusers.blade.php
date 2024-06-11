<x-layout>
    <x-slot:title>Listado de Usuarios</x-slot:title>

    @if(session('feedback.message'))
        <div class="bg-green-100 border border-green-400 text-green-700 container mx-auto px-4 sm:px-8 max-w-3xl mt-4">
            <div class="py-8">
                <strong class="font-bold">{{ session('feedback.message') }}</strong>
            </div>
        </div>
    @endif
    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
        <div class="py-8">
            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                <h2 class="text-2xl leading-tight">
                    Listado de usuarios
                </h2>
                <a href="{{ route('admin.news.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Crear Noticia
                </a>
            </div>
            <div class="py-4">
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">Usuario</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Tipo de Suscripcion</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="border px-4 py-2">{{ $user->name }}</td>
                            <td class="border px-4 py-2">{{ $user->email }}</td>
                            <td class="border px-4 py-2">{{ $user->subscription_type }}</td>
                            <!-- Agrega más celdas aquí para mostrar más información del usuario si lo deseas -->
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            <div class="md:flex md:justify-center mt-4">--}}
{{--                {{ $news->links('vendor.pagination.custom') }}--}}
{{--            </div>--}}
        </div>
    </div>
</x-layout>
