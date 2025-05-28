<x-layout>
    <x-slot:heading>
        Table For Users
    </x-slot:heading>
    <x-forms.input />

    <div class="mt-10 overflow-x-auto">
        <table class="w-[90%] mx-auto text-left border-collapse  ">
            <thead>
                <tr class="border-b border-white/15 bg-white/5 ">
                    <th class="px-4 py-3 "> <a href="#">Id</a> </th>
                    <th class="px-4 py-3 "> <a href="#">Name</a> </th>
                    <th class="px-4 py-3 "> <a href="#">Email</a> </th>
                    <th class="px-4 py-3 "> <a href="#">Created At</a> </th>
                    <th class="px-4 py-3 "> <a href="#">Updated At</a> </th>
                    <th class="px-4 py-3 "> <a href="#">Company Name</a> </th>
                    <th class="px-4 py-3 "> <a href="#">Actions</a> </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b border-white/15">
                        <td class="px-4 py-3 ">{{ $user->id }}</td>
                        <td class="px-4 py-3 ">{{ $user->name }}</td>
                        <td class="px-4 py-3 ">{{ $user->email }}</td>
                        <td class="px-4 py-3 ">{{ $user->created_at->format('M d,Y') }}</td>
                        <td class="px-4 py-3 ">{{ $user->updated_at->format('Y') }}</td>
                        <td class="px-4 py-3"> {{ $user->companies->first()->name ?? 'No Company Name' }} </td>



                        <td class="px-4 py-3 ">Show</td>
                    </tr>
                @endforeach
            </tbody>


        </table>
        <div class="mt-5">
            {{ $users->links() }}
        </div>

    </div>
</x-layout>
