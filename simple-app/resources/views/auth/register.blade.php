<x-layout>
    <x-slot:heading>

    </x-slot:heading>
    <div class="h-full">
        <div class="flex min-h-full flex-col justify-center px-6  lg:px-8">
            <h1 class="text-center text-4xl mb-10 ">Register</h1>
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="/register" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm/6 font-medium text-white">Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" autocomplete="name" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                value="{{ old('name') }}">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-white">Email address</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" autocomplete="email" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm/6 font-medium text-white">Password</label>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" autocomplete="password" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm/6 font-medium text-white">Password
                            Confirmation</label>
                        <div class="mt-2">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                autocomplete="password_confirmation" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    <div class="my-10">

                    </div>
                    <div>
                        <label for="company_name" class="block text-sm font-medium text-white">Company Name</label>
                        <input type="text" name="company_name" id="company_name" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black">
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-white">Company
                            Description</label>
                        <input type="text" name="description" id="description" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black">
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-white">Company Address</label>
                        <input type="text" name="address" id="address" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black">
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                    </div>
                </form>
            </div>
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif

    </div>
</x-layout>
