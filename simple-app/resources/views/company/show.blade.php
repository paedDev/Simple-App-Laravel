<x-layout>
    <x-slot:heading>
        {{ $company->name }}
    </x-slot:heading>
    <div class="ml-2 text-gray-400">
        <p>
            {{ $company->description }}
        </p>
        <p>
            {{ $company->address }}
        </p>
    </div>
    <div class="mt-4 flex items-center space-x-4  transition duration-500">
        <button class="px-4 py-1 bg-white/20 rounded-lg hover:bg-white/50">
            <a href="/company/{{ $company->id }}/edit">Edit</a>
        </button>
        <form action="/company/{{ $company->id }}" method="POST">
            @csrf
            @method('DELETE')
            <div>
                <button class="bg-red-500 px-4 py-1 rounded-lg hover:bg-red-400">
                    Delete
                </button>
            </div>
        </form>

    </div>

</x-layout>
