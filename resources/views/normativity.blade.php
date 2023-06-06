<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SM Telecomunicaciones - Normatividad</title>

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
    <div class="container mx-auto py-12">
        <h1 class="text-3xl font-bold text-center">Normatividad</h1>
        <div class="px-4 container mx-auto">
            <p class="text-base font-semibold leading-7 text-red-600">Seguridad</p>
            <h1 class="mt-2 text-1xl font-bold tracking-tight text-gray-900 sm:text-2xl">La seguridad en la red</h1>
            <p class="mt-6 leading-8 text-gray-700">
                Se ha implementado medidas para garantizar la seguridad de la red. Sistemas de protección (Sigar) contra
                intrusión no autorizada en sus elementos de red (armarios), que permiten monitorear en tiempo real
                cualquier intento de acceso a la red física de un abonado asociado a dicho elemento. El aseguramiento y
                la gestión se encuentran soportados mediante procesos establecidos al interior de la Compañía. Registrar
                los técnicos de campo que requieran ingresar a realizar trabajos dentro del domicilio de los quienes
                puede llamar al número 60(1)7868240 con el fin de confirmar la identidad de los empleados y constatar si
                efectivamente laboran con SM Telecomunicaciones.
            </p>
            <p class="mt-6 leading-8 text-gray-700">
                Mecanismos de protección del CORE de la Red, como son: Firewalls y filtrado perimetral, lo cual, evita y
                elimina todo riesgo de acceso no autorizado a la data correspondiente al servicio de correo masivo de
                sus usuarios. Plataforma especializada en el bloqueo de páginas y redirección a portales cautivos, dando
                cumplimiento a lo establecido por la normatividad vigente, se filtran las páginas de pornografía
                infantil publicadas por el ministerio de Comunicaciones Ley 679 (Esto se hace a través de los URLs
                reportados en la página). SM Telecomunicaciones cuenta con una red de alta disponibilidad, la cual
                opera basada en un modelo de operación que contempla la redundancia en los diferentes elementos que
                constituyen el CORE sobre el que se soporta el servicio de Internet.
            </p>
        </div>
        <div class="px-4 container mx-auto pt-4">
            <h1 class="mt-2 text-1xl font-bold tracking-tight text-gray-900 sm:text-2xl">
                Interceptación legal de comunicaciones
            </h1>
            <p class="mt-6 leading-8 text-gray-700">
                Los proveedores de redes y servicios de telecomunicaciones que
                desarrollen su actividad comercial en el territorio nacional deberán implementar y garantizar en todo
                momento la infraestructura tecnológica necesaria que provea los puntos de conexión y de acceso a la
                captura del tráfico de las comunicaciones que cursen por sus redes, para que los organismos con
                funciones permanentes de Policía Judicial cumplan, previa autorización del Fiscal General de la Nación o
                su delegado, con todas aquellas labores inherentes a la interceptación de las comunicaciones requeridas.
            </p>
        </div>
        <div class="px-4 container mx-auto pt-4">
            <h1 class="mt-2 text-1xl font-bold tracking-tight text-gray-900 sm:text-2xl">
                Usamos las mejores marcas del mercado
            </h1>
            <p class="mt-6 leading-8 text-gray-700">
                En SM Telecomunicaciones, estamos comprometidos con la prestación del mejor servicio, es por esto que
                al adquirir cualquiera de nuestros paquetes dispondrás de equipos de las mejores marcas del mercado y
                podrás consultar sus características aquí.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center py-12">
                <img src="/images/ubiquiti.png" class="h-40 w-auto">
                <img src="/images/tp-link.png" class="h-40 w-auto">
                <img src="/images/dlink.png" class="h-40 w-auto">
                <img src="/images/huawei.png" class="h-40 w-auto">
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
