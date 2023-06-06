<template>
    <div class="w-full px-4 py-6">
        <div class="mx-auto w-full max-w-3xl rounded-2xl bg-white p-2">
            <Disclosure v-slot="{ open }">
                <DisclosureButton
                    class="flex w-full justify-between rounded-lg bg-red-100 px-4 py-2 text-left text-sm font-medium text-red-900 hover:bg-red-200 focus:outline-none focus-visible:ring focus-visible:ring-red-500 focus-visible:ring-opacity-75"
                >
                    <span>¿Por qué mi señal Wi-Fi está inestable?</span>
                    <ChevronUpIcon
                        :class="open ? 'rotate-180 transform' : ''"
                        class="h-5 w-5 text-red-500"
                    />
                </DisclosureButton>
                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
                    El Wi-Fi son ondas electromagnéticas las cuales llegan a los
                    dispositivos, se puede afectar la señal cuando dejamos el
                    Modem o Router cerca a bafles, TV, equipos de radio. Se
                    recomienda dejar el modem en un lugar libre que nada impida
                    su radio de cobertura, y prohibido dejar debajo de las
                    escaleras o cerca a los TV.
                </DisclosurePanel>
            </Disclosure>
            <Disclosure as="div" class="mt-2" v-slot="{ open }">
                <DisclosureButton
                    class="flex w-full justify-between rounded-lg bg-red-100 px-4 py-2 text-left text-sm font-medium text-red-900 hover:bg-red-200 focus:outline-none focus-visible:ring focus-visible:ring-red-500 focus-visible:ring-opacity-75"
                >
                    <span>¿Por qué mi servicio de internet está lento?</span>
                    <ChevronUpIcon
                        :class="open ? 'rotate-180 transform' : ''"
                        class="h-5 w-5 text-red-500"
                    />
                </DisclosureButton>
                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
                    Estos son algunos de los factores:
                    <ol>
                        <li>
                            1. Equipos desactualizados o poca capacidad de
                            dispositivos como PC, Tablets, etc.
                        </li>
                        <li>
                            2. Que la capacidad de su plan no proporcione lo
                            necesario para su consumo. Puede que tenga muchos
                            dispositivos conectados a la red y su navegación se
                            puede ver afectada.
                        </li>
                        <li>
                            3. Los servidores de las plataformas que usamos como
                            redes sociales o youtube o servidores de juegos
                            también fallan, se recomienda revisar todas las
                            plataformas antes de pensar que pueda ser el
                            internet.
                        </li>
                        <li>
                            4. Nuestros proveedores están calificados con altos
                            estándares a nivel nacional, pero ellos también
                            pueden presentar fallas e inconvenientes al
                            suministro de internet el cual nosotros le hacemos
                            llegar a su casa.
                        </li>
                    </ol>
                </DisclosurePanel>
            </Disclosure>
            <Disclosure as="div" class="mt-2" v-slot="{ open }">
                <DisclosureButton
                    class="flex w-full justify-between rounded-lg bg-red-100 px-4 py-2 text-left text-sm font-medium text-red-900 hover:bg-red-200 focus:outline-none focus-visible:ring focus-visible:ring-red-500 focus-visible:ring-opacity-75"
                >
                    <span>¿Speed Test o Test de Velocidad?</span>
                    <ChevronUpIcon
                        :class="open ? 'rotate-180 transform' : ''"
                        class="h-5 w-5 text-red-500"
                    />
                </DisclosureButton>
                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
                    Se recomienda realizar el test de velocidad siempre por
                    cable UTP. Debes tener presente al realizar el test, que
                    sólo debe estar conectado a la red el dispositivo que
                    realice el test.
                </DisclosurePanel>
            </Disclosure>
            <Disclosure as="div" class="mt-2" v-slot="{ open }">
                <DisclosureButton
                    class="flex w-full justify-between rounded-lg bg-red-100 px-4 py-2 text-left text-sm font-medium text-red-900 hover:bg-red-200 focus:outline-none focus-visible:ring focus-visible:ring-red-500 focus-visible:ring-opacity-75"
                >
                    <span>
                        ¿Qué debo hacer cuando el modem tiene una luz roja
                        encendida?
                    </span>
                    <ChevronUpIcon
                        :class="open ? 'rotate-180 transform' : ''"
                        class="h-5 w-5 text-red-500"
                    />
                </DisclosureButton>
                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
                    Eso significa que el internet no está llegando o hay un
                    corte en el cable de la fibra óptica. Comunícate con los
                    canales de servicio y notifica la novedad.
                </DisclosurePanel>
            </Disclosure>
            <Disclosure as="div" class="mt-2" v-slot="{ open }">
                <DisclosureButton
                    class="flex w-full justify-between rounded-lg bg-red-100 px-4 py-2 text-left text-sm font-medium text-red-900 hover:bg-red-200 focus:outline-none focus-visible:ring focus-visible:ring-red-500 focus-visible:ring-opacity-75"
                >
                    <span> ¿Qué uso debemos darle al servicio? </span>
                    <ChevronUpIcon
                        :class="open ? 'rotate-180 transform' : ''"
                        class="h-5 w-5 text-red-500"
                    />
                </DisclosureButton>
                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
                    El uso del servicio de internet siempre será responsabilidad
                    por parte del usuario. Intercon prohíbe el uso de internet
                    para la explotación infantil o apuestas por medio de
                    Internet.
                </DisclosurePanel>
            </Disclosure>
        </div>
    </div>
</template>

<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from "@headlessui/vue";
import { ChevronUpIcon } from "@heroicons/vue/20/solid";
</script>
