<x-layout>
    <x-slot:title>Adm Trabajos</x-slot:title>
    @if ($errors->any())
        <div class="bg-red-500 mb-4 rounded border border-red-500-400 text-white container mx-auto px-4 sm:px-8 max-w-3xl mt-4 flex justify-center items-center">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="flex flex-col items-center justify-center ">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 flex flex-col">
            <p class="text-black font-bold">Confirmar eliminación</p>
            <p class="mb-6">¿Estás seguro de que quieres eliminar el trabajo "{{ $job->title }}"?</p>
            <div class="flex flex-row justify-center items-center space-x-4">
                <form action="{{ route('recluiter.jobs.destroy', $job->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-48 text-center">
                        Sí
                    </button>
                </form>
                <a href="{{ route('recluiter.jobs.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-48 text-center">
                    No
                </a>
            </div>


        </div>
    </div>
</x-layout>
