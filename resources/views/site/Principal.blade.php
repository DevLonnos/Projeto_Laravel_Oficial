<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Home</title>
</head>

<body>


    <nav class="bg-gray-500 border-gray-200">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="https://www.eteczonaleste.com.br/" target="blank" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('Image/192x192.png') }}" class="w-20 h-15" alt="Etec Logo" />
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap ml-3">Etec</span> --}}
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                 <a href="/login" class="text-sm  text-gray-200 dark:text-gray-500 hover:underline">Login</a>
                 <a href="/register" class="text-sm  text-gray-200 dark:text-gray-500 hover:underline">Register</a>
            </div>
        </div>
    </nav>
    <nav class="bg-gray-200 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a href="/" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/contato" class="text-gray-900 dark:text-white hover:underline">Contato</a>
                    </li>
                    <li>
                        <a href="/sobre" class="text-gray-900 dark:text-white hover:underline">Sobre</a>
                    </li>
                    <li>
                        <a href="/noticias" class="text-gray-900 dark:text-white hover:underline">Noticias</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>Bem-vindo(a) ao site da Etec Zona Leste.</h1>
</body>

</html>