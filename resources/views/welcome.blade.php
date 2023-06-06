<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<span id="vue-root">
    <main-header>
    </main-header>
</span>

<body class="antialiased">
    <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
        <img src="https://images.unsplash.com/photo-1557825835-3185803dd474?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
            alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-center filter brightness-50">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Internet en fibra óptica</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">
                    Ofrecemos la mejor conexión de Internet.
                </p>
            </div>
            <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col-reverse">
                        <dt class="text-base text-gray-300">En todos los rincones de tu hogar</dt>
                        <dd class="text-2xl font-bold tracking-tight text-white">Wi-Fi con mayor potencia</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base text-gray-300">Con nuestros planes simétricos</dt>
                        <dd class="text-2xl font-bold tracking-tight text-white">Conecta tus dispositivos</dd>
                    </div>
                </dl>
            </div>
            <div class="mx-auto mt-12 max-w-2xl lg:mx-0 lg:max-w-none">
                <a class="text-white border rounded px-4 py-3 text-2xl bg-red-700 hover:bg-red-800" href="#">Ver
                    planes</a>
            </div>
        </div>
    </div>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-center inline-block mb-3"
                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm320 96c0-26.9-16.5-49.9-40-59.3V88c0-13.3-10.7-24-24-24s-24 10.7-24 24V292.7c-23.5 9.5-40 32.5-40 59.3c0 35.3 28.7 64 64 64s64-28.7 64-64zM144 176a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm-16 80a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM400 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                        </svg>
                        <br>
                        Descargas rápidas
                    </dd>
                    <dt class="text-base leading-7 text-gray-600">De hasta 50 Mbps</dt>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-center inline-block mb-3"
                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                        </svg>
                        <br>
                        Alta disponibilidad
                    </dd>
                    <dt class="text-base leading-7 text-gray-600">99% de tiempo de actividad de Internet</dt>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-center inline-block mb-3"
                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z" />
                        </svg>
                        <br>
                        Soporte activo
                    </dd>
                    <dt class="text-base leading-7 text-gray-600">24 horas, 7 días a la semana</dt>
                </div>
            </dl>
        </div>
    </div>

    <div class="relative isolate px-6 lg:px-8 border-y">
        <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:py-32">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                    Somos <span class="text-red-600 underline">número uno</span> en conexiones
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    SM Optical Fiber S.A.S es una empresa de telecomunicaciones que apuesta a la tecnología para mejorar
                    y simplificar la manera en que nuestros clientes interactúan, hacen negocios con el fin de obtener
                    Innovación, Tecnológica, Escalabilidad y Convergencia. Desde nuestros inicios brindamos un excelente
                    servicio con el fin de hacer sentir conforme al usuario final.
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
                        Saber más
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto max-w-2xl py-8 px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 text-center mb-5">
            Planes para el hogar
        </h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 place-items-center">
            <div
                class="max-w-md rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16 hover:shadow">
                <div class="mx-auto max-w-xs px-8">
                    <p class="text-base font-semibold text-gray-600">Hasta 7 dispositivos</p>
                    <p class="mt-6 flex items-baseline justify-center gap-x-2">
                    <p class="text-5xl font-bold tracking-tight text-gray-900">20</p>
                    <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">
                        Megas simétricas
                    </span>
                    </p>
                    <a href="#"
                        class="mt-10 block w-full rounded-md bg-red-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                        Lo quiero
                    </a>
                    <p class="mt-6 text-xs leading-5 text-gray-600">
                        Router Wi-Fi y Soporte 24/7
                    </p>
                </div>
            </div>
            <div
                class="max-w-md rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16 hover:shadow">
                <div class="mx-auto max-w-xs px-8">
                    <p class="text-base font-semibold text-gray-600">Hasta 10 dispositivos</p>
                    <p class="mt-6 flex items-baseline justify-center gap-x-2">
                    <p class="text-5xl font-bold tracking-tight text-gray-900">30</p>
                    <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">
                        Megas simétricas
                    </span>
                    </p>
                    <a href="#"
                        class="mt-10 block w-full rounded-md bg-red-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                        Lo quiero
                    </a>
                    <p class="mt-6 text-xs leading-5 text-gray-600">
                        Router Wi-Fi y Soporte 24/7
                    </p>
                </div>
            </div>
            <div
                class="max-w-md rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16 hover:shadow">
                <div class="mx-auto max-w-xs px-8">
                    <p class="text-base font-semibold text-gray-600">Hasta 15 dispositivos</p>
                    <p class="mt-6 flex items-baseline justify-center gap-x-2">
                    <p class="text-5xl font-bold tracking-tight text-gray-900">50</p>
                    <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">
                        Megas simétricas
                    </span>
                    </p>
                    <a href="#"
                        class="mt-10 block w-full rounded-md bg-red-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                        Lo quiero
                    </a>
                    <p class="mt-6 text-xs leading-5 text-gray-600">
                        Router Wi-Fi y Soporte 24/7
                    </p>
                </div>
            </div>
            <div
                class="max-w-md rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16 hover:shadow">
                <div class="mx-auto max-w-xs px-8">
                    <p class="text-base font-semibold text-gray-600">Teletrabajo</p>
                    <p class="mt-6 flex items-baseline justify-center gap-x-2">
                    <p class="text-5xl font-bold tracking-tight text-gray-900">100</p>
                    <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">
                        Megas simétricas
                    </span>
                    </p>
                    <a href="#"
                        class="mt-10 block w-full rounded-md bg-red-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                        Lo quiero
                    </a>
                    <p class="mt-6 text-xs leading-5 text-gray-600">
                        Router Wi-Fi y Soporte 24/7
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
