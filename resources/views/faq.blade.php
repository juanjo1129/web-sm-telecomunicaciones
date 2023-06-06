<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SM Telecomunicaciones - FAQ</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<span id="vue-root">
    <main-header>
    </main-header>

    <body class="antialiased">
        <div class="container mx-auto py-12">
            <h1 class="text-3xl font-bold text-center">Preguntas frecuentes</h1>
            <faq></faq>
        </div>
    </body>
</span>

<footer class="text-white text-sm shadow">
    <div class="bg-red-600 px-4">
        <div class="container mx-auto py-4">
            <a href="/">
                <span class="sr-only">SM Telecomunicaciones</span>
                <img class="px-4 py-2 h-12 w-auto bg-white rounded" src="/images/logo.png" alt="" />
            </a>
            <div class="text-sm grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4">
                <div>
                    <dt class="font-bold">
                        Dirección
                    </dt>
                    <dd>
                        CRA 11E # 29A 29 LOCAL LA CUMBRE
                    </dd>
                </div>
                <div>
                    <dt class="font-bold">
                        Teléfono
                    </dt>
                    <dd>
                        +57 3154808114
                        <br>
                        +57 3214486466
                    </dd>
                </div>
                <div>
                    <dt class="font-bold">
                        Correo
                    </dt>
                    <dd>
                        smopticalfiber@gmail.com
                    </dd>
                </div>
                <div>
                    <dt class="font-bold">
                        Horario
                    </dt>
                    <dd>
                        8:00 AM a 6:00 PM
                    </dd>
                </div>
            </div>
            <div class="pt-4">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-red-200 hover:fill-white"
                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="bg-red-700 px-4">
        <div class="container mx-auto py-2">
            © 2023 SM Telecomunicaciones. Todos los derechos reservados.
        </div>
    </div>
</footer>

</html>
