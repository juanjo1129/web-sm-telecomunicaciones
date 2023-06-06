<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SM Telecomunicaciones</title>

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

    <div class="bg-white py-24 sm:py-32 px-6" <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-red-600">Nuestros servicios</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Todo lo que necesitas en un plan de Internet
            </p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div
                            class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-white"
                                viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288H175.5L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7H272.5L349.4 44.6z" />
                            </svg>
                        </div>
                        Diseño de soluciones de energía
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-gray-600">
                        Innovamos para nuestro futuro por medio de soluciones ambientales.
                    </dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div
                            class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-white"
                                viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M256 64H384v64H256V64zM240 0c-26.5 0-48 21.5-48 48v96c0 26.5 21.5 48 48 48h48v32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h96v32H80c-26.5 0-48 21.5-48 48v96c0 26.5 21.5 48 48 48H240c26.5 0 48-21.5 48-48V368c0-26.5-21.5-48-48-48H192V288H448v32H400c-26.5 0-48 21.5-48 48v96c0 26.5 21.5 48 48 48H560c26.5 0 48-21.5 48-48V368c0-26.5-21.5-48-48-48H512V288h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H352V192h48c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H240zM96 448V384H224v64H96zm320-64H544v64H416V384z" />
                            </svg>
                        </div>
                        Internet por fibra óptica
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-gray-600">
                        Te ofrecemos el mejor servicio, con la mejor calidad del mercado.
                    </dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div
                            class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-white"
                                viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                            </svg>
                        </div>
                        Sistemas de seguridad
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-gray-600">
                        Para cuidar de ti y de tu familia de los diferentes peligros informáticos.
                    </dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div
                            class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-white"
                                viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M62.6 2.3C46.2-4.3 27.6 3.6 20.9 20C7.4 53.4 0 89.9 0 128s7.4 74.6 20.9 108c6.6 16.4 25.3 24.3 41.7 17.7S86.9 228.4 80.3 212C69.8 186.1 64 157.8 64 128s5.8-58.1 16.3-84C86.9 27.6 79 9 62.6 2.3zm450.8 0C497 9 489.1 27.6 495.7 44C506.2 69.9 512 98.2 512 128s-5.8 58.1-16.3 84c-6.6 16.4 1.3 35 17.7 41.7s35-1.3 41.7-17.7c13.5-33.4 20.9-69.9 20.9-108s-7.4-74.6-20.9-108C548.4 3.6 529.8-4.3 513.4 2.3zM340.1 165.2c7.5-10.5 11.9-23.3 11.9-37.2c0-35.3-28.7-64-64-64s-64 28.7-64 64c0 13.9 4.4 26.7 11.9 37.2L98.9 466.8c-7.3 16.1-.2 35.1 15.9 42.4s35.1 .2 42.4-15.9L177.7 448H398.3l20.6 45.2c7.3 16.1 26.3 23.2 42.4 15.9s23.2-26.3 15.9-42.4L340.1 165.2zM369.2 384H206.8l14.5-32H354.7l14.5 32zM288 205.3L325.6 288H250.4L288 205.3zM163.3 73.6c5.3-12.1-.2-26.3-12.4-31.6s-26.3 .2-31.6 12.4C109.5 77 104 101.9 104 128s5.5 51 15.3 73.6c5.3 12.1 19.5 17.7 31.6 12.4s17.7-19.5 12.4-31.6C156 165.8 152 147.4 152 128s4-37.8 11.3-54.4zM456.7 54.4c-5.3-12.1-19.5-17.7-31.6-12.4s-17.7 19.5-12.4 31.6C420 90.2 424 108.6 424 128s-4 37.8-11.3 54.4c-5.3 12.1 .2 26.3 12.4 31.6s26.3-.2 31.6-12.4C466.5 179 472 154.1 472 128s-5.5-51-15.3-73.6z" />
                            </svg>
                        </div>
                        Internet por radio-enlace
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-gray-600">
                        Para llegar a los lugares más difíciles y ofrecerte el mejor servicio.
                    </dd>
                </div>
            </dl>

            <div class="mt-12">
                <div class="mx-auto max-w-2xl lg:text-center mb-12">
                    <p class="mt-2 text-1xl font-bold tracking-tight text-gray-900 sm:text-2xl">
                        Accede fácilmente a las siguientes opciones
                    </p>
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                    <a class="px-4 py-8 border-2 border-red-600 rounded-xl hover:shadow-md hover:bg-red-50 text-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-red-600 pb-3 inline-block h-16 w-16"
                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z" />
                        </svg>
                        <br>
                        <p class="text-lg">Servicio</p>
                        <p class="text-gray-600">al cliente</p>
                    </a>
                    <a class="px-4 py-8 border-2 border-red-600 rounded-xl hover:shadow-md hover:bg-red-50 text-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-red-600 pb-3 inline-block h-16 w-16"
                            viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 80c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm128 72c8.8 0 16 7.2 16 16v17.3c8.5 1.2 16.7 3.1 24.1 5.1c8.5 2.3 13.6 11 11.3 19.6s-11 13.6-19.6 11.3c-11.1-3-22-5.2-32.1-5.3c-8.4-.1-17.4 1.8-23.6 5.5c-5.7 3.4-8.1 7.3-8.1 12.8c0 3.7 1.3 6.5 7.3 10.1c6.9 4.1 16.6 7.1 29.2 10.9l.5 .1 0 0 0 0c11.3 3.4 25.3 7.6 36.3 14.6c12.1 7.6 22.4 19.7 22.7 38.2c.3 19.3-9.6 33.3-22.9 41.6c-7.7 4.8-16.4 7.6-25.1 9.1V440c0 8.8-7.2 16-16 16s-16-7.2-16-16V422.2c-11.2-2.1-21.7-5.7-30.9-8.9l0 0c-2.1-.7-4.2-1.4-6.2-2.1c-8.4-2.8-12.9-11.9-10.1-20.2s11.9-12.9 20.2-10.1c2.5 .8 4.8 1.6 7.1 2.4l0 0 0 0 0 0c13.6 4.6 24.6 8.4 36.3 8.7c9.1 .3 17.9-1.7 23.7-5.3c5.1-3.2 7.9-7.3 7.8-14c-.1-4.6-1.8-7.8-7.7-11.6c-6.8-4.3-16.5-7.4-29-11.2l-1.6-.5 0 0c-11-3.3-24.3-7.3-34.8-13.7c-12-7.2-22.6-18.9-22.7-37.3c-.1-19.4 10.8-32.8 23.8-40.5c7.5-4.4 15.8-7.2 24.1-8.7V232c0-8.8 7.2-16 16-16z" />
                        </svg>
                        <br>
                        <p class="text-lg">Paga</p>
                        <p class="text-gray-600">tu factura</p>
                    </a>
                    <a class="px-4 py-8 border-2 border-red-600 rounded-xl hover:shadow-md hover:bg-red-50 text-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-red-600 pb-3 inline-block h-16 w-16"
                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM256 416c35.3 0 64-28.7 64-64c0-17.4-6.9-33.1-18.1-44.6L366 161.7c5.3-12.1-.2-26.3-12.3-31.6s-26.3 .2-31.6 12.3L257.9 288c-.6 0-1.3 0-1.9 0c-35.3 0-64 28.7-64 64s28.7 64 64 64zM176 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM96 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm352-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                        </svg>
                        <br>
                        <p class="text-lg">Test</p>
                        <p class="text-gray-600">de velocidad</p>
                    </a>
                    <a class="px-4 py-8 border-2 border-red-600 rounded-xl hover:shadow-md hover:bg-red-50 text-center"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-red-600 pb-3 inline-block h-16 w-16"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                        </svg>
                        <br>
                        <p class="text-lg">Hablemos</p>
                        <p class="text-gray-600">por WhatsApp</p>
                    </a>
                </div>
            </div>
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

    <div class="container mx-auto max-w-2xl py-24 px-6 lg:px-8">
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
