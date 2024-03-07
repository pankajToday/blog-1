import './bootstrap';
import '../css/styles.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import Vapor from 'laravel-vapor';
import {VaporAssetsMixin} from "./Mixins/VaporAssetsMixin.js";

import jQ from 'jquery'
window.$ = window.jQuery = jQ


const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'My Blog';
Vapor.withBaseAssetUrl(import.meta.env.VITE_VAPOR_ASSET_URL)

createInertiaApp({
    title: title => `${title} - My Blog`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {

        const myApp = createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mixin(VaporAssetsMixin)

        return myApp.mount(el);
    },
});


