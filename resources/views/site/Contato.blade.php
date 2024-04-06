<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="min-h-screen">

    <nav class=" bg-gray-500 border-gray-200">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="https://www.eteczonaleste.com.br/" target="blank"
                class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('Image/192x192.png') }}" class="w-20 h-15" alt="Etec Logo" />
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap ml-3">Etec</span> --}}
            </a>
        </div>
    </nav>

    <div class="flex justify-center items-center">

        <div class=" bg-white shadow-lg p-8 rounded-lg" style="max-width: 50rem; margin: 0 auto;">


            <div class="p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
                role="alert">

                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-7 h-7 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa" x1="9.993" x2="40.615" y1="9.993"
                            y2="40.615" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#2aa4f4" />
                            <stop offset="1" stop-color="#007ad9" />
                        </linearGradient>
                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa)"
                            d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z" />
                        <path fill="#fff"
                            d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z" />
                    </svg>
                    <h3 class="text-lg font-medium">Facebook</h3>
                </div>
                <div class="mt-2 mb-4 text-sm">
                    Acompanhe a gente no Facebook para ficar por dentro de todas as postagens que fazemos
                    constantemente.
                </div>
                <div class="flex">
                    <a href='https://www.facebook.com/Eteczonalesteoficial' target="blank">
                        <button type="button"
                            class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 14">
                                <path
                                    d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                            </svg>
                            Ver mais
                        </button>
                </div>

            </div>
            <div class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                role="alert">
                <div class="flex items-center">

                    <svg class="flex-shrink-0 w-7 h-7 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path fill="#FF3D00"
                            d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z" />
                        <path fill="#FFF" d="M20 31L20 17 32 24z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium">Yotube</h3>
                </div>
                <div class="mt-2 mb-4 text-sm">
                    Acompanhe a gente no Youtube para ter acesso a nossos vídeos que cobrem todos os eventos que
                    acontece na Etec Zona Leste.
                </div>
                <div class="flex">
                    <a href='https://www.youtube.com/@etecdazonaleste2949' target="blank">
                        <button type="button"
                            class="text-white bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 14">
                                <path
                                    d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                            </svg>
                            Ver mais
                        </button>
                    </a>
                </div>
            </div>
            <div class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                role="alert">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-7 h-7 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                        width="48px" height="48px">
                        <radialGradient id="yOrnnhliCrdS2gy~4tD8ma" cx="19.38" cy="42.035" r="44.899"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fd5" />
                            <stop offset=".328" stop-color="#ff543f" />
                            <stop offset=".348" stop-color="#fc5245" />
                            <stop offset=".504" stop-color="#e64771" />
                            <stop offset=".643" stop-color="#d53e91" />
                            <stop offset=".761" stop-color="#cc39a4" />
                            <stop offset=".841" stop-color="#c837ab" />
                        </radialGradient>
                        <path fill="url(#yOrnnhliCrdS2gy~4tD8ma)"
                            d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z" />
                        <radialGradient id="yOrnnhliCrdS2gy~4tD8mb" cx="11.786" cy="5.54" r="29.813"
                            gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#4168c9" />
                            <stop offset=".999" stop-color="#4168c9" stop-opacity="0" />
                        </radialGradient>
                        <path fill="url(#yOrnnhliCrdS2gy~4tD8mb)"
                            d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z" />
                        <path fill="#fff"
                            d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z" />
                        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff" />
                        <path fill="#fff"
                            d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium">Instagram</h3>
                </div>
                <div class="mt-2 mb-4 text-sm">
                    Para ficar bem informado sobre o vestibulinho, cursos e novidades, siga a gente no instagram.
                </div>
                <div class="flex">
                    <a href='https://www.instagram.com/eteczonalesteoficial/' target="blank">
                        <button type="button"
                            class="text-white bg-green-800 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 14">
                                <path
                                    d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                            </svg>
                            Ver mais
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </div>
    </div>



    </div>

    </div>
</body>

</html>
