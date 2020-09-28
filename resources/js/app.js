require('./bootstrap');


import route from 'ziggy';
import { Ziggy } from './ziggy';
import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';


Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);

const app = document.getElementById('app');



Vue.mixin({
    methods: {
        route: window.route,
        isRoute(...routes) {
            return routes.some(route => this.route().current(route));
        }
    }
})

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);

