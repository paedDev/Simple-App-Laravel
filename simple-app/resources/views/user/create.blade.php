<x-layout>
    <form class="" action="/user" method="POST">
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-white">Profile</h2>
            <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 ">
              <div class="sm:col-span-4">
                <label for="username" class="block text-sm/6 font-medium text-white">Name</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 mb-2">
                    <input type="text" name="name" id="name" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-500 placeholder:text-gray-300 focus:outline-none sm:text-sm/6" placeholder="Jan Noel S. Paed">
                  </div>
                  @error('name')
                      <p class="text">{{$message}}</p>
                  @enderror
                </div>
                <div class="sm:col-span-4">
                    <label for="username" class="block text-sm/6 font-medium text-white">Email</label>
                    <div class="mt-2">
                      <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input type="text" name="email" id="email" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-600 placeholder:text-gray-300  focus:outline-none sm:text-sm/6" placeholder="jannoelpaed@gmail.com">
                      </div>
                    </div>
              </div>
    
            </div>
          </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>
      
</x-layout>