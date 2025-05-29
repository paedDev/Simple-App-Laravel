<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,900;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="font-hanken bg-darkblue">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <nav class="flex justify-between items-center h-20 px-10 border-b border-white/10">
            <div class="hover:text-amber-300 transtion duration-500">
                <a href="/">Logo</a>
            </div>
            @auth
                <div class="space-x-4 ">
                    <a href="/user" class="hover:text-amber-300 transtion duration-500">Users</a>
                    <a href="/company" class="hover:text-amber-300 transtion duration-500">Company </a>
                </div>
            @endauth

            @guest
                <div class="">
                    <div class="space-x-4">
                        <button class="bg-blue-500/80 px-2 py-1 rounded-lg transtion duration-500">
                            <a href="/register" class="">Sign Up</a>
                        </button>
                        <button class="bg-blue-500/80 px-2 py-1 rounded-lg transtion duration-500">
                            <a href="/login">Log In</a>
                        </button>

                    </div>
                </div>
            @endguest
            @auth
                <div>
                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Logout</button>
                    </form>
                </div>
            @endauth

        </nav>
        <header class="px-10 mx-auto my-10 flex items-center justify-between">
            <h1 class="text-3xl font-bold tracking-tight text-white">{{ $heading }}</h1>
            @if (request()->is('company') || request()->is('company/create'))
                <x-button href="/company/create"
                    class="{{ request()->is('/company/create') ? 'bg-gray-900 text-white ' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Create Company
                </x-button>
            @endif
        </header>
        <main class="p-10 max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">

            {{ $slot }}


        </main>

    </div>

</body>

</html>
