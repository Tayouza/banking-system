<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Scripts -->
        @wireUiScripts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans text-gray-900 antialiased" style="background-color: rgba(136,151,210,255)">
        <x-notifications />
        <div>
        <nav class="flex items-center flex-wrap p-4 mb-8 text-white" style="background-color: rgba(172,173,207,255)">
            <!--Brand-->
            <div class="flex items-center rounded">
                <a href="/" class="inline-flex items-center mr-4">
                    <span class="font-bold tracking-wide text-3xl py-3">
                    <i class="material-icons h-10 ml-2">account_balance</i>
                        BBank
                    </span>
                </a>
            </div>

            <!--Button-->
            <button id="btnNav" class="inline-flex p-2 rounded hover:bg-gray-500 hover:shadow-xl ml-auto md:hidden">
                <i class="material-icons">menu</i>
            </button>

            <!--Links-->
            <div id="divNav" class="hidden w-full flex-row md:inline-flex md:w-auto md:ml-auto text-xl">
            @if (Route::has('login'))
                <div class="flex flex-col md:inline-flex md:flex-row ">
                @auth
                <a href="{{ url('/dashboard') }}" class="mx-1 p-2 font-bold rounded hover:bg-gray-500 hover:shadow-xl text-2xl">Dashboard</a>
                @else
                    <a href="/" class="mx-1 p-2 font-bold rounded hover:bg-gray-500 hover:shadow-xl text-2xl">Início</a>
                    <a href="{{ route('login') }}" class="mx-1 p-2 font-bold rounded hover:bg-gray-500 hover:shadow-x text-2xl">Entrar</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="mx-1 p-2 font-bold rounded hover:bg-gray-500 hover:shadow-xl text-2xl">Criar Conta</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </nav>
    </div>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900" style="background-color: rgba(136,151,210,255)">
            <div>
                <a href="/">
                    <div class="material-icons text-white" style="font-size: 150px">account_balance</div>
                </a>
            </div>

            <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        @livewireScripts
    </body>

    <!-- Hamburguer Navbar -->
    <script>
        const btnNav = document.querySelector("#btnNav");
        const divNav = document.querySelector("#divNav");

        btnNav.addEventListener("click", function () {
            divNav.classList.toggle("hidden");
        });
    </script>

</html>
