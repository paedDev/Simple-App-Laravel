<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,900;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="font-hanken bg-darkblue">
    <div class="max-w-7xl mx-auto">
        <nav class="flex justify-between items-center h-20 px-10 border-b border-white/10  ">
            <div class="hover:text-amber-300 transtion duration-500">
                <a href="/">Logo</a>
            </div>
            <div class="space-x-4 ">
                <a href="#" class="hover:text-amber-300 transtion duration-500">Users</a>
                <a href="#" class="hover:text-amber-300 transtion duration-500">Company </a>
            </div>
            <div class="hover:text-amber-300 transtion duration-500">
                <a href="#">Post a Company</a>
            </div>
        </nav>
        <main class="p-10">
            {{ $slot }}
        </main>

    </div>

</body>

</html>
