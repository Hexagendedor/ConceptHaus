/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
var VuePaginate = require('vue-paginate');
import Vuetify from 'Vuetify';
/** To import vue-router */
import App from '@/js/views/App';

/**
 * The following block is used for implementing vue-pagination and Vuetify
 */
Vue.use(VuePaginate)
Vue.use(Vuetify);
Vue.use(VueRouter)



import Home from './components/AlumnosComponent'
import Alumnos from './components/ListaComponent'


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/calificaciones',
            name: 'calificaciones',
            component: Alumnos,
        },
    ],
});

const app = new Vue({
    router,
    vuetify: new Vuetify(),
    render: h => h(App),
}).$mount('#app');