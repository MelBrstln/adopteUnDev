/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


import Vue from 'vue'; // Importing Vue Library
window.Vue = require('vue');
import VueRouter from 'vue-router'; // importing Vue router library
import router from './router';
const VueResource = require('vue-resource');
Vue.use(VueResource);
import index from "./components/index.vue";
Vue.use(VueRouter);
window.$ = require('jquery');
window.JQuery = require('jquery');
import Vuex from 'vuex';

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('index', require('./components/index.vue'));

const app = new Vue({
    el: '#app',
    router,
    components: {
        index
    }
});