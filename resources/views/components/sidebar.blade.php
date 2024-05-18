<div class="bg-blue-200 p-4 rounded-lg mb-4">
    <div class="text-xl text-black">
        <a href="{{ route('profile.show') }}">
            {{ auth()->user()->applicant->name ?? auth()->user()->name }}({{ auth()->user()->role->name }})
        </a>
    </div>
</div>
