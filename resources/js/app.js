/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var VuePaginate = require('vue-paginate');
import VueRouter from 'vue-router'
import Vuetify from 'Vuetify';
/** To import vue-router */
import Routes from '@/js/routes.js';
import App from '@/js/components/AlumnosComponent';
//componentfile

const routes = [
    { path: '/', component: require('./components/ExampleComponent.vue') },
    { path: '/user', component: require('./components/User.vue') }
];
const router = new VueRouter({
    routes
});
/**
 * The following block is used for implementing vue-pagination and Vuetify
 */
Vue.use(VuePaginate)
Vue.use(Vuetify);
Vue.use(VueRouter)

const app = new Vue({
    router,
    vuetify: new Vuetify(),
    render: h => h(App),
}).$mount('#app');