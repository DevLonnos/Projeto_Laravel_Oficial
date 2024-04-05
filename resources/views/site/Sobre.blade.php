<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Sobre</title>
</head>

<body class="min-h-screen">
    <nav class=" bg-gray-500 border-gray-200">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="https://www.eteczonaleste.com.br/" target="blank" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('Image/192x192.png') }}" class="w-20 h-15" alt="Etec Logo" />
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap ml-3">Etec</span> --}}
            </a>
        </div>
    </nav>

    <div class="flex justify-center items-center"> <!--Div Container -->

    <div class="bg-white shadow-lg p-8 rounded-lg" style="max-width: 40rem; margin: 0 auto;">
            <h1 class="text-red-700 text-center p-5 underline  decoration-solid">ETEC ZONA LESTE</h1>

            <p class="text-justify p-2">
                Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante
                polo educacional na região. Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento
                profissional dos estudantes.
            </p>

            <p class="text-justify p-2">
                Fundada em 2008, a Etec Zona Leste rapidamente se estabeleceu como uma instituição
                de referência no ensino técnico e tecnológico. Desde o início, sua missão foi
                proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios
                do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.
            </p>

            <p class="text-justify p-2">
                Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua
                oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a
                Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros,
                proporcionando aos alunos uma formação sólida e atualizada.
            </p>

            <p class="text-justify p-2">
                Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que
                incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades
                complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o
                trabalho em equipe, liderança e a criatividade.
            </p>

        </div>

    </div>
</body>

</html>