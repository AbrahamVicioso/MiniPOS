<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="flex justify-center items-center min-h-screen">
        <div class="flex flex-col">
            <x-application-logo/>
            <ul class="m-3 flex flex-col items-center">
                <li class="\text-center cursor-pointer
                text-white
                rounded-lg
                box-border
                border-2
                border-transparent
                hover:border-blue-400
                transition-all
                duration-300
                p-0.5
                w-[80%]
                ">
                    <a class="
                        block
                        w-full h-full
                        bg-blue-600
                        text-center
                        rounded-lg
                        px-4
                        py-2
                        hover:bg-blue-400
                    " href="/login">Login</a>
                </li>
                <li class="text-center cursor-pointer
                text-white
                rounded-lg
                box-border
                border-2
                border-transparent
                hover:border-blue-400
                transition-all
                duration-300
                p-0.5
                w-[100%]
                ">
                    <a class="
                        block
                        w-full h-full
                        bg-slate-600
                        text-center
                        rounded-lg
                        px-4
                        py-2
                        hover:bg-blue-400
                    " href="/register">Register</a>
                </li>
            </ul>
        </div>
    </body>
</html>
