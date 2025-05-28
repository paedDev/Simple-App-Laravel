<x-layout>
    <x-slot:heading>
        Companies
    </x-slot:heading>

    <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-8 p-4">
        @foreach ($companies as $company)
            <a href="/company/{{ $company->id }}" class="border block h-auto p-4 border-white/20 rounded-xl space-y-4">
                <h2 class="mb-4 inline-block font-semibold">
                    {{ $company->name }}
                </h2>
                <p class="text-gray-400">
                    {{ $company->description }}
                </p>
                <p class="text-gray-400">
                    {{ $company->address }}
                </p>
            </a>
        @endforeach
    </div>

</x-layout>
