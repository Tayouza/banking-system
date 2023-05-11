<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> BBank - Início </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body style="background-color: rgba(136,151,210,255)">

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

    <!--Conteúdo do Body-->

    <div style="background-color: rgba(136,151,210,255)">
        <div class="px-6 mx-auto max-w-6xl">
            <div class="flex flex-col-reverse items-center md:flex-row lg:items-end">
                <div class="pt-24 pr-8 pb-24 text-center md:pb-12 md:w-1/2 md:text-left">
                    <h1 class="relative z-10 text-5xl font-bold md:text-6xl font-display">
                        BBank
                        <span
                            class="relative after:absolute after:-top-2 after:-right-6 after:-z-1">
                            o melhor
                        </span>
                        para
                        <span
                            class="relative after:absolute after:-bottom-2 after:-right-8 after:-z-1">
                            você
                        </span>
                    </h1>
                    <p class="pt-8 text-lg leading-relaxed text-black-500 md:max-w-md md:text-xl">
                    Transforme sua relação com o dinheiro. 
                    Abra sua conta em nosso banco digital e tenha acesso a serviços bancários práticos, seguros e modernos
                    </p>
                    <div class="flex justify-center items-center pt-12 space-x-6 md:justify-start">
                        <a
                            href="https://www.google.com/" target="_blank" 
                            class="flex justify-center items-center py-4 px-8 font-bold tracking-wide leading-7 text-black bg-gray-300 rounded-full hover:bg-gray-500 hover:shadow-xl">
                            Saiba mais!
                        </a>
                        <div class="flex items-center">
                            <img src="https://miro.medium.com/v2/resize:fit:640/0*zPG9dqz508rmRR70." alt="idosos" class="w-36"/>
                        </div>
                    </div>
                </div>
                <div class="flex items-end w-1/2 max-sm:w-auto md:mb-12 border-b border-gray-400">
                    <img src="https://pefmbddiag.blob.core.windows.net/cdn-blog-pi/output/img/materia/0024a9ad-73c5-4b31-aa8e-e1d36e44f5ef.jpg" alt="idosos"/>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: rgba(136,151,210,255)">
        <div class="py-12 px-6 mx-auto max-w-6xl">
            <div class="flex flex-col gap-5 md:flex-row">
                <div class="flex flex-col p-8 space-y-4 bg-white rounded-lg border border-gray-200 transition-shadow duration-500 ease-out cursor-pointer hover:shadow-xl">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <span class="absolute right-0 bottom-1 w-12 h-1.5 opacity-60" ></span>
                            <h2 class="relative text-xl font-display">Acesso seguro e prático</h2>
                        </div>
                    </div>
                    <p class="text-sm leading-relaxed text-black">Com a gente você pode abrir sua conta de forma prática e segura pelo celular, em poucos minutos. Nós utilizamos tecnologias avançadas para garantir a segurança dos seus dados e suas transações bancárias.</p>
                </div>
                <div class="flex flex-col p-8 space-y-4 bg-white rounded-lg border border-gray-200 transition-shadow duration-500 ease-out cursor-pointer hover:shadow-xl">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <span class="absolute right-0 bottom-1 w-12 h-1.5 opacity-60" ></span>
                            <h2 class="relative text-xl font-display">Controle suas finanças com facilidade</h2>
                        </div>
                    </div>
                    <p class="text-sm leading-relaxed text-black">Tenha acesso a diversos serviços bancários pelo aplicativo, como transferências e pagamentos, além de poder visualizar seu saldo em tempo real e estabelecer metas de economia, tudo de forma prática e segura.</p>
                </div>
                <div class="flex flex-col p-8 space-y-4 bg-white rounded-lg border border-gray-200 transition-shadow duration-500 ease-out cursor-pointer hover:shadow-xl">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <span class="absolute right-0 bottom-1 w-12 h-1.5 opacity-60" ></span>
                            <h2 class="relative text-xl font-display">Invista seu dinheiro de forma inteligente</h2>
                        </div>
                    </div>
                    <p class="text-sm leading-relaxed text-black">Aqui tem acesso a diversas opções de investimento, como fundos de investimento em renda fixa e variável, ações, títulos públicos e privados. Invista seu dinheiro de forma inteligente com nosso banco digital.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

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
