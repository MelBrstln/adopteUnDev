
import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);
/*
    Import des composants
 */
import Home from './components/home.vue';
import Products from './components/produits.vue';
import Devs from './components/devs.vue';

// 2. Définition des routes
// Chaque route doit être mappée à un composant
const routes = [
    {
        path: '/vueapp/public/home',
        name: 'home',
        component: Home
    },
    {
        path: '/devs',
        name: 'devs',
        component: Devs,
        props : true
    },
];


export default new VueRouter({
    history: true,
    mode: 'history',
    routes
})