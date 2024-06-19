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

            </div>
            <div class="py-4">
                <table class="table-auto w-full bg-white shadow-md rounded-lg overflow-hidden">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-gray-500">Usuario</th>
                        <th class="px-4 py-2 text-left text-gray-500">Email</th>
                        <th class="px-4 py-2 text-left text-gray-500">Tipo de Suscripcion</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-700">
                    @foreach($users as $user)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">{{ $user->name }}</td>
                            <td class="border px-4 py-2">{{ $user->email }}</td>
                            <td class="border px-4 py-2">{{ $user->subscription_type }}</td>
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
