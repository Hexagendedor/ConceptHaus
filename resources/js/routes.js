import Vue          from 'vue';
import VueRouter    from 'vue-router';

import Home from '@/js/components/AlumnosComponent';
import Alumnos from '@/js/components/ListaComponent';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    router: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/calificaciones',
            component: Alumnos
        }
    ]
});

export default router;