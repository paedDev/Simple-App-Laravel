<x-layout>
    <x-slot:heading>

    </x-slot:heading>
    <div class="h-full">
        <div class="flex min-h-full flex-col justify-center px-6  lg:px-8">
            <h1 class="text-center text-4xl mb-10 ">Login</h1>
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="/login" method="POST">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-white">Email address</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" autocomplete="email" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                value="{{ old('email') }}">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm/6 font-medium text-white">Password</label>
                            <div class="text-sm">

                            </div>
                        </div>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" autocomplete="current-password"
                                required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                            in</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-layout>
