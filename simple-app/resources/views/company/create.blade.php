<x-layout>
    <x-slot:heading>
        Create Company
    </x-slot:heading>
    <form action="/company" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="username" class="block text-sm/6 font-medium text-white">Company Name</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="name" id="name"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-700 
                                    placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Ice Cream Company">

                            </div>
                        </div>
                        @error('name')
                            <p class="ml-1 pt-1 text-red-500 ">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-full">
                        <label for="about" class="block text-sm/6 font-medium text-white">Description</label>
                        <div class="mt-2">
                            <textarea name="description" id="description" rows="3"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base outline-1 -outline-offset-1 outline-gray-300 text-gray-700 
                                    placeholder:text-gray-500  focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                        </div>
                        @error('description')
                            <p class="ml-1 pt-1 text-red-500 ">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="username" class="block text-sm/6 font-medium text-white">Address</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="address" id="address"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-700 
                                    placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Bio,Tagudin Ilocos Sur">
                            </div>
                        </div>
                        @error('address')
                            <p class="ml-1 pt-1 text-red-500 ">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
        </div>
    </form>

</x-layout>
