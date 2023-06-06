import "./bootstrap";

import { createApp } from "vue/dist/vue.esm-bundler";

import MainHeader from "./Components/MainHeader.vue";

const rootElement = document.getElementById("vue-root");

if (rootElement) {
    createApp({
        components: {
            MainHeader,
        },
    }).mount(rootElement);
}
