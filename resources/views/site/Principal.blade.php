<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Home</title>
</head>

<body>


    <nav class="bg-gray-500 border-gray-200">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="https://www.eteczonaleste.com.br/" target="blank"
                class="flex items-center space-x-3 rtl:space-x-reverse">
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
                        <a href="/" class="text-gray-900 dark:text-white hover:underline"
                            aria-current="page">Home</a>
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

    <div class="flex justify-center items-center" style="margin-bottom: 5rem;margin-top:5rem">
        <h1 style="font-size:50px; font-weight: bold">Nossos Cursos</h1>
    </div>



    <div class="flex flex-wrap justify-between items-center p-4">


        <a href="#"
            class="block max-w-sm p-6 m-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
            style="max-width: 25rem; margin: 10px">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Novotec Desenvolvimento de
                Sistemas AMS</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">É o profissional que analisa e projeta sistemas.
                Constrói, documenta, realiza...</p>
        </a>



        <a href="#"
            class="block max-w-sm p-6 m-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
            style="max-width: 25rem;max-height: 50rem; margin: 10px">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Técnico em Contabilidade</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Desvende os segredos da Contabilidade: a chave para
                organizar, calcular e prosperar nos negócios!</p>
        </a>


        <a href="#"
            class="block max-w-sm p-8 m-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
            style="max-width: 25rem;max-height: 50rem; margin: 10px">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Técnico em Logística</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Rumo à Eficiência: Explorando os Segredos da Logística com Matemática, Geofrafia e Física!</p>
        </a>

        <a href="#"
            class="block max-w-sm p-6 m-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
            style="max-width: 25rem;max-height: 50rem; margin: 10px">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Técnico em Recursos Humanos</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Gestão de Pessoas em Foco: Desbravando os Desafios do Setor de Recursos Humanos com Língua Portuguesa, Matemática e Historia!</p>
        </a>

        <a href="#"
            class="block max-w-sm p-6 m-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
            style="max-width: 25rem;max-height: 50rem; margin: 10px">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Técnico em Serviços Jurídicos</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Explorando o Mundo Jurídico: Curso Técnico em Direito e Administração - Uma Jornada pelos Pilares Legais da Sociedade!</p>
        </a>


        <a href="#"
            class="block max-w-sm p-6 m-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
            style="max-width: 25rem;max-height: 50rem; margin: 10px">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Técnico em Administração</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Desvendando os Segredos do Mundo Empresarial: Curso Técnico de Administração - Conectando Passado, Presente e Futuro!</p>
        </a>


    </div>

</body>

</html>
