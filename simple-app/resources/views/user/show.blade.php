<x-layout>

    <x-slot:heading>
        Show Actions
    </x-slot:heading>
    <div>
        <form action="/user/{{ $user->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="bg-red-700/90 px-4 py-1 rounded-xl">Delete</button>
        </form>
    </div>
</x-layout>
